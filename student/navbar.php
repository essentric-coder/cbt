
<?php

$email = $_SESSION['email'];
$query1 = mysqli_query($conn,"SELECT * FROM admin_table WHERE email_address = '$email'");
$row  = mysqli_fetch_assoc($query1);
$fname = $row['firstname'];
$lname = $row['lastname'];
$img =   $row['picture'];


?>

<div class="vertical-menu">

    <div class="h-100">

        <div class="user-wid text-center py-4">
            <div class="user-img">
                <img src="<?php echo '../images_admin/'.$img; ?>" alt="" class="avatar-md mx-auto rounded-circle">
            </div>

            <div class="mt-3">

                <a href="#" class="text-dark font-weight-medium font-size-16"><?php echo $fname. '   '.$lname; ?></a>
                <p class="text-body mt-1 mb-0 font-size-13"><?php echo $email; ?></p>

            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="Dashboard.php" class="waves-effect">
                        
                        <span>Dashboard</span>
                    </a>

                </li>


                <li>
                    <a href="activate_agent.php" class=" waves-effect">
                        <i class="mdi mdi-inbox-full"></i>
                        <span>Intelligent Agent</span>
                    </a>

                </li>

                <li>
                    <a href="javascript: void(0);" class="  waves-effect">
                        <i class="mdi mdi-calendar-check"></i>

                        <span>Notification</span>

                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="view_notification.php">Exam Notification</a></li>
                        <li><a href="send_notification.php">Send Notification</a></li>

                    </ul>

                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account-circle-outline"></i>
                        <span>Students</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="Student_register.php">Register</a></li>

                        <li><a href="view_students.php">View Student</a></li>
                    </ul>
                </li>



          <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-id-card"></i>
                        <span>Admin</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="admin.php">Register Admin</a></li>
                        <li><a href="view_admin.php">View Admin</a></li>
                    </ul>
                </li>

                <li>
                          <a href="javascript: void(0);" class="has-arrow waves-effect">
                              <i class="bx bx-pencil"></i>
                              <span>Exam</span>
                          </a>
                          <ul class="sub-menu" aria-expanded="false">
                              <li><a href="add_exam.php">Add Exam</a></li>
                              <li><a href="add_questions.php">Add question</a></li>
                          </ul>
                      </li>



                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-clipboard-list-outline"></i>
                        <span>Reports</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="Student_report.php">Student Report</a></li>
                        <li><a href="exam_report.php">Exam Report</a></li>
                        <li><a href="admin_report.php">Admin Report</a></li>
                        <li><a href="Notification_report.php">Notification Report</a></li>
                        <li><a href="case_report.php">Case Report</a></li>
                    </ul>
                </li>

                <li>
                    <a href="logout.php" class="waves-effect">
                        <i class="mdi mdi-chart-donut"></i>
                        <span>Logout</span>
                    </a>

                </li>



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
