<ul class="navbar-nav align-items-center">
   
    <li class="nav-item dropdown">
        <a class="nav-link pt-1 px-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <div class="media d-flex align-items-center">
                <img class="user-avatar md-avatar rounded-circle" alt="Image placeholder"
                    src="<?php echo  $_SESSION["UserIMG"]; ?>">
                    <!-- ../../assets/img/team/profile-picture-3.jpg -->
                <div class="media-body ml-2 text-dark align-items-center d-none d-lg-block">
                    <span class="mb-0 font-small font-weight-bold"><?php echo  $_SESSION["User"]; ?> (<?php echo  $_SESSION["UserID"]; ?>)</span>
                     
                </div>
            </div>
        </a>
        <div class="dropdown-menu dashboard-dropdown dropdown-menu-right mt-2">
            <a class="dropdown-item font-weight-bold" href="../student_detail"><span class="far fa-user-circle"></span>ข้อมูลของฉัน</a>
          
            <div role="separator" class="dropdown-divider"></div>
            <a class="dropdown-item font-weight-bold" href="../../logout.php"><span
                    class="fas fa-sign-out-alt text-danger"></span>ออกจากระบบ</a>
        </div>
    </li>
</ul>