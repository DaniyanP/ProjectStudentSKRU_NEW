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
<?php session_start();
 date_default_timezone_set("Asia/Bangkok");
?>
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
    <link href='../../lib/main.css' rel='stylesheet' />
    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
    <script src='../../lib/main.js'></script>
    <script src='../../lib/locales-all.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var initialLocaleCode = 'th';
            var localeSelectorEl = document.getElementById('locale-selector');
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                },
                initialDate: '<?php echo date("Y-m-d") ?>',
                locale: initialLocaleCode,
                buttonIcons: false, // show the prev/next text
                weekNumbers: false,
                navLinks: true, // can click day/week names to navigate views
                editable: false,
                dayMaxEvents: true, // allow "more" link when too many events
                events: [
                    
                    <?php
                    $id_ptojrct =$_SESSION["ProjectID"];
					$sql = "SELECT
                    appoint.appoint_id,
                    appoint.appoint_comment,
                    appoint.appoint_date_start,
                    appoint.appoint_date_end,
                    teacher.teacher_name,
                    appoint.appoint_status,
                    appoint_status.appoint_status_name,
                    appoint_status.color_calendar,
                    teacher.teacher_title,
                    teacher.teacher_lastname
                    FROM 
                    appoint
                    INNER JOIN teacher ON appoint.teacher_id = teacher.teacher_id
                    INNER JOIN appoint_status ON appoint.appoint_status = appoint_status.appoint_status_id
                    WHERE
                    appoint.project_id = '$id_ptojrct' AND
                    appoint.appoint_status  NOT IN (3);";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            $teachern = $row["teacher_title"].$row["teacher_name"]."  ".$row["teacher_lastname"];
                    echo"
                    
                    {
                        title: '" . $teachern. " [" . $row["appoint_status_name"]. "]',
                        start: '" . $row["appoint_date_start"]. "',
                        end: '" . $row["appoint_date_end"]. "',
                        color: '" . $row["color_calendar"]. "',
                    },

                    ";
							 
						}
					}
					$con->close();
					?> 




                ]
            });

            calendar.render();

            // build the locale selector's options
            calendar.getAvailableLocaleCodes().forEach(function (localeCode) {
                var optionEl = document.createElement('option');
                optionEl.value = localeCode;
                optionEl.selected = localeCode == initialLocaleCode;
                optionEl.innerText = localeCode;
                localeSelectorEl.appendChild(optionEl);
            });

            // when the selected option changes, dynamically change the calendar option
            localeSelectorEl.addEventListener('change', function () {
                if (this.value) {
                    calendar.setOption('locale', this.value);
                }
            });

        });
    </script>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
        }

        #top {
            background: #eee;
            border-bottom: 1px solid #ddd;
            padding: 0 10px;
            line-height: 40px;
            font-size: 12px;
        }

        #calendar {
            max-width: 700px;

            margin: 20px auto;
            padding: 0 5px;
        }
    </style>


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

    <?php include '../menu_stu.php';?>


    <main class="content">

        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                                <li class="breadcrumb-item"><a href="index.php"><span class="fas fa-home"></span></a></li>
                               
                                <li class="breadcrumb-item active" aria-current="page">หน้าหลัก</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Navbar links -->
                    <?php include '../navbar.php';?>
                </div>
            </div>
        </nav>



        <div class="card border-light shadow-sm mb-4">
            <div class="card-body">
                <!--  <div id='top'>
 


                    Locales:
                    <select id='locale-selector'></select>

                </div> -->

                <div class="row">


                    <div class="col-lg-8 col-sm-12">

                        <div id='calendar'></div>

                    </div>


                    <div class="col-lg-4 col-sm-12">
                        <form action="" method="POST">

                            <div class="mb-2">
                                <h6>แบบฟอร์มนัดพบอาจารย์ที่ปรึกษาโครงงาน</h6>
                            </div>
                            <!-- Form -->
                            <div class="mb-2">
                                <label for="present">สิ่งที่นำเสนอ</label>
                                <textarea maxlength="255" class="form-control" id="present" name="present"
                                required  aria-describedby="present-describ"></textarea>
                                <small id="present-describ"
                                    class="form-text text-muted">กรอกรายละเอียดที่ขอเข้าพบอาจารย์ที่ปรึกษา</small>
                            </div>
                            <div class="mb-2">
                                <label class="my-1 mr-2" for="teacher">อาจารย์ที่ปรึกษา</label>
                                <select required class="form-select" id="teacher" name="teacher" aria-label="Default select example" >
                                   
                                    <?php include '../../conn.php';?>
                                    <?php
                                    $id_ptojrct =$_SESSION["ProjectID"];
					$sql = "SELECT
                    project_has_adviser.pha_project_id, 
                    project_has_adviser.pha_teacher_id, 
                    teacher.teacher_name, 
                    project_has_adviser.pha_type,
                    teacher.teacher_title,
                    teacher.teacher_lastname
	
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
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            $teachern = $row["teacher_title"].$row["teacher_name"]."&nbsp;&nbsp;".$row["teacher_lastname"];
                            echo '<option value="'. $row["pha_teacher_id"].'">'. $teachern.'</option>';
                            
                          
							 
						}
					}
					$con->close();
					?>
                                    
                                </select>
                            </div>

                            <div class="mb-2">
                                <label for="date_start">วันที่และเวลาที่เข้าพบ (เริ่มต้น)</label>
                                <input type="datetime-local" class="form-control" id="date_start" name="date_start"
                                    aria-describedby="date_start-describ" min="<?php echo date('Y-m-d\TH:i',strtotime('+ 3 day',strtotime(date('Y-m-d\TH:i')))) ?>"  max="<?php echo date('Y-m-d\TH:i',strtotime('+ 11 day',strtotime(date('Y-m-d\TH:i')))) ?>"  value="<?php echo date('Y-m-d\TH:i')?>" required>
                                <small id="date_start-describ"
                                    class="form-text text-muted">เลือกวันที่และเวลาที่ต้องการเข้าพบ (เริ่มต้น)</small>
                            </div>
                            <div class="mb-2">
                                <label for="date_end">เวลาสิ้นสุด  </label>
                                <input type="time"  class="form-control" id="date_end" name="date_end" placeholder="จำนวนนาที"
                                    aria-describedby="date_end-describ" required>
                                <small id="date_end-describ"
                                    class="form-text text-muted">กรอกเวลาสิ้นสุดที่เข้าพบ</small>
                            </div>
