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


    <style>
                        
                        body{
                            margin-top:20px;
                            background:#eee;
                        }	
                        
                        .profile .panel-profile {
                            border: none;
                            margin-bottom: 0;
                            box-shadow: none;
                        }
                        
                        .profile .panel-heading {
                            color: #585f69;
                            background: #fff;
                            padding: 7px 15px;
                            border-bottom: solid 3px #f7f7f7;
                        }
                        
                        .overflow-h {
                            overflow: hidden;
                        }
                        
                        .panel-heading {
                            color: #fff;
                            padding: 5px 15px;
                        }
                        
                        .profile .panel-title {
                            font-size: 16px;
                        }
                        
                        .profile .profile-blog {
                            padding: 20px;
                            background: #fff;
                        }
                        
                        .profile .blog-border {
                            border: 1px solid #f0f0f0;
                        }
                        
                        .profile .profile-blog img {
                            float: left;
                            width: 50px;
                            height: 50px;
                            margin-right: 20px;
                        }
                        
                        .rounded-x {
                            border-radius: 50% !important;
                        }
                        
                        .profile .name-location {
                            overflow: hidden;
                        }
                        
                        .profile .name-location strong {
                            color: #555;
                            display: block;
                            font-size: 16px;
                        }
                        
                        .profile .name-location span a {
                            color: #555;
                        }
                        
                        .margin-bottom-20 {
                            margin-bottom: 20px;
                        }
                        
                        .share-list {
                            margin-bottom: 0;
                        }
                        
                        
                        .list-inline {
                            padding-left: 0;
                            margin-left: -5px;
                            list-style: none;
                        }
                        
                        .list-inline li {
                            display: inline-block;
                            padding-right: 5px;
                            padding-left: 5px;
                            font-size:11px;
                        }
                        
                        .share-list li i {
                            color: #72c02c;
                            margin-right: 5px;
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

    <!--     <div class="py-0">

            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">รายละเอียดการนัดพบ</h1>
                    <p class="mb-0">แสดงรายละเอียดข้อมูลที่นักศึกษาได้ทำการนัดพบอาจารย์
                    </p>
                </div>
                
            </div>
        </div> -->

        
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
                    appoint.appoint_recorder,
                    student.student_title, 
	                student.student_lastname,
                    teacher.teacher_title,
                    teacher.teacher_lastname,
                    student.student_photo,
                    appoint.meet_link
                    FROM
                    appoint
                    INNER JOIN project ON appoint.project_id = project.project_id
                    INNER JOIN teacher ON appoint.teacher_id = teacher.teacher_id
                    INNER JOIN appoint_status ON appoint.appoint_status = appoint_status.appoint_status_id
                    INNER JOIN student ON appoint.recorder = student.student_id
                    WHERE
                    appoint.appoint_id ='$appoint_id'";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            $strDate = $row["appoint_date_start"];
                            $strDatetoHourMinute = $row["appoint_date_start"];
                            $strDatetoHourMinute1 = $row["appoint_date_end"];
                            $strDateTime = $row["appoint_recorder"];
                            $teachern = $row["teacher_title"].$row["teacher_name"]."&nbsp;&nbsp;".$row["teacher_lastname"];
                            $namestudent = $row["student_title"].$row["student_name"]."&nbsp;&nbsp;".$row["student_lastname"];
                            echo '<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
                            <div class="container profile">
                                <div class="col-md-12">
                                    <div class="panel panel-profile">
                                    <div class="panel-heading overflow-h">
                                        <h2 class="panel-title heading-sm pull-left"><i class="fa fa-tasks mr-2"></i>รายละเอียดการนัดพบ</h2>
                                        <a href="#" class="btn-u btn-brd btn-brd-hover btn-u-dark btn-u-xs pull-right"> </a>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                            
                            
                                        <div class="col-sm-6">
                                                <div class="profile-blog blog-border">
                                                <p><b>ต้องการเข้าพบ :</b> '.DateThai($strDate).'   เวลา '. HourMinute($strDatetoHourMinute).'  - '. HourMinute1($strDatetoHourMinute1).' น.
                                       <p><b> อาจารย์ที่ปรึกษา :</b> ' . $teachern.'
                                        
                                       <p><b> นัดหมายโดย :</b> ' . $namestudent.'
                                       <p><b> ทำรายการเมื่อ :</b>'.DateTimeThai($strDateTime).'
                                                     
                            
                                        <div class="row">
                            <div class="col-sm-6">
                                <center>
                            <h2 style="color: #0a817a">   ' . $row["appoint_status_name"].'</h2>
                            <p>สถานะ</center>
                            </div> 
                            <div class="col-sm-6">
                            <center><h2>';
                            
                            
                            if ($row["meet_link"]) {
                             
                              echo'   <a href="'.$row["meet_link"].'" target="_blank"><img src="../../assets/img/meet_icon.png" alt="Image" style="width:40px;"></a> ';
                             } 
                            echo'</h2></center>
                            </div> 
                            </div> 
                            
                            
                                                </div> 
                                            </div>    
                            
                                            <div class="col-sm-6">
                                                <div class="profile-blog blog-border">
                                                    <img class="rounded-x" src="' . $row["student_photo"].'" alt="">
                                                    <div class="name-location">
                                                        <strong>' . $namestudent.'</strong>
                                                        <span><i class="fa fa-map-marker mr-2"></i><a href="#">นักศึกษานัดพบ</a> <a href="#"> </a></span>
                                                    </div>
                                                    <hr>
                                                    <div class="clearfix margin-bottom-20"></div>    
                                                    <p> <b>สิ่งที่นำเสนอ</b></p>
                                                    <p>' . $row["appoint_comment"].'</p>
                                                  
                                                </div>
                                            </div>        
                                
                                              
                                        </div>
                            
                                
                            
                                        
                                    </div>        
                                </div>    
                                </div>
                            </div>  ';
        
        

        
     
}
}
$con->close();
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