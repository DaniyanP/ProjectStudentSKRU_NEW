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
        <h6><span class="badge bg-success">ผู้ดูแลระบบ</span></h6>
            <li class="nav-item ">
                <a href="../../pages/admin" class="nav-link">
                    <span class="sidebar-icon"><span class="fas  fa-volume-up"></span></span>
                    <span>ข่าวประชาสัมพันธ์</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="../../pages/admin_teacher" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-user"></span></span>
                    <span>ข้อมูลอาจารย์</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="../../pages/admin_admin" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-address-card"></span></span>
                    <span>ข้อมูลผู้ดูแลระบบ</span>
                </a>
            </li>
            
            
                       


           
            

            <li role="separator" class="dropdown-divider mt-4 mb-3 border-black"></li>

            
           
        </ul>
    </div>
</nav>