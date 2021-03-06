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

    <!-- datatable CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">

    <!-- นำเข้า  Javascript จาก  Jquery -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- นำเข้า  Javascript  จาก   dataTables -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js">
    </script>


    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function () {
            $('#example').dataTable({
                "oLanguage": {

                    "sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
                    "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
                    "sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ เร็คคอร์ด",
                    "sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 เร็คคอร์ด",
                    "sInfoFiltered": "(จากเร็คคอร์ดทั้งหมด _MAX_ เร็คคอร์ด)",
                    "sSearch": "ค้นหา :",
                    "oPaginate": {
                        "sFirst": "เริ่มต้น",
                        "sPrevious": "ก่อนหน้า",
                        "sNext": "ถัดไป",
                        "sLast": "สุดท้าย"
                    }
                }
            });
        });
    </script>
<!-- การลิ้ง sweetalert2 เเบบ cdn  -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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
                                <li class="breadcrumb-item"><a href="../teacher"><span
                                            class="fas fa-home"></span></a></li>

                                <li class="breadcrumb-item active" aria-current="page">ประวัติการนัดพบ</li>
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
                    <h1 class="h4">ประวัติการนัดพบอาจารย์ที่ปรึกษา</h1>
                   
                </div>

            </div>
        </div>

        <div class="card border-light shadow-sm mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered " width="100%" data-order="[[ 0, &quot;desc&quot; ]]" id="tableId">
                        <col style="width:5%">
                        <col style="width:7%">
                        <col style="width:7%">
                        <col style="width:71%">
                        <col style="width:5%">
                        <col style="width:5%">

                        <thead class="thead-dark">
                        <tr>
                                <th>#ID</th>
                                <th>วันที่เข้าพบ</th>
                                <th>เวลา</th>
                                <th>โครงงาน</th>
                                <th>สถานะ</th>
                                <th>จัดการ</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php
                        $TeacherID =$_SESSION["TeacherID"];
					$sql = "SELECT
                    appoint.appoint_id, 
                    appoint.appoint_date_start, 
                    appoint.appoint_date_end, 
                    appoint.project_id, 
                    project.project_name, 
                    appoint_status.appoint_status_name, 
                    appoint_status.appoint_status_class, 
                    appoint_status.color_calendar, 
                    appoint.appoint_status
                FROM
                    appoint
                    INNER JOIN
                    project
                    ON 
                        appoint.project_id = project.project_id
                    INNER JOIN
                    appoint_status
                    ON 
                        appoint.appoint_status = appoint_status.appoint_status_id
                    WHERE
                    appoint.teacher_id = '$TeacherID'";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            $strDate = $row["appoint_date_start"];
                            $strDatetoHourMinute = $row["appoint_date_start"];
                            $strDatetoHourMinute1 = $row["appoint_date_end"];
                            $newDate = date('Y-m-d\TH:i', strtotime($strDatetoHourMinute));
                            echo '<tr>
                                <td>'. $row["appoint_id"].'</td>
                                <td> '.DateThai($strDate).' </td>
                                <td>'. HourMinute($strDatetoHourMinute).'  - '. HourMinute1($strDatetoHourMinute1).' น.</td>
                                <td>'. mb_substr($row["project_name"],0,45,'UTF-8').'</td>
                                <td><h6><span class="badge bg-'. $row["appoint_status_class"].'">'. $row["appoint_status_name"].'</span></h6></td>';
                                
                                $t = $row["appoint_status"];

                                if ($t == "1") {
                                    echo '<td>
                                    <div class="btn-group">
                                        <button
                                            class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="icon icon-sm">
                                                <span class="fas fa-ellipsis-h icon-dark"></span>
                                            </span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="show.php?act=show&ID='. $row["appoint_id"].'"><span
                                                    class="fas fa-eye mr-2"></span>ดูรายละเอียด</a>
                                            <a class="dropdown-item" data-toggle="modal" data-target="#myModal'. $row["appoint_id"].'"><span
                                                    class="fas fa-edit mr-2"></span>แก้ไข</a>
                                            <a class="dropdown-item text-success" href="index.php?CFR3=req&ID=' . $row["appoint_id"].'"><span
                                                    class="fas fa-check mr-2"></span>ยืนยัน</a>
                                                    <a class="dropdown-item text-danger" href="index.php?deleteR=req&ID=' . $row["appoint_id"].'"><span
                                                    class="fas fa-ban mr-2"></span>ยกเลิก</a>
                                        </div>

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
                                                      aria-describedby="date_start-describ" value="'.$newDate.'">
                                                  <small id="date_start-describ" class="form-text text-muted">เลือกวันที่และเวลาที่ต้องการเข้าพบ
                                                      (เริ่มต้น)</small>
                                              </div>
                                              <div class="mb-2">
                                                  <label for="date_end">เวลาสิ้นสุด</label>
                                                  <input type="time"  class="form-control" id="date_end" name="date_end"
                                                      placeholder="จำนวนนาที" aria-describedby="date_end-describ" value="'. $timesub .'">
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
                                      </div>


                                       
                                    </div>
                                </td>
                            </tr>';
                                }else if ($t == "2") {
                                    echo'<td>
                                    <div class="btn-group">
                                        <button
                                            class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="icon icon-sm">
                                                <span class="fas fa-ellipsis-h icon-dark"></span>
                                            </span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="com05_frm.php?act=show&ID='. $row["appoint_id"].'"><span
                                                    class="fas fa-comment mr-2"></span>บันทึก COM-05</a>
                                                    <a class="dropdown-item text-danger" href="index.php?RejectAppoint=req&ID='. $row["appoint_id"].'"><span
                                                    class="fas fa-ban mr-2"></span>ผิดนัด</a>
                                        
                                        </div>

                                       
                                    </div>
                                </td>
                            </tr>';
                                }                            
                                else {
                                    echo '<td>
                                    <div class="btn-group">
                                        <button
                                            class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="icon icon-sm">
                                                <span class="fas fa-ellipsis-h icon-dark"></span>
                                            </span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="show.php?act=show&ID=' . $row["appoint_id"].'"><span
                                                    class="fas fa-eye mr-2"></span>ดูรายละเอียด</a>
                                           
                                        </div>

                                       
                                    </div>
                                </td>
                            </tr>';
                                }
                                

                                
							 
						}
					}
					$con->close();
					?>






                        </tbody>
                        <!-- <tfoot>
                            <tr>
                                <th>#ID</th>
                                <th>วันที่เข้าพบ</th>
                                <th>เวลา</th>
                                <th>โครงงาน</th>
                                <th>สถานะ</th>
                                <th>จัดการ</th>

                            </tr>
                        </tfoot> -->
                    </table>

                </div>
            </div>
        </div>

