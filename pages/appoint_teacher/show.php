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

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="ระบบนัดพบอาจารย์ที่ปรึกษาโครงงาน">
    <meta name="author" content="Themesberg">
    <meta name="description"
        content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
    <meta name="keywords"
        content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, free bootstrap 5 dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
    <link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard">

    <?php include '../../meta.php';?>

    <!-- Fontawesome -->
    <link type="text/css" href="../../vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="../../vendor/notyf/notyf.min.css" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="../../css/volt.css" rel="stylesheet">

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
    <?php include '../dateth.php';?>
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
                                <li class="breadcrumb-item"><a href="../appoint_teacher">ประวัติการนัดพบ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">รายละเอียดข้อมูลการนัดพบ</li>
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
                    <h1 class="h4">รายละเอียดการนัดพบ</h1>
                    <p class="mb-0">แสดงรายละเอียดข้อมูลที่นักศึกษาได้ทำการนัดพบอาจารย์
                    </p>
                </div>
                
            </div>
        </div>

        <div class="card border-light shadow-sm mb-4">
            <div class="card-body">
            <?php
            $appoint_id = $_REQUEST["ID"];
					$sql = "SELECT
                    appoint.appoint_id,
                    appoint.project_id,
                    project.project_name,
                    appoint.appoint_date_start,
                    appoint.appoint_date_end,
                    appoint.appoint_comment,
                    appoint.teacher_id,
                    teacher.teacher_name,
                    appoint.appoint_status,
                    appoint_status.appoint_status_name,
                    appoint.recorder,
                    student.student_name,
                    appoint.appoint_recorder
                    FROM
                    appoint
                    INNER JOIN project ON appoint.project_id = project.project_id
                    INNER JOIN teacher ON appoint.teacher_id = teacher.teacher_id
                    INNER JOIN appoint_status ON appoint.appoint_status = appoint_status.appoint_status_id
                    INNER JOIN student ON student.student_project = project.project_id AND appoint.recorder = student.student_id
                    WHERE
                    appoint.appoint_id ='$appoint_id'";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            $strDate = $row["appoint_date_start"];
                            $strDatetoHourMinute = $row["appoint_date_start"];
                            $strDatetoHourMinute1 = $row["appoint_date_end"];
                            $strDateTime = $row["appoint_recorder"];
                            echo '<p> หมายเลขการนัดหมาย : ' . $row["appoint_id"].'    สถานะ: ' . $row["appoint_status_name"].'
           <p>ต้องการเข้าพบ : '.DateThai($strDate).'   เวลา '. HourMinute($strDatetoHourMinute).'  - '. HourMinute1($strDatetoHourMinute1).' น.
           <p> ชื่อโครงงาน : ' . $row["project_name"].'
           <p> อาจารย์ที่ปรึกษา : ' . $row["teacher_name"].'
           <p> รายละเอียด : ' . $row["appoint_comment"].'
           <p> นัดหมายโดย : ' . $row["student_name"].'
           <p> ทำรายการเมื่อ :'.DateTimeThai($strDateTime).' ';
        
        

        
     
}
}
$con->close();
?> 
               
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