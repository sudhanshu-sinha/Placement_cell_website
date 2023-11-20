<?php
$conn = new mysqli("localhost", "root", "", "placement_cell_website");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

$userId = $_SESSION['user_id'];

// Fetch notifications for the current user
$sql = "SELECT * FROM notifications WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();

$notifications = [];
while ($row = $result->fetch_assoc()) {
    $notifications[] = [
        'message' => $row['message'],
        'timestamp' => $row['timestamp'],
    ];
}

echo json_encode($notifications);

$stmt->close();
$conn->close();


?>
