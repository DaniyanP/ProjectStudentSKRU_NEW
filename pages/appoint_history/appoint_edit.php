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

if (!$_SESSION["UserID"]){  //check session

	  Header("Location: ../../login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{?>
<?php include '../../conn.php';
$appoint_idd = $_REQUEST["ID"];
$get_project_id =$_SESSION["ProjectID"];


$sql = "SELECT
appoint.appoint_id,
appoint.project_id,
appoint.appoint_date_start,
appoint.appoint_comment,
appoint.appoint_date_end,
appoint.teacher_id,
teacher.teacher_name,

appoint.appoint_status
FROM
appoint
INNER JOIN teacher ON appoint.teacher_id = teacher.teacher_id
WHERE
appoint.appoint_id = '$appoint_idd' and appoint.project_id = '$get_project_id' and appoint.appoint_status = 1";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
if ($result->num_rows > 0) {
$row = mysqli_fetch_array($result);
$timesub=substr($row["appoint_date_end"],11,8);
extract($row);?>
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
                                <li class="breadcrumb-item"><a href="../student_index"><span class="fas fa-home"></span></a></li>
                                <li class="breadcrumb-item"><a href="../appoint_history">ประวัติการนัดพบ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">แก้ไขข้อมูลการนัดพบ</li>
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
                    <h1 class="h4">แก้ไขข้อมูลนัดพบอาจารย์ที่ปรึกษาโครงงาน</h1>
                    <p class="mb-0">นักศึกษาสามารถแก้ไขข้อมูลการนัดพบได้ก่อนอาจารย์จะทำการยืนยันการเข้าพบ
                    </p>
                </div>

            </div>
        </div>

        <div class="card border-light shadow-sm mb-4">
            <div class="card-body">

                <form action="" method="post">

                    <div class="mb-2">
                        
                    </div>
                    <!-- Form -->

                   <input type="text" name="id" id="id" value="<?php echo $appoint_id; ?>" hidden>
                    <div class="mb-2">
                        <label for="present">สิ่งที่นำเสนอ</label>
                        <textarea maxlength="255" class="form-control" id="present" name="present"
                            aria-describedby="present-describ"><?php echo $appoint_comment; ?></textarea>
                        <small id="present-describ"
                            class="form-text text-muted">กรอกรายละเอียดที่ขอเข้าพบอาจารย์ที่ปรึกษา</small>
                    </div>
                    <div class="mb-2">
                        <label class="my-1 mr-2" for="teacher">อาจารย์ที่ปรึกษา</label>


                        <?php 
                                    
                                    $id_ptojrct =$_SESSION["ProjectID"];
                                    $query13 = "SELECT
                                    project_has_adviser.pha_project_id, 
                                    project_has_adviser.pha_teacher_id as techerID, 
                                    teacher.teacher_name as techerNAME, 
                                    project_has_adviser.pha_type,
                    teacher.teacher_title as teacher_title,
                    teacher.teacher_lastname as teacher_lastname
                                FROM
                                    project_has_adviser
                                    INNER JOIN
                                    teacher
                                    ON 
                                        project_has_adviser.pha_teacher_id = teacher.teacher_id
                                WHERE
                                    project_has_adviser.pha_project_id = '$id_ptojrct'  
                                ORDER BY
                                    project_has_adviser.pha_type ASC";
                                $result13 = mysqli_query($con, $query13);
                                    ?>
                                    
                        <select class="form-select" id="teacher" name="teacher" aria-label="Default select example">
                        <option selected>เลือกอาจารย์ที่ปรึกษาโครงงาน</option>
                                                 
                                                 <?php foreach($result13 as $results3){
                                            if( $results3["techerID"] == $teacher_id ){
                                               echo' <option value="'.$results3["techerID"].'" selected="true">'.$results3["teacher_title"].$results3["techerNAME"]."&nbsp;&nbsp;".$results3["teacher_lastname"].' </option>';
                                            }else{
                                                echo' <option value="'.$results3["techerID"].'" >'.$results3["teacher_title"].$results3["techerNAME"]."&nbsp;&nbsp;".$results3["teacher_lastname"].' </option>';
                                            }
                                        }
                                        ?>
                    </select>
                           


 
                    </div>
                    <?php $newDate = date('Y-m-d\TH:i', strtotime($appoint_date_start)); ?>
                    <div class="mb-2">
                        <label for="date_start">วันที่และเวลาที่เข้าพบ (เริ่มต้น)</label>
                        <input type="datetime-local" class="form-control" id="date_start" name="date_start"
                            aria-describedby="date_start-describ" value="<?php echo $newDate; ?>" min="<?php echo date('Y-m-d\TH:i',strtotime('+ 3 day',strtotime(date('Y-m-d\TH:i')))) ?>"  max="<?php echo date('Y-m-d\TH:i',strtotime('+ 11 day',strtotime(date('Y-m-d\TH:i')))) ?>">
                        <small id="date_start-describ" class="form-text text-muted">เลือกวันที่และเวลาที่ต้องการเข้าพบ
                            (เริ่มต้น)</small>
                    </div>
                    <div class="mb-2">
                        <label for="date_end">เวลาสิ้นสุด</label>
                        <input type="time"  class="form-control" id="date_end" name="date_end"
                            placeholder="จำนวนนาที" aria-describedby="date_end-describ" value="<?php echo $timesub; ?>">
                        <small id="date_end-describ" class="form-text text-muted">กรอกเวลาสิ้นสุดที่เข้าพบ</small>
                    </div>


                    <input type="text" class="form-control" id="id_project" name="id_project"
                        aria-describedby="date_end-describ" value="<?php echo  $_SESSION["ProjectID"]; ?>" hidden>
                    <input type="text" class="form-control" id="record" name="record"
                        aria-describedby="date_end-describ" value="<?php echo  $_SESSION["UserID"]; ?>" hidden>

                    

                    <button type="submit" class="btn btn-primary" name="SubmitEdit">บันทึก</button>

                    <a type="button" class="btn btn-info" href="index.php">กลับ</a>
                </form>


            </div>
        </div>
        <?php
         if (isset($_POST["SubmitEdit"])) {
             
                        include '../../conn.php';

                        // คำสั่ง sql ในการลบข้อมูล ตาราง tbl_products โดยจะลบข้อมูลสินค้า p_id ที่ส่งมา
                        $idd = $_POST['id'];
$present  = $_POST['present'];
$teacher  = $_POST['teacher'];
$date_start  = $_POST['date_start'];
$date_end  = $_POST['date_end'];

$id_project = $_POST['id_project'];
$record = $_POST['record'];

$datesub=substr($date_start,0,10);
$id_pj = $_SESSION["ProjectID"];


$c_end ="$datesub $date_end";

$time_st = substr($date_start,11,8);
$time_en = substr($c_end,11,8);

if ($time_st < '08:00' || $time_st > '17:00' || $time_en > '17:00'|| $time_en < '08:00' || $time_st > $time_en ) {
 
 if ($time_st < '08:00' || $time_st > '17:00' || $time_en > '17:00'|| $time_en < '08:00') {
     echo
     "<script> 
     Swal.fire({
         icon: 'error',
         title: 'นอกเวลาทำการ', 
         text: 'เลือกเวลาเข้าพบระหว่าง 08:00 - 17.00 น.',
     }).then(() => {window.history.back()}); 
 </script>";
 }
 
 if ($time_st > $time_en) {
     echo
     "<script> 
     Swal.fire({
         icon: 'error',
         title: 'เวลาเข้าพบไม่สอดคล้อง', 
         text: 'เวลาสิ้นสุดต้องมากกว่าเวลาเริ่มต้น',
     }).then(() => {window.history.back()}); 
 </script>";
 }
 
 
} else {




    $sqlc = "SELECT
    appoint.appoint_date_start, 
    appoint.appoint_date_end, 
    appoint.teacher_id, 
    appoint.appoint_status, 
    appoint.appoint_id,
    appoint.project_id, 
    DATE(appoint.appoint_date_start) AS datest,
    TIME(appoint.appoint_date_start) AS datest1
    FROM
    appoint
    WHERE
    appoint.teacher_id = '$teacher' AND
    DATE(appoint.appoint_date_start) = '$datesub' AND
     
    (
       ( appoint.appoint_status = 1 and appoint.project_id != '$id_pj'  )OR
            appoint.appoint_status = 2 OR
            appoint.appoint_status = 4 OR
            appoint.appoint_status = 5 OR
            appoint.appoint_status = 6 
       
    )AND  (
    (appoint_date_start BETWEEN '$date_start' AND '$c_end') 
    OR (appoint_date_end BETWEEN '$date_start' AND '$c_end')OR 
('$date_start' BETWEEN appoint_date_start  AND appoint_date_end)
OR 
('$c_end' BETWEEN  appoint_date_start  AND appoint_date_end ))
";
$resultc = $con->query($sqlc);
                        if ($resultc->num_rows > 0) {

echo
        "<script> 
        Swal.fire({
            icon: 'error',
            title: 'เข้าพบไม่ได้', 
            text: 'เนื่องจากอาจารย์มีการนัดพบอื่นแล้ว เลือกเวลาใหม่',
        }).then(() => {window.history.back()}); 
    </script>";
}else {
$sql288 = "UPDATE appoint SET

appoint_date_start ='$date_start',
appoint_date_end='$datesub $date_end',

appoint_comment='$present',
teacher_id='$teacher'



      WHERE appoint_id='$idd' 
      ";
                    
                        if (mysqli_query($con, $sql288)) {
                            echo
                                "<script> 
                                    Swal.fire({
                                        position: 'center',
                                        icon: 'success',
                                        title: 'แก้ไขข้อมูลการนัดพบสำเร็จ!',
                                        showConfirmButton: false,
                                        timer: 1500
                                    }).then(()=> location = 'index.php')
                                </script>";
                            //header('Location: index.php');
                        } else {
                            echo
                                "<script> 
                                Swal.fire({
                                    icon: 'error',
                                    title: 'แก้ไขการนัดพบไม่สำเร็จ', 
                                }).then(() => {window.history.back()});
                            </script>";
                        }
                    }
                    }
                    
                    
                    }
                    ?>


<?php }else{
    echo "<script type='text/javascript'>";
    echo "alert('นักศึกษาไม่มีสิทธิ์ในการแก้ไขข้อมูล');";
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