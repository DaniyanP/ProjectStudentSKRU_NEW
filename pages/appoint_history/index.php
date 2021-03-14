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
                    "sZeroRecords": "ไม่พลประวัติการนัดพบอาจารย์ที่ปรึกษา",
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

    <?php include '../menu_stu.php';?>


    <main class="content">

        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                                <li class="breadcrumb-item"><a href="../student_index"><span
                                            class="fas fa-home"></span></a></li>

                                <li class="breadcrumb-item active" aria-current="page">ประวัติการนัดพบ</li>
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
                    <h1 class="h4">ประวัติการนัดพบอาจารย์ที่ปรึกษา</h1>
                    <p class="mb-0">ข้อมูลประวัติการนัดพบอาจารย์ที่ปรึกษาทั้งหมด
                    </p>
                </div>

            </div>
        </div>

        <div class="card border-light shadow-sm mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" width="100%" data-order="[[ 0, &quot;desc&quot; ]]" id="tableId">
                        <col style="width:5%">
                        <col style="width:7%">
                        <col style="width:7%">
                        <col style="width:71%">
                        <col style="width:5%">
                        <col style="width:5%">

                        <thead>
                        <tr>
                                <th>#ID</th>
                                <th>วันที่เข้าพบ</th>
                                <th>เวลา</th>
                                <th>สิ่งที่นำเสนอ</th>
                                <th>สถานะ</th>
                                <th>จัดการ</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php
                        $id_ptojrct =$_SESSION["ProjectID"];
					$sql = "SELECT
                    appoint.appoint_id, 
                    appoint.project_id, 
                    project.project_name, 
                    appoint.appoint_date_start, 
                    appoint.appoint_date_end, 
                    appoint.appoint_comment, 
                    appoint_status.appoint_status_name, 
                    appoint.appoint_status, 
	                appoint_status.*
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
                                        appoint.project_id = '$id_ptojrct'";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            $strDate = $row["appoint_date_start"];
                            $strDatetoHourMinute = $row["appoint_date_start"];
                            $strDatetoHourMinute1 = $row["appoint_date_end"];
                            echo '<tr>
                                <td>'. $row["appoint_id"].'</td>
                                <td> '.DateThai($strDate).' </td>
                                <td>'. HourMinute($strDatetoHourMinute).'  - '. HourMinute1($strDatetoHourMinute1).' น.</td>
                                <td>'. mb_substr($row["appoint_comment"],0,50,'UTF-8').'</td>
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
                                            <a class="dropdown-item" href="appoint_edit.php?act=edit&ID=' . $row["appoint_id"].'"><span
                                                    class="fas fa-edit mr-2"></span>แก้ไข</a>
                                            <a class="dropdown-item text-danger" href="cencel_ac.php?act=show&ID=' . $row["appoint_id"].'"><span
                                                    class="fas fa-ban mr-2"></span>ยกเลิก</a>
                                        </div>

                                       
                                    </div>
                                </td>
                            </tr>';
                                }else if ($t == "5"){
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
                                        <a class="dropdown-item text-success" href="appoint_approve.php?act=show&ID=' . $row["appoint_id"].'"><span
                                                    class="fas fa-check mr-2"></span>ยืนยัน</a>
                                        <a class="dropdown-item text-danger" href="cencel_ac.php?act=show&ID=' . $row["appoint_id"].'"><span
                                        class="fas fa-ban mr-2"></span>ยกเลิก</a>
                                           
                                        </div>

                                       
                                    </div>
                                </td>
                            </tr>';
                                }  else {
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
                                <th>สิ่งที่นำเสนอ</th>
                                <th>สถานะ</th>
                                <th>จัดการ</th>

                            </tr>
                        </tfoot> -->
                    </table>

                </div>
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
    <!-- Datatable JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>

</body>

</html>
<?php }?>