<!-- google meet -->
                            <div class="mb-2">
                <label for="selectchoice">ช่องทางเข้าพบ </label> <br>
                <input required type="radio" onclick="Checkno();" value="teacher" name="selectchoice" id="noCheck"/>   เข้าหาอาจารย์ <br>
                <input required type="radio" onclick="Check();" value="online" name="selectchoice" id="yesCheck"/>   Google Meet 
                
                </div>
               

<div id="ifYes" style="display:none" >

                            <div class="mb-2">
                                <label for="google_meet">URL Google Meet</label>
                                <input type="url" class="form-control" id="google_meet" name="google_meet"
                                    aria-describedby="date_start-describ"    >
                                <small id="date_start-describ"
                                    class="form-text text-muted">สร้างลิงค์ Google Meet ที่ <a href="https://meet.google.com/" target="_blank">https://meet.google.com/</a> </small>
                            </div>  
                            </div>
<!-- end google meet -->


                            <input type="text" class="form-control" id="id_project" name="id_project"
                                    aria-describedby="date_end-describ"  value="<?php echo  $_SESSION["ProjectID"]; ?>" hidden>
                            <input type="text" class="form-control" id="record" name="record"
                                    aria-describedby="date_end-describ"  value="<?php echo  $_SESSION["UserID"]; ?>" hidden>

                            <button class="btn btn-block btn-success" type="submit" name="SubmitInsert">บันทึก</button>






                        </form>

                    </div>

                </div>

            </div>
        </div>


        <div class="card border-light shadow-sm mb-4">
            <div class="card-body">
            <div class="row">


                    <div class="col-lg-12 col-sm-12">

                     <h6>ตรวจสอบปฏิทินอาจารย์ที่ปรึกษาโครงงาน</h6>
                     <style>
    body {
    
    border-radius: 10px
}

.card {
   
    border: none;
    border-radius: 10px;
    background-color: #fff
}

