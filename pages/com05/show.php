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
<?php include '../dateth.php';?>
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
    <style type="text/css">
        table {

            counter-reset: row-num;
        }

        table tbody tr {
            counter-increment: row-num;
        }

        table tr td:first-child::before {
            content: counter(row-num);
        }
    </style>
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
                            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                                <li class="breadcrumb-item"><a href="../teacher"><span class="fas fa-home"></span></a></li>
                                <li class="breadcrumb-item"><a href="../com05">ข้อมูลการเข้าพบ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">รายละเอียดการเข้าพบ</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Navbar links -->
                    <?php include '../navbar_te.php';?>
                </div>
            </div>
        </nav>

        <div class="py-0">

            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">รายละเอียดการเข้าพบอาจารย์ที่ปรึกษาโครงงาน</h1>
                    
                </div>

            </div>
        </div>

        <div class="card border-light shadow-sm mb-4">
            <div class="card-body">
            <?php

$appoint_idd = $_REQUEST["ID"];



$sql = "SELECT
com05.com05_id,
com05.appoint_id,
appoint.project_id,
project.project_name,
appoint.appoint_date_start,
appoint.appoint_date_end,
appoint.appoint_comment,
appoint.teacher_id,
teacher.teacher_name,
appoint_status.appoint_status_name,
appoint.recorder,
student.student_name,
com05.comment_teacher,
com05.comment_assign,
com05.score,
com05.meet_check,
meet_check.meet_check_name,
                    teacher.teacher_title,
                    teacher.teacher_lastname
FROM
com05
INNER JOIN appoint ON com05.appoint_id = appoint.appoint_id
INNER JOIN project ON com05.project_id = project.project_id 
INNER JOIN teacher ON com05.teacher_id = teacher.teacher_id 
INNER JOIN appoint_status ON appoint.appoint_status = appoint_status.appoint_status_id
INNER JOIN student ON  appoint.recorder = student.student_id,
meet_check
WHERE
com05.com05_id = '$appoint_idd'";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
<?php 

$strDate = $appoint_date_start;
$strDatetoHourMinute = $appoint_date_start;
$strDatetoHourMinute1 = $appoint_date_end;
?>
            <p><b>หมายเลข COM-05</b> : <?php echo $com05_id; ?></p>
           <p>โครงงาน : <?php echo $project_name; ?></p>
            <p>วันเวลาที่เข้าพบ : <?php  echo DateThai($strDate)?>  เวลา <?php  echo HourMinute($strDatetoHourMinute)?> - <?php  echo HourMinute1($strDatetoHourMinute1)?> น.</p>
            <p>อาจารย์ที่ปรึกษาโครงงาน : <?php echo $teacher_title.$teacher_name.'  '.$teacher_lastname; ?></p>
            <hr>
            <p><b>ตอนที่ 1 ส่วนของนักศึกษา</b></p>
            <p>สิ่งที่นำเสนอ</p>
            <ul><?php echo $appoint_comment; ?></ul>
            <hr>
            <p><b>ตอนที่ 2 ส่วนของอาจารย์ที่ปรึกษา</b></p>
            <p>ความเห็นของอาจารย์ที่ปรึกษา</p>
            <ul><?php echo $comment_teacher; ?></ul>
            <p>งานที่อาจารย์ที่ปรึกษามอบหมายครั้งต่อไป</p>
            <ul><?php echo $comment_assign; ?></ul>
            <p>คะแนนความก้าวหน้า : <?php echo $score; ?> คะแนน </p>
            <p>การตรงต่อเวลา : <?php echo $meet_check_name; ?> </p>
                

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