<div class="sidebar open">
        <div class="logo-details">
            <img src="img/chandigarh-university-logo-cu_freelogovectors.net_-250x400.webp" class="icon">
            <div class="logo_name">CHANDIGARH UNIVERSITY</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="#company">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="#Students">
                    <i class='bx bx-user'></i>
                    <span class="links_name">User</span>
                </a>
                <span class="tooltip">User</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Company</span>
                </a>
                <span class="tooltip">Comapany</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Alumni</span>
                </a>
                <span class="tooltip">Alumni</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <img src="img/student_images/<?php echo $image_filename; ?>" alt="profileImg">
                    <div class="name_job">
                        <div class="name"><?php echo $firstName; ?></div>
                        <div class="job"><?php echo $uid; ?></div>
                    </div>
                </div>
                <form method="post" action="admin.php">
                <button type="submit" name="logout"><i class='bx bx-log-out' id="log_out"></i></button>
                </form>
                
            </li>
        </ul>
    </div>