<!DOCTYPE html>
<html>
<head>
    <title>Student Management</title>
    <style>
        .container {
            display: flex;
            justify-content: space-between;
        }

        .column {
            width: 48%;
            padding: 10px;
        }

        .scrollable {
            max-height: 400px;
            overflow-y: scroll;
        }

        .upcomming_company {
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 10px;
            border-radius: 4px;
            background: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            padding: 15px 12px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Left Column: Add Student Form -->
        <div class="column">
            <h2>Add Student</h2>
            <form action="add_student.php" method="post">
                <input type="text" name="first_name" placeholder="First Name" required>
                <input type="text" name="last_name" placeholder="Last Name" required>
                <button type="submit" name="add_student">Add Student</button>
            </form>
        </div>

        <!-- Right Column: Search and Student List -->
        <div class="column">
            <h2>Search Students</h2>
            <input type="text" id="search" placeholder="Search by name...">
            
            <div class="scrollable">
                <!-- Student information will be displayed here -->
                <?php
                // Retrieve and display student information from the database
                $conn = new mysqli("localhost", "root", "", "placement_cell_website");
                $sql = "SELECT * FROM users";
                $result = $conn->query($sql);
                
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="upcomming_company">';
                    echo "<p>Name: " . $row['first_name'] . " " . $row['last_name'] . "</p>";
                    echo '</div>';
                    echo '<div class="upcomming_company">';
                    echo "<p>Name: " . $row['first_name'] . " " . $row['last_name'] . "</p>";
                    echo '</div>';
                    echo '<div class="upcomming_company">';
                    echo "<p>Name: " . $row['first_name'] . " " . $row['last_name'] . "</p>";
                    echo '</div>';
                    echo '<div class="upcomming_company">';
                    echo "<p>Name: " . $row['first_name'] . " " . $row['last_name'] . "</p>";
                    echo '</div>';
                    echo '<div class="upcomming_company">';
                    echo "<p>Name: " . $row['first_name'] . " " . $row['last_name'] . "</p>";
                    echo '</div>';
                    echo '<div class="upcomming_company">';
                    echo "<p>Name: " . $row['first_name'] . " " . $row['last_name'] . "</p>";
                    echo '</div>';
                }

                $conn->close();
                ?>
            </div>
        </div>
    </div>
</body>
</html>
