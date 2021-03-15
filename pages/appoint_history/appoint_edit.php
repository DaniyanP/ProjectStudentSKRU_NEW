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
appoint.teacher_id,
teacher.teacher_name,
appoint.apooint_minute
FROM
appoint
INNER JOIN teacher ON appoint.teacher_id = teacher.teacher_id
WHERE
appoint.appoint_id = '$appoint_idd' and appoint.project_id = '$get_project_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
if ($result->num_rows > 0) {
$row = mysqli_fetch_array($result);
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

                <form action="edit_ac.php" method="post">

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
                                    project_has_adviser.pha_type
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
                                                 
                                                 <<?php foreach($result13 as $results3){
                                            if( $results3["techerID"] == $teacher_id ){
                                               echo' <option value="'.$results3["techerID"].'" selected="true">'.$results3["techerNAME"].'</option>';
                                            }else{
                                                echo' <option value="'.$results3["techerID"].'" >'.$results3["techerNAME"].'</option>';
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
                        <label for="date_end">ใช้เวลาในการเข้าพบกี่นาที</label>
                        <input type="number" min="1" max="59" class="form-control" id="date_end" name="date_end"
                            placeholder="จำนวนนาที" aria-describedby="date_end-describ" value="<?php echo $apooint_minute; ?>">
                        <small id="date_end-describ" class="form-text text-muted">กรอกจำนวนระยะเวลานาทีที่เข้าพบ</small>
                    </div>


                    <input type="text" class="form-control" id="id_project" name="id_project"
                        aria-describedby="date_end-describ" value="<?php echo  $_SESSION["ProjectID"]; ?>" hidden>
                    <input type="text" class="form-control" id="record" name="record"
                        aria-describedby="date_end-describ" value="<?php echo  $_SESSION["UserID"]; ?>" hidden>

                    <button class="btn btn-block btn-success" type="submit">บันทึก</button>






                </form>


            </div>
        </div>

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