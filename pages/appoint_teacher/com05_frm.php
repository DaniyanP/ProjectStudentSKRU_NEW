
<?php session_start();?>
<?php 

if (!$_SESSION["TeacherID"]){  

	  Header("Location: ../../login_te.php"); 

}else{?>
<?php 
include '../../conn.php';
$appoint_id = $_REQUEST["ID"];
$tt_id =$_SESSION["TeacherID"];
?>

<?php

$sql = "SELECT
appoint.appoint_id as a_id,
appoint.project_id as p_id,
appoint.teacher_id,
appoint.appoint_status,
appoint.recorder
FROM
appoint
WHERE
appoint.appoint_id = '$appoint_id' and teacher_id = '$tt_id' and appoint_status = 2 ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
if ($result->num_rows > 0) {
$row = mysqli_fetch_array($result);
extract($row);
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
    <!-- การลิ้ง sweetalert2 เเบบ cdn  -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<script type="text/javascript">
function Check() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.display = 'block';
    } 
    else {
        document.getElementById('ifYes').style.display = 'none';

   }
}

function Checkno() {
    if (document.getElementById('noCheck').checked) {
        document.getElementById('ifYes').style.display = 'none';
    } 
    else {
        document.getElementById('ifYes').style.display = 'block';

   }
}

</script>
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
                                <li class="breadcrumb-item active" aria-current="page">บันทึกการเข้าพบ</li>
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
                    <h1 class="h4">บันทึกการเข้าพบอาจารย์ที่ปรึกษาโครงงาน</h1>
                    <!-- <p class="mb-0">อธิบายหัวข้อ
                    </p> -->
                </div>
                
            </div>
        </div>

        <div class="row">
                <div class="col-12 col-xl-6">
                    <div class="card card-body bg-white border-light shadow-sm mb-4">
                    <form action="" method="post">
                <!-- Form -->
                <div class="mb-2">
                    <label for="comment_teacher">ความคิดเห็นอาจารย์ที่ปรึกษาโครงงาน</label>
                    <textarea  class="form-control" id="comment_teacher" name="comment_teacher"
                        aria-describedby="present-describ" maxlength="255" required></textarea>
                    <small id="present-describ"
                        class="form-text text-muted">กรอกรายละเอียดความคิดเห็นอาจารย์ที่ปรึกษาโครงงาน</small>
                </div>

                <div class="mb-2">
                    <label for="comment_assign">งานที่มอบหมายครั้งถัดไป</label>
                    <textarea  class="form-control" id="comment_assign" name="comment_assign"
                        aria-describedby="present-describ" maxlength="255" required></textarea>
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
                   
                       
                        <?php foreach($result as $results){?>
    <option value="<?php echo $results["s_id"];?>">
      <?php echo ' '.$results["s_s"].' คะแนน  '.$results["s_detail"].'' ?>
      </option>
    <?php } ?>
                    </select>
                </div>


                <?php 
$query2 = "SELECT
meet_check.meet_check_id as m_id,
meet_check.meet_check_name m_name
FROM
meet_check
ORDER BY
meet_check.meet_check_id ASC";
$result2 = mysqli_query($con, $query2);

?>
                <div class="mb-2">
                    <label class="my-1 mr-2" for="meet_check">การตรงต่อเวลา</label>
                    <select class="form-select" id="meet_check" name="meet_check" aria-label="Default select example">
                      
                        <?php foreach($result2 as $results2){?>
    <option value="<?php echo $results2["m_id"];?>">
      <?php echo $results2["m_name"]; ?>
      </option>
    <?php } ?>
                    </select>
                </div>



                <input type="text" name="appoint_id" id="appoint_id" value="<?php echo $appoint_id ?>" hidden>
                
                <input type="text" name="teacher_id" id="teacher_id" value="<?php echo $_SESSION["TeacherID"] ?>" hidden>
                <input type="text" name="recorder" id="recorder" value="<?php echo $recorder ?>" hidden>
                
                <!-- ///กกเ -->
                <input type="text" name="project_id" id="project_id" value="<?php echo $p_id ?>" hidden>
               
                <div class="mb-2">
                <label for="selectchoice">นัดพบครั้งต่อไปหรือไม่  </label> <br>
                <input required type="radio" onclick="Check();" value="yes" name="selectchoice" id="yesCheck"/>   นัดพบ <br>
                <input required type="radio" onclick="Checkno();" value="no" name="selectchoice" id="noCheck"/>   ไม่ต้องการนัดพบ
                </div>
               
