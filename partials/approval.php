<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';

session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: index.php");
            exit();
        }
require('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the company profile ID
    $id = $_POST['id'];

    // Check which button was clicked (Approve or Reject)
    if (isset($_POST['approve'])) {

        $sql = "UPDATE upcoming_companies SET approval_status = 'Approved' WHERE id = $id";
        $message = "The company profile has been approved.";

        sendNotificationsToEligibleStudents($id);

    } elseif (isset($_POST['reject'])) {
        
        $sql = "UPDATE upcoming_companies SET approval_status = 'Rejected' WHERE id = $id";
        $message = "The company profile has been rejected.";
    } else {
        
        echo '<script>
                alert("Invalid action. Please try again.");
                window.close(); // Close the popup
              </script>';
        exit();
    }

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        // Close the popup and reload the parent window
        echo '<script>
                window.parent.closeModal();
                window.parent.location.reload();
              </script>';
    } else {
        // Close the popup and reload the parent window with an error message
        echo '<script>
                window.parent.closeModal();
                window.parent.location.reload();
                alert("Error updating approval status.");
              </script>';
    }
} else {
    // Invalid request
    header('Location: admin.php');
}



// Function to send notification to a user
function sendNotification($userId, $companyId, $message) {
    global $conn;

    $sql = "INSERT INTO notifications (user_id, company_id, message) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iis", $userId, $companyId, $message);

    if ($stmt->execute()) {
        echo "Notification sent successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Function to send notifications to eligible students for a company
function sendNotificationsToEligibleStudents($companyId) {
    global $conn;

    // Fetch company details
    $companySql = "SELECT * FROM upcoming_companies WHERE id = ?";
    $companyStmt = $conn->prepare($companySql);
    $companyStmt->bind_param("i", $companyId);
    $companyStmt->execute();
    $companyResult = $companyStmt->get_result();

    if ($companyRow = $companyResult->fetch_assoc()) {
        // Fetch eligible students
        $eligibleSql = "SELECT id, cgpa, percentage_10th, percentage_12th, backlogs FROM users 
        WHERE id != 1
        AND cgpa >= ? 
        AND percentage_10th >= ? 
        AND percentage_12th >= ? 
        AND backlogs <= ?";
        $eligibleStmt = $conn->prepare($eligibleSql);
        $eligibleStmt->bind_param("ssss", 
            $companyRow['eligibility_cgpa'],
            $companyRow['eligibility_percentage_10th'],
            $companyRow['eligibility_percentage_12th'],
            $companyRow['eligibility_backlogs']
        );
        $eligibleStmt->execute();
        $eligibleResult = $eligibleStmt->get_result();

        // Send notifications to eligible students
        while ($eligibleRow = $eligibleResult->fetch_assoc()) {
            $message = "Congratulations! You are eligible for the position at " . $companyRow['company_name'];
            sendNotification($eligibleRow['id'], $companyId, $message);
            sendEmailToStudent($eligibleRow['id'], $message);
        }

        $eligibleStmt->close();
    }

    $companyStmt->close();
}

function sendEmailToStudent($userId, $message) {
    // Fetch student's email
    $sql = "SELECT email FROM users WHERE id = ?";
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        $to = $row['email'];
        $subject = 'Placement Notification';
        $body = "Dear Student,\r\n\r\n" . $message;

        $mail = new PHPMailer(true);
        //Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'sudhanshu.cu@gmail.com';
        $mail->Password   = 'vegv caxj pltm uoug';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        //Recipients
        $mail->setFrom('sudhanshu.cu@gmail.com', 'Sudhanshu Sinha'); 
        $mail->addAddress($to);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $body;

        try {
            $mail->SMTPAutoTLS = false; 
            $mail->send();
            echo 'Email sent successfully';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    $stmt->close();
}


$conn->close();
?>
