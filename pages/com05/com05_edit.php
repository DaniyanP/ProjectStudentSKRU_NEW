
<?php session_start();?>
<?php 

if (!$_SESSION["TeacherID"]){  

	  Header("Location: ../../login_te.php"); 

}else{?>
<?php 
include '../../conn.php';
/* $appoint_id = $_REQUEST["IDAP"]; */
$com_id = $_REQUEST["ID"];

?>

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
                            <li class="breadcrumb-item"><a href="../teacher"><span class="fas fa-home"></span></a></li>
                                <li class="breadcrumb-item"><a href="../com05">ข้อมูลการเข้าพบ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">แก้ไขข้อมูลการเข้าพบ</li>
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
                    <h1 class="h4">แก้ไขการเข้าพบอาจารย์ที่ปรึกษาโครงงาน</h1>
                    <!-- <p class="mb-0">อธิบายหัวข้อ
                    </p> -->
                </div>
                
            </div>
        </div>
        <?php

$com05 = $_REQUEST["ID"];



$sql = "SELECT
com05.com05_id,
com05.appoint_id,
com05.project_id,
com05.comment_teacher,
com05.comment_assign,
com05.score,
com05.meet_check,
com05.teacher_id
FROM
com05

WHERE
com05.com05_id = '$com05'";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
        <div class="row">
                <div class="col-12 col-xl-6">
                    <div class="card card-body bg-white border-light shadow-sm mb-4">
                    <form action="" method="post">
                <!-- Form -->
                <div class="mb-2">
                    <label for="comment_teacher">ความคิดเห็นอาจารย์ที่ปรึกษาโครงงาน</label>
                    <textarea  class="form-control" id="comment_teacher" name="comment_teacher"
                        aria-describedby="present-describ" maxlength="255"><?php echo $comment_teacher; ?></textarea>
                    <small id="present-describ"
                        class="form-text text-muted">กรอกรายละเอียดความคิดเห็นอาจารย์ที่ปรึกษาโครงงาน</small>
                </div>

                <div class="mb-2">
                    <label for="comment_assign">งานที่มอบหมายครั้งถัดไป</label>
                    <textarea  class="form-control" id="comment_assign" name="comment_assign"
                        aria-describedby="present-describ" maxlength="255"><?php echo $comment_assign; ?></textarea>
                    <small id="present-describ"
                        class="form-text text-muted">กรอกรายละเอียดงานที่มอบหมายครั้งถัดไป</small>
                </div>

                <?php 
$query = "SELECT
score.score_id as s_id,
score.score_score as s_s,
score.score_detail as s_detail
FROM
score
ORDER BY
score.score_score ASC";
$result = mysqli_query($con, $query);

?>
                <div class="mb-2">
                    <label class="my-1 mr-2" for="score">คะแนน</label>
                    <select class="form-select" id="score" name="score" aria-label="Default select example">
                        <option selected>เลือกคะแนน</option>

                       <?php foreach($result as $results){
                                            if( $results["s_id"] == $score ){
                                               echo' <option value="'.$results["s_s"].'" selected="true"> '.$results["s_s"].' คะแนน  '.$results["s_detail"].'</option>';
                                            }else{
                                                echo' <option value="'.$results["s_s"].'" > '.$results["s_s"].' คะแนน  '.$results["s_detail"].'</option>';
                                            }
                                        }
                                        ?>

                       
                        
                    </select>
                </div>


                <?php 
$query2 = "SELECT
meet_check.meet_check_id as m_id,
meet_check.meet_check_name as m_name
FROM
meet_check
ORDER BY
meet_check.meet_check_id ASC";
$result2 = mysqli_query($con, $query2);

?>
                <div class="mb-2">
                    <label class="my-1 mr-2" for="meet_check">การตรงต่อเวลา</label>
                    <select class="form-select" id="meet_check" name="meet_check" aria-label="Default select example">
                        <option selected>---เลือก---</option>
                       
                        <?php foreach($result2 as $results2){
                                            if( $results2["m_id"] == $meet_check ){
                                               echo' <option value="'.$results2["m_id"].'" selected="true">'.$results2["m_name"].'</option>';
                                            }else{
                                                echo' <option value="'.$results2["m_id"].'" >'.$results2["m_name"].'</option>';
                                            }
                                        }
                                        ?>

                    </select>
                </div>



                <input type="text" name="appoint_id" id="appoint_id" value="<?php echo $appoint_id ?>" hidden>
                <input type="text" name="com05_id" id="com05_id" value="<?php echo $com05_id ?>" hidden>
                <input type="text" name="teacher_id" id="teacher_id" value="<?php echo $_SESSION["TeacherID"] ?>" hidden>
               
               
                <?php

$sql = "SELECT
appoint.appoint_id as a_id,
appoint.project_id as p_id
FROM
appoint
WHERE
appoint.appoint_id = '$appoint_id'";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
                <input type="text" name="project_id" id="project_id" value="<?php echo $p_id ?>" hidden>

               

                <button class="btn btn-block btn-success" type="submit"  name="SubmitEditCom05">บันทึก</button>
            </form>
                    

                    
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                            <div class="card card-body bg-white border-light shadow-sm mb-4">
                                <h2 class="h5 mb-4">ข้อมูลการนัดหมาย</h2>
                                
<!-- ข้อมูลเริ่ม -->
<?php


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
	                student.student_lastname
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
                            $namestudent = $row["student_title"].$row["student_name"]."&nbsp;&nbsp;".$row["student_lastname"];
                            $strDate = $row["appoint_date_start"];
                            $strDatetoHourMinute = $row["appoint_date_start"];
                            $strDatetoHourMinute1 = $row["appoint_date_end"];
                            $strDateTime = $row["appoint_recorder"];
                            echo '<p> หมายเลขการนัดหมาย : ' . $row["appoint_id"].'    
           <p> โครงงาน : ' . $row["project_name"].'
           <p>ต้องการเข้าพบ : '.DateThai($strDate).'   เวลา '. HourMinute($strDatetoHourMinute).'  - '. HourMinute1($strDatetoHourMinute1).' น.
           
           <p> รายละเอียด : ' . $row["appoint_comment"].'
           <p> นัดหมายโดย : ' . $namestudent.'
           <p> ทำรายการเมื่อ :'.DateTimeThai($strDateTime).' ';
        
        

        
     
}
}
$con->close();
?> 
<!-- ข้อมูลสิ้นสุด -->


                                
                            </div>
                </div>
            </div>


        <?php
            if (isset($_POST["SubmitEditCom05"])) {
    include '../../conn.php';

   
    
$com05_id  = $_POST['com05_id'];
$appoint_id  = $_POST['appoint_id'];
$project_id  = $_POST['project_id'];
$comment_teacher  = $_POST['comment_teacher'];
$comment_assign  = $_POST['comment_assign'];

$score  = $_POST['score'];
$meet_check  = $_POST['meet_check'];
$teacher_id  = $_POST['teacher_id'];



$sqleditcom05 ="UPDATE com05 SET

comment_teacher ='$comment_teacher',
comment_assign ='$comment_assign',
score ='$score',
meet_check ='$meet_check'
    
    
    
    
          WHERE com05.com05_id='$com05_id'";

    if (mysqli_query($con, $sqleditcom05)) {
        echo
            "<script> 
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'แก้ไขข้อมูลการเข้าพบ COM-05 เรียบร้อยแล้ว!',
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
                title: 'แก้ไขการเข้าพบไม่สำเร็จ', 
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
<?php }?>