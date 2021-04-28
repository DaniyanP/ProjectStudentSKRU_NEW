
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
    <!-- Primary Meta Tags -->
    <?php include '../title.php';?>

    <?php include '../../meta.php';?>

    <!-- Fontawesome -->
    <link type="text/css" href="../../vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="../../vendor/notyf/notyf.min.css" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="../../css/volt.css" rel="stylesheet">
    <link href='../../lib/main.css' rel='stylesheet' />
                      
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
                                      }

                                      ,
                                      initialDate: '<?php echo date("Y-m-d") ?>',
                                      locale: initialLocaleCode,
                                      buttonIcons: false, // show the prev/next text
                                      weekNumbers: false,
                                      navLinks: true, // can click day/week names to navigate views
                                      editable: true,
                                      dayMaxEvents: true, // allow "more" link when too many events
                                      events: [ 
                                          <?php $id_teacher = $_SESSION["TeacherID"];
                                          $sql = "SELECT
                                          appoint.appoint_id,
                                          appoint.appoint_comment,
                                          appoint.appoint_date_start,
                                          appoint.appoint_date_end,
                                          teacher.teacher_name,
                                          appoint.appoint_status,
                                          appoint_status.appoint_status_name,
                                          appoint_status.color_calendar,
                                          appoint.teacher_id,
                                          project
                                          .project_name FROM appoint INNER JOIN teacher ON appoint
                                          .teacher_id = teacher
                                          .teacher_id INNER JOIN appoint_status ON appoint
                                          .appoint_status = appoint_status
                                          .appoint_status_id INNER JOIN project ON appoint
                                          .project_id = project.project_id WHERE appoint
                                          .teacher_id = '$id_teacher'
                                          AND appoint.appoint_status NOT IN(3,1);
                                          ";
                                          $result = $con->query($sql);

                                          if ($result->num_rows > 0) {

                                              while ($row = $result->fetch_assoc()) {

                                                  echo "{
                                                  title:
                                                      '#" . $row["appoint_id"]. " [" . $row["appoint_status_name"]. "] " . $row["project_name"]. "',
                                                      start: '" . $row["appoint_date_start"]. "',
                                                      end: '" . $row["appoint_date_end"]. "',
                                                      color: '" . $row["color_calendar"]. "',
                                              },";

                                          }
                                      }

                                      $con->close(); ?>
                                  ]
                              }

                          );

                          calendar.render();

                          // build the locale selector's options
                          calendar.getAvailableLocaleCodes().forEach(function (localeCode) {
                                  var optionEl = document.createElement('option');
                                  optionEl.value = localeCode;
                                  optionEl.selected = localeCode == initialLocaleCode;
                                  optionEl.innerText = localeCode;
                                  localeSelectorEl.appendChild(optionEl);
                              }

                          );

                          // when the selected option changes, dynamically change the calendar option
                          localeSelectorEl.addEventListener('change', function () {
                                  if (this.value) {
                                      calendar.setOption('locale', this.value);
                                  }
                              }

                          );

                          }

                          );
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



                          .pagination {
                              display: inline-block;
                          }

                          .pagination a {
                              color: black;
                              float: left;
                              padding: 8px 16px;
                              text-decoration: none;
                          }

                          .pagination a.active {
                              background-color: #4CAF50;
                              color: white;
                          }

                          .pagination a:hover:not(.active) {
                              background-color: #ddd;
                          }
                      </style><?php include '../dateth.php';?>
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

    <?php include '../menu_te.php';?>


    <main class="content">

        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                                <li class="breadcrumb-item"><a href="../teacher"><span class="fas fa-home"></span></a></li>
                                <li class="breadcrumb-item active" aria-current="page">หน้าหลัก</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Navbar links -->
                    <?php include '../navbar_te.php';?>
                </div>
            </div>
        </nav>

       

        <div class="card border-light shadow-sm mb-4">
            <div class="card-body">
            <div class="row">
                        <div class="col-lg-8 col-sm-12">
                            <div id='calendar'></div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            
                        <div class="row">
                        <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active"
                                    aria-current="true">รายการรอยืนยัน <span class="badge bg-warning text-dark">
                                    <?php
                                    include '../../conn.php';
                                     $id_teacher = $_SESSION["TeacherID"];
                                          $sql = "SELECT
                                          Count(appoint.appoint_id) as s,
                                          appoint.appoint_status,
                                          appoint.teacher_id
                                          FROM
                                          appoint
                                          WHERE
                                          appoint.teacher_id = '$id_teacher' AND
                                          appoint.appoint_status = 1
                                          GROUP BY
                                          appoint.appoint_status,
                                          appoint.teacher_id
                                          ";
                                          $result = $con->query($sql);

                                          if ($result->num_rows > 0) {

                                              while ($row = $result->fetch_assoc()) {

                                                  echo''. $row["s"].' รายการ';

                                          }
                                      }else{

                                        echo '0 รายการ';
                                    }

                                      $con->close(); ?>
                                    </span></a>
                                        <?php include '../../conn.php';
    $id_teacher=$_SESSION["TeacherID"];
    $perpage=3;

    if (isset($_GET['page'])) {
        $page=$_GET['page'];
    }

    else {
        $page=1;
    }

    $start=($page - 1) * $perpage;

    $sql="SELECT
