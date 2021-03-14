<nav id="sidebarMenu" class="sidebar d-md-block bg-primary text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
   <!--  ส่วนแสดงแบบโทรศัพท์ -->
        <div
            class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="user-avatar lg-avatar mr-4">
                    <img src="<?php echo  $_SESSION["TeacherPhoto"]; ?>"
                        class="card-img-top rounded-circle border-white" alt="Bonnie Green">
                </div>
                
                <div class="d-block">
                    <h2 class="h6"><?php echo  $_SESSION["TeacherName"]; ?></h2>
                    <a href="../../logout.php" class="btn btn-secondary text-dark btn-xs"><span
                            class="mr-2"><span class="fas fa-sign-out-alt"></span></span>ออกจากระบบ</a>
                </div>
            </div>
            <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" class="fas fa-times" data-toggle="collapse" data-target="#sidebarMenu"
                    aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation"></a>
            </div>
        </div>


        <ul class="nav flex-column">
        <h6><span class="badge bg-success">อาจารย์ที่ปรึกษาโครงงาน</span></h6>
            <li class="nav-item ">
                <a href="../../pages/teacher" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-home"></span></span>
                    <span>หน้าหลัก</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="../../pages/appoint_teacher" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-calendar-alt"></span></span>
                    <span>ข้อมูลการนัดพบนักศึกษา</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="../../pages/com05" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-star"></span></span>
                    <span>ข้อมูล COM-05</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="../../pages/project_teacher" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-file"></span></span>
                    <span>โครงงานที่ดูแล</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="../../pages/teacher_dashboard" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
                    <span>ภาพรวม</span>
                </a>
            </li>
            


           
            </li> 

            <li role="separator" class="dropdown-divider mt-4 mb-3 border-black"></li>

            
            <?php 
        
        if($_SESSION["Teacherlevel"]==2){
            echo'<h6><span class="badge bg-info">อาจารย์ประจำวิชา</span></h6>
<li class="nav-item ">
<a href="../../pages/subject" class="nav-link">
    <span class="sidebar-icon"><span class="fas fa-book"></span></span>
    <span>รายวิชา</span>
</a>
</li>

<li class="nav-item ">
<a href="../../pages/student_all" class="nav-link">
    <span class="sidebar-icon"><span class="fas fa-graduation-cap"></span></span>
    <span>จัดการข้อมูลนักศึกษา</span>
</a>
</li>

<li class="nav-item ">
<a href="../../pages/project_all" class="nav-link">
    <span class="sidebar-icon"><span class="fas fa-folder-open"></span></span>
    <span>จัดการข้อมูลโครงงาน</span>
</a>
</li>

<li class="nav-item ">
<a href="../../pages/teacher_all" class="nav-link">
    <span class="sidebar-icon"><span class="fas fa-user"></span></span>
    <span>จัดการข้อมูลอาจารย์</span>
</a>
</li>

';
        }
        
     
        
        
        ?>
        </ul>
    </div>
</nav>