.stats {
    background: #f2f5f8 !important;
    color: #000 !important
}

.articles {
    font-size: 10px;
    color: #a1aab9
}

.number1 {
    font-weight: 500
}

.followers {
    font-size: 10px;
    color: #a1aab9
}

.number2 {
    font-weight: 500
}

.rating {
    font-size: 10px;
    color: #a1aab9
}

.number3 {
    font-weight: 500
}
</style>
<div class="container">
  <div class="row">
                            <?php
           include '../../conn.php';
         
               
					$sql = "SELECT
                    project_has_adviser.pha_project_id, 
                    project_has_adviser.pha_teacher_id, 
                    teacher.teacher_name, 
                    teacher.teacher_email, 
                    teacher.teacher_photo, 
                    project_has_adviser.pha_type,
                    teacher.teacher_title,
                    teacher.teacher_lastname
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
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            $teachern = $row["teacher_title"].$row["teacher_name"]."&nbsp;&nbsp;".$row["teacher_lastname"];
                            echo '
                            
                            <div class="col-lg-6 col-md-12">
                            <div class="card p-3">
                                <div class="d-flex align-items-center">
                                    <div class="image"> <img src="'. $row["teacher_photo"].'" class="rounded" width="155"> </div>
                                    <div class="ml-3 w-100">
                                        <h6 class="mb-0 mt-0">'. $teachern.'</h6> <span>อีเมลล์ :'. $row["teacher_email"].'</span>
                                        <br><span>'; ?> <?php if ($row["pha_type"]==1) {
                                            echo "อาจารย์ที่ปรึกษาหลัก";
                                        } else {
                                            echo "อาจารย์ที่ปรึกษาร่วม";
                                        } ?>
                                         <?php echo' </span>
                                        
                                        <br><a href="teacher_booking.php?act=show&ID='. $row["pha_teacher_id"].'" type="button" class="btn btn-primary btn-sm"><span class="fas fa-calendar-day mr-2"></span>ปฏิทินอาจารย์</span></a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        
                        ';       
            }
            }
            $con->close();
            ?> 
            </div>
                        </div>
                    </div>

                    </div>
                    </div>
                    </div>

        <?php


if (isset($_POST["SubmitInsert"])) {
    //นำเข้าไฟล์ การเชื่อมต่อฐานข้อมูล
    include '../../conn.php';

    //คำสั่ง SQL บันทึกข้อมูลลงฐานข้อมูล

    $present  = $_POST['present'];
    $teacher  = $_POST['teacher'];
    $date_start  = $_POST['date_start'];
  
    $date_end  = $_POST['date_end'];
    $selectchoice = $_POST['selectchoice'];
    $google_meet = $_POST['google_meet'];
    $datesub=substr($date_start,0,10);
    /* $appoint_end = 22 ; */
    
    $id_project = $_POST['id_project'];
    $record = $_POST['record'];
    /* $appoint_end = date('Y-m-d H:i:s',strtotime('+'.$date_end.' minutes',strtotime($date_start))); */
    if ($selectchoice == "teacher") {
        $meet_link = "";
    }
    if ($selectchoice == "online") {
        $meet_link = $google_meet;
    }
    
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
    


    //st

    $sql444 ="INSERT INTO appoint
    
      ( `project_id`, `appoint_date_start`, `appoint_date_end`, `appoint_comment`, `teacher_id`, `appoint_status`, `recorder`, `meet_link`)
    
        VALUES 
    
        ('$id_project','$date_start','$datesub $date_end','$present','$teacher','1','$record','$meet_link')";

if (mysqli_query($con, $sql444)) {
    echo
        "<script> 
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'นัดพบอาจารย์เรียบร้อยแล้ว',
            text: 'โปรดรออาจารย์ทำการยืนยันเข้าพบเท่านั้น จึงสามารถเข้าพบได้!',
            
        }).then(()=> location = 'index.php')
    </script>";
} else {
    echo
        "<script> 
        Swal.fire({
            icon: 'error',
            title: 'บันทึกข้อมูลไม่สำเร็จ', 
            text: 'โปรดตรวจสอบความถูกต้องของข้อมูล!',
        }).then(() => {window.history.back()}); 
    </script>";
}


}



mysqli_close($con);
//end


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