appoint.appoint_id,
    appoint.project_id,
    project.project_name,
    appoint.appoint_date_start,
    appoint.appoint_date_end,
  
    appoint.teacher_id,
    appoint.appoint_status 
    FROM appoint 
    INNER JOIN project ON appoint.project_id=project.project_id 
    WHERE appoint.teacher_id='$id_teacher'AND appoint.appoint_status=1 
    ORDER BY appoint.appoint_id ASC 
    limit {$start} , {$perpage}";
$result=$con->query($sql);

    if ($result->num_rows > 0) {

        // output data of each row
        while($row=$result->fetch_assoc()) {
            $strDate=$row["appoint_date_start"];
            $strDatetoHourMinute=$row["appoint_date_start"];
            $strDatetoHourMinute1=$row["appoint_date_end"];
            echo'<li class="list-group-item list-group-item-action"><b>[[ #'. $row["appoint_id"].' ]] </b> '. mb_substr($row["project_name"], 0, 70, 'UTF-8').' 
<br>'.DateThai($strDate).' เวลา '. HourMinute($strDatetoHourMinute).'- '. HourMinute1($strDatetoHourMinute1).' น. 
</br><p>
<a class="btn btn-success btn-sm "type="button" href="index.php?CFR3=req&ID='.$row["appoint_id"].'"><span class="fas fa-check mr-2"></span>ยืนยัน</a>
<a class="btn btn-danger btn-sm" type="button" href="index.php?deleteR=req&ID='.$row["appoint_id"].'"><span class="fas fa-ban mr-2" ></span>ยกเลิก</a>
<a class="btn btn-warning btn-sm" type="button" data-toggle="modal" data-target="#myModal'. $row["appoint_id"].'"><span class="fas fa-random mr-2"></span>เลื่อน</a></p></li>

<div class="modal fade" id="myModal'. $row["appoint_id"].'" role="dialog">
<div class="modal-dialog">
  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">';
    
    $id = $row["appoint_id"]; 
    $query_edit = mysqli_query($con, "SELECT
    appoint.appoint_id,
    appoint.appoint_date_start,
    appoint.appoint_date_end
    FROM
    appoint
    WHERE
    appoint.appoint_id = '$id'");
    while ($row = mysqli_fetch_array($query_edit)) { 
        $strDatetoHourMinute = $row["appoint_date_start"];
       
        $newDate = date('Y-m-d\TH:i', strtotime($strDatetoHourMinute));
      
        $timesub=substr($row["appoint_date_end"],11,8);
      echo'<h4 class="modal-title">แก้ไขเวลาเข้าพบ #'. $row["appoint_id"].'</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">

    
      <form role="form" action="" method="post">

      <input type="text" class="form-control" id="appoint_id" name="appoint_id"
      aria-describedby="date_end-describ" value="'. $row["appoint_id"].'" hidden>
      
      <div class="mb-2">
          <label for="date_start">วันที่และเวลาที่เข้าพบ (เริ่มต้น)</label>
          <input type="datetime-local" class="form-control" id="date_start" name="date_start"
              aria-describedby="date_start-describ" value="'.$newDate.'" min="'.date('Y-m-d\TH:i',strtotime('+ 0 day',strtotime(date('Y-m-d\TH:i')))).'">
          <small id="date_start-describ" class="form-text text-muted">เลือกวันที่และเวลาที่ต้องการเข้าพบ
              (เริ่มต้น)</small>
      </div>
      <div class="mb-2">
          <label for="date_end">เวลาสิ้นสุด</label>
          <input type="time"  class="form-control" id="date_end" name="date_end"
              placeholder="จำนวนนาที" aria-describedby="date_end-describ" value="'. $timesub.'">
          <small id="date_end-describ" class="form-text text-muted">กรอกเวลาสิ้นสุดที่เข้าพบ</small>
      </div>';
    }
   
      echo'<div class="modal-footer">  
      <button type="submit" class="btn btn-success" name="SubmitEditAppoint">ยืนยัน</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
    </div>';
 

        echo'</form>
    </div>
  </div>
</div>
</div>';

 

        }
    } 

    if (isset($_GET["deleteR"] )) {
        echo
            "<script> 
                Swal.fire({
                    icon: 'warning',
                    title: 'ยกเลิกการนัดพบ?',
                    text: 'ท่านเเน่ใจว่า ยกเลิกการนัดพบ!',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'ใช่',
                    cancelButtonText: 'ไม่!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        location = 'index.php?deleteR2=req&ID={$_GET["ID"]}'
                    }else{
                        location = 'index.php'
                    }
                }); 
        </script>";
}


