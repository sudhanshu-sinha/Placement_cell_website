<div class="row">
<div class="container1" id=container1>
            <div class="information">
                <?php
                
                $conn = new mysqli("localhost", "root", "", "placement_cell_website");
                $sql = "SELECT * FROM users WHERE id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $userId);
                $stmt->execute();
                $result = $stmt->get_result();
                
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="profile_img">';
                    echo '<img src="'. $row['profile_image'] .'">';
                    echo '</div>';
                    echo '<div class="profile_detail">';
                    echo "<p><b>Name: </b>" . $row['first_name'] . " " . $row['last_name'] . "</p>";
                    echo "<p><b>UID: </b>" . $row['uid']."</p>";
                    echo "<p><b>Section: </b>" . $row['section'] . "</p>";
                    echo "<p><b>Mobile: </b>" . $row['mobile'] . "</p>";
                    echo "<p><b>D.O.B: </b>" . $row['dob'] . "</p>";
                    echo "<p><b>Email: </b>" . $row['email'] . "</p>";
                    echo "<p><b>CGPA: </b>" . $row['cgpa'] . "</p>";
                    echo "<p><b>Backlogs: </b>" . $row['backlogs'] . "</p>";
                    echo "<p><b>10th %age: </b>" . $row['percentage_10th'] . " %</p>";
                    echo "<p><b>12th %age: </b>" . $row['percentage_12th'] . "%</p>";
                    echo "<p><b>" . $row['status'] . " At " . $row['company'] . "</b></p>";
                    echo '</div>';
                }
                $conn->close();
                ?>
            </div>
        </div>
        <div class="container2">
            <div class="details">
                <h3 class="detail-h3">Basic Information</h3>
            </div>
            <div class="detail_info">
                <div class="info-col">
                    <lable class="info-lable">
                        First Name
                        <sup>*</sup>
                    </lable>
                    <input type="text" class="text_box" id="first_name" name="first_name">
                </div>
                <div class="info-col">
                    <lable class="info-lable">
                        Last Name
                        <sup>*</sup>
                    </lable>
                    <input type="text" class="text_box" id="last_name" name="last_name">
                </div>
                <div class="info-col">
                    <lable class="info-lable">
                        Email
                        <sup>*</sup>
                    </lable>
                    <input type="text" class="text_box" id="email" name="email">
                </div>
                <div class="info-col">
                    <lable class="info-lable">
                        Last Name
                        <sup>*</sup>
                    </lable>
                    <input type="text" class="text_box" id="last_name" name="last_name">
                </div>
            </div>
        </div>
        </div>