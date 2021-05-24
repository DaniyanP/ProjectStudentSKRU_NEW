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
<?php include '../../conn.php';
$appoint_idd = $_REQUEST["ID"];
$get_project_id =$_SESSION["ProjectID"];


$sql = "SELECT
com05.com05_id,
com05.project_id,
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
                    teacher.teacher_lastname, 
                    teacher.teacher_name as nametecher,
                    teacher.teacher_title as titletecher,
                    teacher.teacher_lastname as lastnametecher,
                    student.student_photo, 
	teacher.teacher_photo,
                    student.student_title as student_title, 
	                student.student_lastname as student_lastname, 
	                student.student_name as student_name
FROM
com05
INNER JOIN appoint ON com05.appoint_id = appoint.appoint_id
INNER JOIN project ON com05.project_id = project.project_id 
INNER JOIN teacher ON com05.teacher_id = teacher.teacher_id 
INNER JOIN appoint_status ON appoint.appoint_status = appoint_status.appoint_status_id
INNER JOIN student ON  appoint.recorder = student.student_id,
meet_check
WHERE
com05.com05_id = '$appoint_idd' and  com05.project_id = '$get_project_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
if ($result->num_rows > 0) {
$row = mysqli_fetch_array($result);
 
extract($row);
$teachern = $titletecher.$nametecher."&nbsp;&nbsp;".$lastnametecher;
$namestudent =  $student_title . $student_name ."&nbsp;&nbsp;".$student_lastname ; ?>

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

    <?php include '../menu_stu.php';?>


    <main class="content">

        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                                <li class="breadcrumb-item"><a href="../student_index"><span class="fas fa-home"></span></a></li>
                                <li class="breadcrumb-item"><a href="../score">ข้อมูลประวัติการเข้าพบ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">ข้อมูลCOM-05</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Navbar links -->
                    <?php include '../navbar.php';?>
                </div>
            </div>
        </nav>

         


        <?php 
$strDate = $appoint_date_start;
$strDatetoHourMinute = $appoint_date_start;
$strDatetoHourMinute1 = $appoint_date_end;
?>

<!-- ทดสอบ CSS -->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container profile">
    <div class="col-md-12">
        <div class="panel panel-profile">
        <div class="panel-heading overflow-h">
            <h2 class="panel-title heading-sm pull-left"><i class="fa fa-tasks mr-2"></i>ข้อมูลประวัติการเข้าพบอาจารย์ที่ปรึกษาโครงงาน</h2>
            <a href="#" class="btn-u btn-brd btn-brd-hover btn-u-dark btn-u-xs pull-right"> </a>
        </div>
        <div class="panel-body">
            <div class="row">


            <div class="col-sm-6">
                    <div class="profile-blog blog-border">
                    <p><b>โครงงาน :</b> <?php echo $project_name; ?></p>
            <p><b>วันเวลาที่เข้าพบ :</b> <?php  echo DateThai($strDate)?>  เวลา <?php  echo HourMinute($strDatetoHourMinute)?> - <?php  echo HourMinute1($strDatetoHourMinute1)?> น.</p>
                         

            <div class="row">
<div class="col-sm-6">
    <center>
<h2 style="color: #0a817a">   <?php echo $score; ?></h2>
<p>คะแนน</center>
</div> 
<div class="col-sm-6">
<center>
<h2 style="color:#0a817a"><?php echo $meet_check_name; ?></h2>
<p>การตรงต่อเวลา</center>
</div> 
</div> 


                    </div> 
                </div>    

                <div class="col-sm-6">
                    <div class="profile-blog blog-border">
                        <img class="rounded-x" src="<?php echo $student_photo; ?>" alt="">
                        <div class="name-location">
                            <strong><?php echo $namestudent; ?></strong>
                            <span><i class="fa fa-map-marker mr-2"></i><a href="#">นักศึกษานัดพบ</a> <a href="#"> </a></span>
                        </div>
                        <hr>
                        <div class="clearfix margin-bottom-20"></div>    
                        <p> <b>สิ่งที่นำเสนอ</b></p>
                        <p><?php echo $appoint_comment; ?></p>
                      
                    </div>
                </div>        
    
                  
            </div>

            <div class="row">


            <div class="col-sm-6">
                    <div class="profile-blog blog-border">
                        <img class="rounded-x" src="<?php echo $teacher_photo; ?>" alt="">
                        <div class="name-location">
                            <strong><?php echo $teachern; ?></strong>
                            <span><i class="fa fa-map-marker mr-2"></i><a href="#">อาจารย์ที่ปรึกษาโครงงาน</a> <a href="#"> </a></span>
                        </div>     <hr>
                        <div class="clearfix margin-bottom-20"></div> 
                        <p> <b>ความเห็นของอาจารย์ที่ปรึกษา</b></p>   
                        <p><?php echo $comment_teacher; ?></p>
                        
                    </div> 
                </div> 


                
                <div class="col-sm-6">
                    <div class="profile-blog blog-border">
                        <img class="rounded-x" src="<?php echo $teacher_photo; ?>" alt="">
                        <div class="name-location">
                            <strong><?php echo $teachern; ?></strong>
                            <span><i class="fa fa-map-marker mr-2"></i><a href="#">อาจารย์ที่ปรึกษาโครงงาน</a> <a href="#"> </a></span>
                        </div>     <hr>
                        <div class="clearfix margin-bottom-20"></div>   
                        <p> <b>งานที่อาจารย์ที่ปรึกษามอบหมายครั้งต่อไป</b></p> 
                        <p><?php echo $comment_assign; ?></p>
                         
                    </div>
                </div>        
    
               
            </div>

            
        </div>        
    </div>    
    </div>
</div>                

<!-- ทดสอบ CSS -->
















        <?php }else{
    echo "<script type='text/javascript'>";
    echo "alert('นักศึกษาไม่มีสิทธิ์การเข้าถึงการดูข้อมูลของผู้อื่น');";
    echo "window.location = history.back(1); ";
    echo "</script>";
} ?>

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