if (isset($_GET["deleteR2"])) {
   

  
    $sql288 = "UPDATE appoint SET

    appoint_status = 3
    
    
    
          WHERE appoint_id={$_GET["ID"]}";

    if (mysqli_query($con, $sql288)) {
        echo
            "<script> 
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'ยกเลิกการนัดพบสำเร็จ!!',
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
                title: 'ยกเลิกการนัดพบไม่สำเร็จ', 
            }).then(()=> location = 'index.php')
        </script>";
    }
  
   
}


if (isset($_GET["CFR3"])) {
   

   
    $sql288 = "UPDATE appoint SET

    appoint_status = 2
    
    
    
          WHERE appoint_id={$_GET["ID"]}";

    if (mysqli_query($con, $sql288)) {
        echo
            "<script> 
                Swal.fire(
                    'ยืนยันการนัดพบสำเร็จ!',
                    'ท่านได้ยืนยันเรียบร้อยแล้ว',
                    'success'
                ).then(()=> location = 'index.php')
            </script>";
        //header('Location: index.php');
    } else {
        echo
            "<script> 
            Swal.fire({
                icon: 'error',
                title: 'ยืนยันการนัดพบไม่สำเร็จ', 
            }).then(()=> location = 'index.php')
        </script>";
    }
  
   
}
    
if (isset($_POST["SubmitEditAppoint"])) {
    include '../../conn.php';

   
    $appoint_id = $_POST['appoint_id'];
    $date_start  = $_POST['date_start'];
    $date_end  = $_POST['date_end'];
    $set_status = 5;

    $datesub=substr($date_start,0,10);
   /*  $appoint_end = date('Y-m-d H:i:s',strtotime('+'.$date_end.' minutes',strtotime($date_start))); */
    
      
      $sqlappointedit = "UPDATE appoint SET
    
    appoint_status ='$set_status',
    appoint_date_start ='$date_start',
    appoint_date_end ='$datesub $date_end'
    
    
    
          WHERE appoint_id='$appoint_id' 
          ";

    if (mysqli_query($con, $sqlappointedit)) {
        echo
            "<script> 
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'เปลี่ยนแปลงการนัดหมายเรียบร้อยแล้ว!',
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
                title: 'แก้ไขการนัดพบไม่สำเร็จ', 
            }).then(()=> location = 'index.php')
        </script>";
    }
  
   
}
    ?></div>
    
                        </div>

<style>
.pagination {
  display: flex;
  @include list-unstyled();
  @include border-radius();
}

</style>
                        <?php 
                        
                        
                        
                        $sql2="SELECT
appoint.appoint_id,
    appoint.project_id,
    project.project_name,
    appoint.appoint_date_start,
    appoint.appoint_date_end,
   
    appoint.teacher_id,
    appoint.appoint_status FROM appoint INNER JOIN project ON appoint.project_id=project.project_id WHERE appoint.teacher_id='$id_teacher'AND appoint.appoint_status=1";
$query2=mysqli_query($con, $sql2);
    $total_record=mysqli_num_rows($query2);
    $total_page=ceil($total_record / $perpage);
    ?><nav>
                                <ul class="pagination justify-content-end">
                                    <li><a href="index.php?page=1" aria-label="Previous"><span
                                                aria-hidden="true">&laquo;

                                            </span></a></li><?php for($i=1; $i<=$total_page; $i++) {
        ?><li><a href="index.php?page=<?php echo $i; ?>"><?php echo $i;
        ?></a></li><?php
    }

    ?><li><a href="index.php?page=<?php echo $total_page;?>" aria-label="Next"><span aria-hidden="true">&raquo;
                                            </span></a></li>
                                </ul>
                            </nav><?php $con->close();
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