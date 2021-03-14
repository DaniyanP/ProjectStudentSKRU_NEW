<nav id="sidebarMenu" class="sidebar d-md-block bg-primary text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
   <!--  ส่วนแสดงแบบโทรศัพท์ -->
        <div
            class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="user-avatar lg-avatar mr-4">
                    <img src="<?php echo  $_SESSION["UserIMG"]; ?>"
                        class="card-img-top rounded-circle border-white" alt="Bonnie Green">
                </div>
                
                <div class="d-block">
                    <h2 class="h6"><?php echo  $_SESSION["User"]; ?></h2>
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

            <li class="nav-item ">
                <a href="../../pages/student_index" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-home"></span></span>
                    <span>หน้าหลัก</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="../../pages/appoint_history" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-calendar-alt"></span></span>
                    <span>ประวัติการนัดพบ</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="../../pages/score" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-star"></span></span>
                    <span>ประวัติการเข้าพบ</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="../../pages/project_detail" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-file"></span></span>
                    <span>ข้อมูลโครงงาน</span>
                </a>
            </li>



            <!-- <li class="nav-item">
                    <span class="nav-link  d-flex justify-content-between align-items-center" data-toggle="collapse"
                        data-target="#submenu-app">
                        <span>
                            <span class="sidebar-icon"><span class="fas fa-table"></span></span>
                            Tables
                        </span>
                        <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
                    </span>
                    <div class="multi-level collapse  show " role="list" id="submenu-app" aria-expanded="false">
                        <ul class="flex-column nav">
                            <li class="nav-item  active "><a class="nav-link"
                                    href="../../pages/tables/bootstrap-tables.html"><span>Bootstrap Tables</span></a>
                            </li>
                        </ul>
                    </div>
                </li> -->

            <!-- <li class="nav-item">
                <span class="nav-link  collapsed  d-flex justify-content-between align-items-center"
                    data-toggle="collapse" data-target="#submenu-components">
                    <span>
                        <span class="sidebar-icon"><span class="fas fa-box-open"></span></span>
                        Components
                    </span>
                    <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
                </span>
                <div class="multi-level collapse " role="list" id="submenu-components" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item "><a class="nav-link"
                                href="../../pages/components/buttons.html"><span>Buttons</span></a></li>
                        <li class="nav-item "><a class="nav-link"
                                href="../../pages/components/notifications.html"><span>Notifications</span></a></li>
                        <li class="nav-item "><a class="nav-link"
                                href="../../pages/components/forms.html"><span>Forms</span></a></li>
                        <li class="nav-item "><a class="nav-link"
                                href="../../pages/components/modals.html"><span>Modals</span></a></li>
                        <li class="nav-item "><a class="nav-link"
                                href="../../pages/components/typography.html"><span>Typography</span></a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <span class="nav-link  collapsed  d-flex justify-content-between align-items-center"
                    data-toggle="collapse" data-target="#test">
                    <span>
                        <span class="sidebar-icon"><span class="fas fa-box-open"></span></span>
                        test
                    </span>
                    <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
                </span>
                <div class="multi-level collapse " role="list" id="test" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item "><a class="nav-link"
                                href="../../pages/test/ex.php"><span>FullCalendar</span></a></li>
                        <li class="nav-item "><a class="nav-link"
                                href="datatable.php"><span>datatable</span></a></li>
                                <li class="nav-item "><a class="nav-link"
                                href="../../pages/test/excel.php"><span>Excel</span></a></li>
                        <li class="nav-item "><a class="nav-link"
                                href="../../pages/test/index.php"><span>blank</span></a></li>

                    </ul>
                </div>
            </li> -->

            <li role="separator" class="dropdown-divider mt-4 mb-3 border-black"></li>
            

        </ul>
    </div>
</nav>