<!-- นัดหมายครั้งต่อไป -->
<div id="ifYes" style="display:none" >

                            <div class="mb-2">
                                <label for="date_start">วันที่และเวลาที่เข้าพบ (เริ่มต้น)</label>
                                <input type="datetime-local" class="form-control" id="date_start" name="date_start"
                                    aria-describedby="date_start-describ" min="<?php echo date('Y-m-d\TH:i',strtotime('+ 3 day',strtotime(date('Y-m-d\TH:i')))) ?>"   >
                                <small id="date_start-describ"
                                    class="form-text text-muted">เลือกวันที่และเวลาที่ต้องการเข้าพบ (เริ่มต้น)</small>
                            </div>
                            <div class="mb-2">
                                <label for="date_end">เวลาสิ้นสุด  </label>
                                <input type="time"  class="form-control" id="date_end" name="date_end" placeholder="จำนวนนาที"
                                    aria-describedby="date_end-describ" >
                                <small id="date_end-describ"
                                    class="form-text text-muted">กรอกเวลาสิ้นสุดที่เข้าพบ</small>
                            </div>

<!-- นักศึกษารับทราบ -->
<div class="mb-2">
                                <label class="my-1 mr-2" for="student">นักศึกษารับทราบแล้ว</label>
                                <select class="form-select" id="student" name="student" aria-label="Default select example" >
                                   
                                    <?php include '../../conn.php';?>
                                    <?php
                                    
					$sql = "SELECT
                    project_has_student.phs_project_id, 
                    project_has_student.phs_student_id, 
                    student.student_name,
                    student.student_title, 
	                student.student_lastname
                FROM
                    project_has_student
                    INNER JOIN
                    student
                    ON 
                        project_has_student.phs_student_id = student.student_id
                WHERE
                    project_has_student.phs_project_id = $p_id
                ORDER BY
                    project_has_student.phs_student_id ASC";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            $namestudent = $row["student_title"].$row["student_name"]."&nbsp;&nbsp;".$row["student_lastname"];
                            echo '<option value="'. $row["phs_student_id"].'">'. $namestudent.'</option>';
                            
                          
							 
						}
					}
					$con->close();
					?>
                                    
                                </select>
                            </div>
<!-- สิ้นสุดนักศึกษารับทราบ -->




                            </div>
<!-- สิ้นสุดนัดหมายครั้งต่อไป -->
                <button class="btn btn-block btn-success" type="submit" name="ADDCOM05">บันทึก</button>
            </form>
                    

                    
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                            <div class="card card-body bg-white border-light shadow-sm mb-4">
                                <h2 class="h5 mb-4">ข้อมูลการนัดพบ</h2>
                                
<!-- ข้อมูลเริ่ม -->
<?php
                 include '../../conn.php';
					$sql = "SELECT
                    appoint.appoint_id, 
                    appoint.project_id, 
                    project.project_name, 
                    appoint.appoint_date_start, 
                    appoint.appoint_date_end, 
                    appoint.teacher_id, 
                    teacher.teacher_name, 
                    appoint.appoint_comment, 
                    appoint.recorder, 
                    student.student_name, 
                    appoint.appoint_recorder,
                    appoint.meet_link,
                    student.student_title, 
	                student.student_lastname
                FROM
                    appoint
                    INNER JOIN
                    project
                    ON 
                        appoint.project_id = project.project_id
                    INNER JOIN
                    teacher
                    ON 
                        appoint.teacher_id = teacher.teacher_id
                    INNER JOIN
                    student
                    ON 
                        appoint.recorder = student.student_id
                    WHERE
                    appoint.appoint_id ='$appoint_id'";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            $strDate = $row["appoint_date_start"];
                            $strDatetoHourMinute = $row["appoint_date_start"];
                            $strDatetoHourMinute1 = $row["appoint_date_end"];
                            $strDateTime = $row["appoint_recorder"];
                            $namestudent = $row["student_title"].$row["student_name"]."&nbsp;&nbsp;".$row["student_lastname"];
                            echo '<p> หมายเลขการนัดพบ : ' . $row["appoint_id"].'   
                            <p> นัดหมายโดย : ' . $namestudent.' 
           <p> โครงงาน : ' . $row["project_name"].'
           <p>ต้องการเข้าพบ : '.DateThai($strDate).'   เวลา '. HourMinute($strDatetoHourMinute).'  - '. HourMinute1($strDatetoHourMinute1).' น.
            
           <p> รายละเอียด : ' . $row["appoint_comment"].'
          
           <p> ทำรายการเมื่อ :'.DateTimeThai($strDateTime).' ';
           if ($row["meet_link"]) {
            
            echo' <p>คลิ๊กไอคอนเพื่อเข้า Google Meet : <a href="'.$row["meet_link"].'" target="_blank"><img src="../../assets/img/meet_icon.png" alt="Image" style="width:40px;"></a>';
         }
        

        
     
}
}
$con->close();
?> 
<!-- ข้อมูลสิ้นสุด -->


                                
                            </div>
                </div>
            </div>
        
