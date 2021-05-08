<!--

=========================================================
* Volt - Bootstrap 5 Admin Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2020 Themesberg (https://www.themesberg.com)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<?php session_start();?>
<?php 

if (!$_SESSION["TeacherID"]){  

    Header("Location: ../../login_te.php"); 

}else{?>
<?php include '../../conn.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
    <?php include '../title.php';?>

    <?php include '../../meta.php';?>

    <!-- Fontawesome -->
    <link type="text/css" href="../../vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="../../vendor/notyf/notyf.min.css" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="../../css/volt.css" rel="stylesheet">

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>

    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
        <a class="navbar-brand mr-lg-5" href="../../index.html">
            <img class="navbar-brand-dark" src="../../assets/img/brand/light.svg" alt="Volt logo" /> <img
                class="navbar-brand-light" src="../../assets/img/brand/dark.svg" alt="Volt logo" />
        </a>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler d-md-none collapsed" type="button" data-toggle="collapse"
                data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <?php include '../menu_te.php';?>


    <main class="content">

        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex">
                        <nav aria-label="breadcrumb">
                            
                        </nav>
                    </div>
                    <!-- Navbar links -->
                    <?php include '../navbar_te.php';?>
                </div>
            </div>
        </nav>

        <div class="py-0">
        <?php

$teacher_id = $_SESSION["TeacherID"];



$sql = "SELECT
teacher.teacher_id,
teacher.teacher_name,
teacher.teacher_email,
teacher.teacher_photo
FROM
teacher
WHERE
teacher.teacher_id = '$teacher_id'";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
        <div class="row">
                <div class="col-12 col-xl-8">
                    <div class="card card-body bg-white border-light shadow-sm mb-4">
                        <h2 class="h5 mb-4">แก้ไขข้อมูลผู้ใช้งาน</h2>
                        <form action="info_edit_te.php" method="post">
                            

                        <div class="row">
                                

                            
                            
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="teacher_email">อีเมลล์</label>
                                        <input class="form-control" id="teacher_email" name="teacher_email" type="email" placeholder="594235XXX@parichat.skru.ac.th" value="<?php echo $teacher_email?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="teacher_photo">URL รูปประจำตัว</label>
                                        <input class="form-control" id="teacher_photo" name="teacher_photo" type="text" placeholder="กรอกลิงค์รูปภาพ" value="<?php echo $teacher_photo ?>" required>
                                    </div>
                                </div>
                                
                                <input type="text" name="teacher_id" id="teacher_id" value="<?php echo  $_SESSION["TeacherID"]; ?>" hidden>
                            </div>
                            
                            
                            
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">บันทึก</button>
                            </div>
                        </form>
                    </div>
                    <div class="card card-body bg-white border-light shadow-sm mb-4">
                    <h2 class="h5 mb-4">เปลี่ยนรหัสผ่าน</h2>
                        <form action="reset_password.php" method="post">
                            <div class="row">

                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="password">รหัสผ่านใหม่</label>
                                        <input class="form-control" id="password" type="password" name="password" placeholder="กรอกรหัสผ่าน"   required>
                                        
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="password02">ยืนยันรหัสผ่าน</label>
                                        
                                        <input class="form-control" id="password02" type="password" name="password02" placeholder="ยืนยันรหัสผ่าน"   required>
                                    </div>
                                </div>

                                
                                <input type="text" name="teacher_id" id="teacher_id" value="<?php echo  $_SESSION["TeacherID"]; ?>" hidden>
                            </div>
                            
                            
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">บันทึก</button>
                            </div>
                            </form>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="card border-light text-center p-0">
                                <div class="profile-cover rounded-top" data-background="../../assets/img/cover_t.jpg"></div>
                                <div class="card-body pb-5">
                                    <img src="<?php echo $teacher_photo ?>" class="user-avatar large-avatar rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait">
                                    <h4 class="h4"><?php echo $teacher_name ?></h4>
                                   <!--  <h5 class="font-weight-normal">#<?php echo $teacher_id ?></h5> -->
                                    <p class="text-gray mb-4"><?php echo $teacher_email ?></p>
                                    <!-- <a class="btn btn-sm btn-primary mr-2" href="#"><span class="fas fa-user-plus mr-1"></span> Connect</a>
                                    <a class="btn btn-sm btn-secondary" href="#">Send Message</a> -->
                                </div>
                             </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        
        


        <?php include '../footer.php';?>
        
    </main>

    <!-- Core -->
    <script src="../../vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../vendor/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Vendor JS -->
    <script src="../../vendor/onscreen/dist/on-screen.umd.min.js"></script>

    <!-- Slider -->
    <script src="../../vendor/nouislider/distribute/nouislider.min.js"></script>

    <!-- Jarallax -->
    <script src="../../vendor/jarallax/dist/jarallax.min.js"></script>

    <!-- Smooth scroll -->
    <script src="../../vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Count up -->
    <script src="../../vendor/countup.js/dist/countUp.umd.js"></script>

    <!-- Notyf -->
    <script src="../../vendor/notyf/notyf.min.js"></script>

    <!-- Charts -->
    <script src="../../vendor/chartist/dist/chartist.min.js"></script>
    <script src="../../vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

    <!-- Datepicker -->
    <script src="../../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

    <!-- Simplebar -->
    <script src="../../vendor/simplebar/dist/simplebar.min.js"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Volt JS -->
    <script src="../../assets/js/volt.js"></script>


</body>

</html>
<?php }?>