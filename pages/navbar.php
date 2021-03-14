<ul class="navbar-nav align-items-center">
    <!-- <li class="nav-item dropdown">
        <a class="nav-link text-dark mr-lg-3 icon-notifications" data-unread-notifications="true" href="#" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="icon icon-sm">
                <span class="fas fa-bell bell-shake"></span>
                <span class="icon-badge rounded-circle unread-notifications"></span>
            </span>
        </a>
        <div class="dropdown-menu dashboard-dropdown dropdown-menu-lg dropdown-menu-center mt-2 py-0">
            <div class="list-group list-group-flush">
                <a href="#"
                    class="text-center text-primary font-weight-bold border-bottom border-light py-3">แจ้งเตือน</a>
                
                    <a href="../../pages/calendar.html"
                    class="list-group-item list-group-item-action border-bottom border-light">
                    <div class="row align-items-center">
                        <div class="col-auto">
                          
                            <img alt="Image placeholder" src="../../assets/img/team/profile-picture-1.jpg"
                                class="user-avatar lg-avatar rounded-circle">
                        </div>
                        <div class="col pl-0 ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="h6 mb-0 text-small">ชื่อผู้แจ้ง</h4>
                                </div>
                                <div class="text-right">
                                    <small class="text-danger">เมื่อไรแล้ว</small>
                                </div>
                            </div>
                            <p class="font-small mt-1 mb-0">เหตุการณ์ เวลานัดหมาย</p>
                        </div>
                    </div>
                </a>

                <a href="../../pages/tasks.html"
                    class="list-group-item list-group-item-action border-bottom border-light">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            
                            <img alt="Image placeholder" src="../../assets/img/team/profile-picture-2.jpg"
                                class="user-avatar lg-avatar rounded-circle">
                        </div>
                        <div class="col pl-0 ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="h6 mb-0 text-small">Neil Sims</h4>
                                </div>
                                <div class="text-right">
                                    <small class="text-danger">2 hrs ago</small>
                                </div>
                            </div>
                            <p class="font-small mt-1 mb-0">You've been assigned a task for "Awesome
                                new project".</p>
                        </div>
                    </div>
                </a>

                
                
                
                <a href="#" class="dropdown-item text-center text-primary font-weight-bold py-3">ดูทั้งหมด</a>
            </div>
        </div>
    </li> -->
    <li class="nav-item dropdown">
        <a class="nav-link pt-1 px-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <div class="media d-flex align-items-center">
                <img class="user-avatar md-avatar rounded-circle" alt="Image placeholder"
                    src="<?php echo  $_SESSION["UserIMG"]; ?>">
                    <!-- ../../assets/img/team/profile-picture-3.jpg -->
                <div class="media-body ml-2 text-dark align-items-center d-none d-lg-block">
                    <span class="mb-0 font-small font-weight-bold"><?php echo  $_SESSION["User"]; ?></span>
                </div>
            </div>
        </a>
        <div class="dropdown-menu dashboard-dropdown dropdown-menu-right mt-2">
            <a class="dropdown-item font-weight-bold" href="../student_detail"><span class="far fa-user-circle"></span>ข้อมูลของฉัน</a>
           <!--  <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-cog"></span>Settings</a>
            <a class="dropdown-item font-weight-bold" href="#"><span
                    class="fas fa-envelope-open-text"></span>Messages</a>
            <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-user-shield"></span>Support</a> -->
            <div role="separator" class="dropdown-divider"></div>
            <a class="dropdown-item font-weight-bold" href="../../logout.php"><span
                    class="fas fa-sign-out-alt text-danger"></span>ออกจากระบบ</a>
        </div>
    </li>
</ul>