<?php
include '../../conn.php';




if (isset($_POST["ADDCOM05"])) {


    $appoint_id  = $_POST['appoint_id'];
    $project_id  = $_POST['project_id'];
    $comment_teacher  = $_POST['comment_teacher'];
    $comment_assign  = $_POST['comment_assign'];
    $recorder  = $_POST['recorder'];
    $teacher = $_SESSION["TeacherID"];
    $score  = $_POST['score'];
    $meet_check  = $_POST['meet_check'];
    $teacher_id  = $_POST['teacher_id'];
    $set_status = 4;
    
    
//นัดหมายครั้งถัดไป
    $selectchoice = $_POST['selectchoice'];
    $date_start = $_POST['date_start'];
    $date_end = $_POST['date_end'];
    $student_id = $_POST['student'];
    $datesub=substr($date_start,0,10);

    if ($selectchoice=='yes') {

        
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
         DATE(appoint.appoint_date_start) AS datest,
         TIME(appoint.appoint_date_start) AS datest1
         FROM
         appoint
         WHERE
         appoint.teacher_id = '$teacher' AND
         DATE(appoint.appoint_date_start) = '$datesub' AND
          
         (
             appoint.appoint_status = 1 OR
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
        $add_appoint_next ="INSERT INTO appoint
    
      ( `project_id`, `appoint_date_start`, `appoint_date_end`, `appoint_comment`, `teacher_id`, `appoint_status`, `recorder`)
    
        VALUES 
    
        ('$project_id','$date_start','$datesub $date_end','$comment_assign','$teacher_id','2','$student_id')";

$resultappoinr = mysqli_query($con, $add_appoint_next);

///
$sqlADDCOM1 ="INSERT INTO com05
    
( `appoint_id`, `project_id`, `comment_teacher`, `comment_assign`, `score`, `meet_check`, `teacher_id`, `student_id`)

  VALUES 

  ('$appoint_id','$project_id','$comment_teacher','$comment_assign','$score','$meet_check','$teacher_id','$recorder')";

$result1 = mysqli_query($con, $sqlADDCOM1);




if ($result1) {
$sql2 ="UPDATE appoint SET

appoint_status ='$set_status' WHERE appoint_id='$appoint_id'";

$result2 = mysqli_query($con, $sql2);

echo
  "<script> 
  Swal.fire({
      position: 'center',
      icon: 'success',
      title: 'บันทึกการเข้าพบเรียบร้อยแล้ว!',
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
      title: บันทึกการเข้าพบไม่สำเร็จ', 
  }).then(() => {window.history.back()});
</script>";
}
///
   
}
}


}


if ($selectchoice=='no') {

    ///
$sqlADDCOM1 ="INSERT INTO com05

( `appoint_id`, `project_id`, `comment_teacher`, `comment_assign`, `score`, `meet_check`, `teacher_id`, `student_id`)

VALUES 

('$appoint_id','$project_id','$comment_teacher','$comment_assign','$score','$meet_check','$teacher_id','$recorder')";

$result1 = mysqli_query($con, $sqlADDCOM1);




if ($result1) {
$sql2 ="UPDATE appoint SET

appoint_status ='$set_status' WHERE appoint_id='$appoint_id'";

$result2 = mysqli_query($con, $sql2);

echo
"<script> 
Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'บันทึกการเข้าพบเรียบร้อยแล้ว!',
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
  title: บันทึกการเข้าพบไม่สำเร็จ', 
}).then(() => {window.history.back()});
</script>";
}
///

}






///
}

mysqli_close($con);
?>
<?php }else{
    echo "<script type='text/javascript'>";
    echo "alert('ไม่มีสิทธิ์ในการเข้าถึง');";
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