<?php
include '../../conn.php';
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
                Swal.fire(
                    'ยกเลิกการนัดพบสำเร็จ!',
                    'ท่านได้ยกเลิกเรียบร้อย',
                    'success'
                ).then(()=> location = 'index.php')
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

if (isset($_GET["RejectAppoint"] )) {
    echo
        "<script> 
            Swal.fire({
                icon: 'warning',
                title: 'บันทึกการผิดนัด ?',
                text: 'หากบันทึกการผิดนัดแล้ว ไม่สามารถกรอกแบบฟอร์มบันทึกการเข้าพบได้ ( COM-05 )!',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ใช่',
                cancelButtonText: 'ไม่!'
            }).then((result) => {
                if (result.isConfirmed) {
                    location = 'index.php?RejectAppoint01=req&ID={$_GET["ID"]}'
                }else{
                    location = 'index.php'
                }
            }); 
    </script>";
}


if (isset($_GET["RejectAppoint01"])) {


    
    
    
    
      
      $sqlreject = "UPDATE appoint SET
    
    appoint_status =6
    
    
    
    
          WHERE appoint_id={$_GET["ID"]}";

if (mysqli_query($con, $sqlreject)) {
    echo
        "<script> 
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'บันทึกการผิดนัดสำเร็จ!',
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
            title: 'บันทึกการผิดนัดไม่สำเร็จ', 
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
    $teacher = $_SESSION["TeacherID"];
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
    <!-- Datatable JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>

</body>

</html>
<?php }?>