<?php session_start();?>

<?php 

if ($_SESSION["Teacherlevel"]=="2"){?>

<?php include '../../conn.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <?php include '../title.php';?>

    <?php include '../../meta.php';?>

    <!-- Fontawesome -->
    <link type="text/css" href="../../vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="../../vendor/notyf/notyf.min.css" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="../../css/volt.css" rel="stylesheet">

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
    <?php include '../dateth.php';?>
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

    <?php include '../menu_te.php';?>


    <main class="content">

        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                                <li class="breadcrumb-item"><a href="../subject"><span class="fas fa-home"></span></a>
                                </li>
                                <li class="breadcrumb-item"><a href="../subject">ข้อมูลรายวิชา</a></li>
                                <li class="breadcrumb-item active" aria-current="page">แก้ไขรายวิชา</li>
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
                    <h1 class="h4">แก้ไขข้อมูลรายวิชาที่สอน</h1>

                </div>

            </div>
        </div>

        <div class="card border-light shadow-sm mb-4">
            <div class="card-body">
                <?php

$classroom_id = $_REQUEST["ID"];



$sql = "SELECT
subject_project.subject_key,
subject_project.subject_id2,
subject_project.subject_classroom,
subject_project.subject_name,
subject_project.subject_semester,
subject_project.subject_year,
subject_project.subject_sec,
subject_project.subject_day,
subject_project.subject_teacher,
subject_project.subject_record,
subject_project.subject_time_end,
subject_project.subject_time_start
FROM
subject_project
WHERE
subject_project.subject_key = '$classroom_id'";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
                <form action="" method="post">


                    <div class="row">

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="subject_id2">รหัสวิชา</label>
                                <input class="form-control" id="subject_id2" name="subject_id2" type="text"
                                    placeholder="กรอกรหัสวิชา" required value="<?php echo $subject_id2?>">
                            </div>
                        </div>

                        <div class="col-md-9 mb-3">
                            <div class="form-group">
                                <label for="subject_name">ชื่อวิชา</label>
                                <input class="form-control" id="subject_name" name="subject_name" type="text"
                                    placeholder="กรอกชื่อวิชา" required value="<?php echo $subject_name?>">
                            </div>
                        </div>


                    </div>

                    <div class="row">

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="subject_sec">กลุ่มเรียน</label>
                                <input class="form-control" id="subject_sec" name="subject_sec" type="text"
                                    placeholder="กรอกกลุ่มเรียน" required value="<?php echo $subject_sec?>">
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="subject_classroom">รหัส Classroom</label>
                                <input class="form-control" id="subject_classroom" name="subject_classroom" type="text"
                                    placeholder="กรอกรหัส Classroom" required value="<?php echo $subject_classroom?>">
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="subject_semester">ภาคการเรียน</label>



                                <input class="form-control" id="subject_semester" name="subject_semester" type="number"
                                    placeholder="กรอกภาคการเรียน" required value="<?php echo $subject_semester?>">
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="subject_year">ปีการศึกษา</label>
                                <input class="form-control" id="subject_year" name="subject_year" type="number"
                                    placeholder="กรอกปีการศึกษา" required value="<?php echo $subject_year?>">
                            </div>
                        </div>



                    </div>

                    <div class="row">


                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="subject_day">วันทำการสอน</label>


                                <?php 
                                    $query = "SELECT
                                    subject_day.day_id as t1_day_id,
                                    subject_day.day_name as t1_day_name
                                    FROM
                                    subject_day
                                    
                                    ORDER BY
                                    subject_day.day_id ASC";
                                    $result = mysqli_query($con, $query);

                                    ?>

                                <select class="form-select" id="subject_day" name="subject_day"
                                    aria-label="Default select example">
                                    <option selected>เลือกวันทำการสอน</option>

                                    <?php foreach($result as $results){
                                            if( $results["t1_day_id"] == $subject_day ){
                                               echo' <option value="'.$results["t1_day_id"].'" selected="true">'.$results["t1_day_name"].'</option>';
                                            }else{
                                                echo' <option value="'.$results["t1_day_id"].'" >'.$results["t1_day_name"].'</option>';
                                            }
                                        }
                                        ?>
 </select>
                            </div>
                        </div>


                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="subject_time_start">เวลาสอน(เริ่มต้น)</label>
                                <input class="form-control" id="subject_time_start" name="subject_time_start" type="time"
                                    value="<?php echo $subject_time_start?>" required>
                            </div>
                        </div>


                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="subject_time_end">เวลาสอน(สิ้นสุด)</label>
                                <input class="form-control" id="subject_time_end" name="subject_time_end" type="time"
                                    value="<?php echo $subject_time_end?>" required>
                            </div>
                        </div>

                        <input type="text" name="subject_teacher" id="subject_teacher"
                            value="<?php echo  $_SESSION["TeacherID"]; ?>" hidden>

                        <input type="text" name="subject_id" id="subject_id" value="<?php echo  $subject_key ?>" hidden>








                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary" name="SubmitEditClassroom">บันทึก</button>
                   
                    
                    <a type="buttoon" class="btn btn-info" href="index.php">กลับ</a>

                    </div>


            </div>
        </div>


        </div>








        </form>

        </div>
        </div>

        <?php
            if (isset($_POST["SubmitEditClassroom"])) {
    include '../../conn.php';

   
$subject_id  = $_POST['subject_id'];
$subject_id2  = $_POST['subject_id2'];
$subject_classroom  = $_POST['subject_classroom'];
$subject_name  = $_POST['subject_name'];
$subject_semester  = $_POST['subject_semester'];
$subject_year  = $_POST['subject_year'];
$subject_sec  = $_POST['subject_sec'];
$subject_day  = $_POST['subject_day'];
$subject_time_start  = $_POST['subject_time_start'];
$subject_time_end  = $_POST['subject_time_end'];


  
  $sqleditclassroom = "UPDATE subject_project SET


subject_id2='$subject_id2',
subject_classroom='$subject_classroom',
subject_name='$subject_name',
subject_semester='$subject_semester',
subject_year='$subject_year',
subject_sec='$subject_sec',
subject_day='$subject_day',
subject_time_start='$subject_time_start',
subject_time_end='$subject_time_end'



      WHERE subject_key='$subject_id' 
      ";

    if (mysqli_query($con, $sqleditclassroom)) {
        echo
            "<script> 
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'แก้ไขข้อมูลกลุ่มเรียนเรียบร้อยแล้ว!',
                    showConfirmButton: false,
                    timer: 2000
                }).then(()=> location = 'index.php')
            </script>";
        //header('Location: index.php');
    } else {
        echo
            "<script> 
            Swal.fire({
                icon: 'error',
                title: 'แก้ไขข้อมูลกลุ่มเรียนไม่สำเร็จ', 
            }).then(() => {window.history.back()});
        </script>";
    }
  
   
}






mysqli_close($con);
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
<?php }else{

Header("Location: ../404/404.php");

    }
    
    
    
    ?>