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

if (!$_SESSION["UserID"]){  

	  Header("Location: ../../login.php"); 

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
<!-- การลิ้ง sweetalert2 เเบบ cdn  -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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

    <?php include '../menu_stu.php';?>


    <main class="content">

        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                                <li class="breadcrumb-item"><a href="../student_index"><span
                                            class="fas fa-home"></span></a></li>
                                <li class="breadcrumb-item"><a href="index.php">ข้อมูลโครงงาน</a></li>
                                <li class="breadcrumb-item active" aria-current="page">เพิ่มไฟล์เอกสารที่เกี่ยวข้อง</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Navbar links -->
                    <?php include '../navbar.php';?>
                </div>
            </div>
        </nav>

        <div class="py-0">

            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">เพิ่มไฟล์เอกสารที่เกี่ยวข้อง</h1>
                    <p class="mb-0">เอกสารที่เกี่ยวข้องกับโครงงาน
                    </p>
                </div>

            </div>
        </div>

        <div class="card border-light shadow-sm mb-4">
            <div class="card-body">
                <form action="" method="post">


                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="filee">ประเภทไฟล์</label>
                                <select class="form-select" id="filee" name="filee">
                                    <option selected>เลือกประเภทไฟล์</option>

                                   <?php
					$sql = "SELECT
                    file_type.file_type_id,
                    file_type.file_type_name
                    FROM
                    file_type
                    ORDER BY
                    file_type.file_type_id ASC";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            echo '<option value="'. $row["file_type_id"].'">'. $row["file_type_name"].'</option>';
                            
                          
							 
						}
					}
					$con->close();
					?>
                                   
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="filee_url">URL ไฟล์เอกสาร</label>
                                <input class="form-control" id="filee_url" name="filee_url" type="url"
                                    placeholder="กรอกลิงค์เอกสาร" required>
                            </div>
                        </div>
                        <input type="text" name="project_id" id="project_id"
                            value="<?php echo  $_SESSION["ProjectID"]; ?>" hidden>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="passconfirm">รหัสยืนยันจากอาจารย์ประจำวิชา</label>
                                <input class="form-control" id="passconfirm" name="passconfirm" type="text"
                                    placeholder="กรอกรหัสยืนยันจากอาจารย์ประจำวิชา" required>
                            </div>
                        </div>
                         
                    </div>


                    <div class="mt-3">
                                <button type="submit" class="btn btn-primary" name="SubmitInsertFile">บันทึก</button>
                                <a type="button" class="btn btn-info" href="index.php">กลับ</a>
                            </div>
                </form>
            </div>
        </div>

        <?php


if (isset($_POST["SubmitInsertFile"])) {
    //นำเข้าไฟล์ การเชื่อมต่อฐานข้อมูล
    include '../../conn.php';

    $filee  = $_POST['filee'];
$filee_url  = $_POST['filee_url'];
$project_id  = $_POST['project_id'];

$passconfirm = $_POST['passconfirm'];
	
$checkpass = mysqli_query($con,'SELECT
subject_project.status_file, 
subject_project.subject_key, 
	subject_project.subject_teacher
FROM
subject_project
WHERE
subject_project.status_file = 2
AND
subject_project.subject_key = "'.$passconfirm.'" ');
$row = mysqli_fetch_array($checkpass);


                if(mysqli_num_rows($checkpass) == '1')
                {
                    $teacher_req = $row["subject_teacher"];
                    $sqladdfile ="INSERT INTO filee

                    ( `project_id`, `file_type`, `file_link`, `teacher_id`)
                  
                      VALUES 
                  
                      ('$project_id','$filee','$filee_url','$teacher_req')";
                  
                  
                  
                  
                  
                  
                      if (mysqli_query($con, $sqladdfile)) {
                          echo
                              "<script> 
                              Swal.fire({
                                  position: 'center',
                                  icon: 'success',
                                  title: 'เพิ่มไฟล์เรียบร้อยแล้ว',
                                  text: 'โปรดรออาจารย์ประจำวิชาทำการยืนยันไฟล์!',
                                  
                              }).then(()=> location = 'index.php')
                          </script>";
                      } else {
                          echo
                              "<script> 
                              Swal.fire({
                                  icon: 'error',
                                  title: 'บันทึกไฟล์ไม่สำเร็จ', 
                                  text: 'โปรดตรวจสอบความถูกต้องของข้อมูล!',
                              }).then(() => {window.history.back()});
                          </script>";
                      }
                  
                      mysqli_close($con);
                }
                if(mysqli_num_rows($checkpass) == '0')
                {
                    echo
                              "<script> 
                              Swal.fire({
                                  icon: 'error',
                                  title: 'เพิ่มไฟล์ไม่สำเร็จ', 
                                  text: 'รหัสยืนยันผิดพลาดหรืออาจารย์ปิดการรับไฟล์แล้ว',
                                  
                                }).then(() => {window.history.back()});
                          </script>";
                }


    }
    
    ?>

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