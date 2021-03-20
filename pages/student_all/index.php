<?php session_start();?>

<?php 

if ($_SESSION["Teacherlevel"]=="2"){?>

<?php include '../../conn.php';

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


    <script type="text/javascript">
        function delete_teacher(student_id) {
            if (confirm('คุณต้องการลบใช่ไหม')) {
                window.location.href = 'student_del.php?&ID=' + student_id;
            }
        }

        function setpass_student(student_id) {
            if (confirm('คุณต้องการรีเซ็ตรหัสผ่านใช่ไหม')) {
                window.location.href = 'student_setpass.php?&ID=' + student_id;
            }
        }
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

    <?php include '../menu_te.php';?>


    <main class="content">

        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                            <li class="breadcrumb-item"><a href="../subject"><span class="fas fa-home"></span></a></li>
                                <!-- <li class="breadcrumb-item"><a href="index.php">ข้อมูลอาจารย์</a></li>
                                <li class="breadcrumb-item"><a href="#">ข้อมูลโครงงาน</a></li> -->
                                    <li class="breadcrumb-item active" aria-current="page">ข้อมูลนักศึกษา</li>
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
                    <h1 class="h4">ข้อมูลนักศึกษา</h1>
                    <p class="mb-0">แสดงข้อมูลนักศึกษาทั้งหมดในระบบ
                    </p>
                </div>

            </div>
        </div>

        <div class="card border-light shadow-sm mb-4">
            <div class="card-body">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                        <a class="btn btn-info btn-sm " href="student_add.php"
                                role="button">เพิ่มนักศึกษา</a>
                               <!--  <a class="btn btn-success btn-sm " data-toggle="modal" data-target="#exampleModalCenter"
                                role="button">เพิ่มด้วย Excel</a> -->
                        </div>

                        <div class="col-lg-6 col-md-6">
                          <!--  ------ -->

                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มนักศึกษา</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <!-- frm_add str -->
                                <form method="post" action="excel-ac.php" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                               
                                <div class="col-md-6">
                                    <input name="result_file" required="" type="file">
                                    
                                </div>
                            </div>
                        </div>
                    </div>                           


                            <!-- frm_add end -->

                        </div>
                        <div class="modal-footer">
                           
                            <button type="submit" name="upload_excel" class="btn btn-primary">อัพโหลด</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ฟอร์มเพิ่มไฟล์ สิ้นสุด -->





            <p></p>



            <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" width="100%" data-order="[[ 0, &quot;desc&quot; ]]" id="tableId">
                    <col style="width:5%">
                    <col style="width:17%">
                    <col style="width:18%">
                    <col style="width:50%">
                    <col style="width:5%">
                    <col style="width:5%">

                    <thead class="thead-dark">
                    <tr>
                        <th>รหัสนักศึกษา</th>
                            <th>ชื่อ - นามสกุล</th>
                            <th>เบอร์ติดต่อ</th>
                            <th>สาขาวิชา</th>
                            
                            
                            <th>เพิ่มเติม</th>



                        </tr>
                    </thead>
                    <tbody>

                        <?php
                       
                        
					$sql = "SELECT
                    student.student_id,
                    student.student_name,
                    student.student_major,
                    student.student_phone,
                    major.student_major_name,
                    student.student_email
                    FROM
                    student
                    INNER JOIN major ON student.student_major = major.student_major_id;
                    ";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                         
                            echo '<tr>
                                <td>'. $row["student_id"].'</td>
                                <td>'. $row["student_name"].'</td>
                                
                                
                               
                                <td>'. $row["student_phone"].'</td>
                                <td>'. $row["student_major_name"].'</td>
                                <td>
                                
                                <a type="button" href="javascript: setpass_student(' . $row["student_id"].')"
                                class="btn btn-success btn-xs"
                               >
                                <span class="icon icon-sm">
                                    <span class="fas fa-key"></span>
                                </span>
                                
                            </a>

                                        <a type="button" href="student_edit.php?act=edit&ID=' . $row["student_id"].'"
                                        class="btn btn-warning btn-xs"
                                       >
                                        <span class="icon icon-sm">
                                            <span class="fas fa-edit icon-dark"></span>
                                        </span>
                                        
                                    </a>

                                    <a type="button" href="javascript: delete_teacher(' . $row["student_id"].')"
                                        class="btn btn-danger btn-xs"
                                       >
                                        <span class="icon icon-sm">
                                            <span class="fas fa-trash-alt icon-dark"></span>
                                        </span>
                                        
                                    </a>


                                    
                                       

                                       
                                    
                                </td>
                               
                            </tr>';
                                                   

                                
							 
						}
					}
					$con->close();
					?>






                    </tbody>
                    <!-- <tfoot>
                        <tr>
                        <th>รหัสนักศึกษา</th>
                            <th>ชื่อ - นามสกุล</th>
                            <th>เบอร์ติดต่อ</th>
                            <th>สาขาวิชา</th>
                            
                            
                            <th>เพิ่มเติม</th>



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
<?php }else{

Header("Location: ../404/404.php");

    }
    
    
    
    ?>