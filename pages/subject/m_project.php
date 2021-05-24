
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
            "lengthChange": false,
            
        "ordering": true,
        "info":     false,

            
            "oLanguage": {
                "order": [[ 1, 'desc' ]],
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
                                    <li class="breadcrumb-item"><a href="../subject"><span class="fas fa-home"></span></a></li>
                                    
                                    <li class="breadcrumb-item active" aria-current="page">ข้อมูลรายวิชา</li>
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
                        <h1 class="h4">จัดการข้อมูลแบบรวดเร็ว</h1>
                        <p class="mb-0">อาจารย์สามารถเพิ่มโครงงาน เพิ่มนักศึกษา เพิ่มอาจารย์ที่ปรึกษา บันทึกกลุ่มโครงงาน บันทึกการลงทะเบียน โดยการ Importไฟล์Excell แค่ไฟล์เดียว</p>
                    </div>
                    
                </div>
            </div>
    
            <div class="card border-light shadow-sm mb-4" >
                    <div class="card-body">
                   <!--  <a  class="btn btn-primary btn-sm mr-2" type="button" href="classroom_add.php">
                        <span class="fas fa-plus mr-2"></span>เพิ่มกลุ่มเรียน</a>

                        <a  class="btn btn-warning btn-sm mr-2" type="button" href="m_project.php">
                        <span class="far fa-paper-plane mr-2"></span>จัดการข้อมูลแบบรวดเร็ว</a> -->
                       
                        <a class="btn btn-success btn-sm " data-toggle="modal" data-target="#exampleModalCenter"
                                role="button"><i class="fas fa-file-excel"></i>   Import Excel</a>
                                <a class="btn btn-info btn-sm " href="../../project_reg/" target="_blank"
                                role="button">ลิงค์เพิ่มข้อมูลโครงงาน</a>
               <!-- Modal -->
               <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มไฟล์ Excel</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <!-- frm_add str -->
                                <form method="post" action="excel-addfast.php" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                               
                                <div class="col-md-6">
                                    <input name="result_file" required="" type="file" accept=".xls, .xlsx">
                                 
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


                        <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" width="100%"
                    >
                    <thead class="thead-dark">
                                    <tr>
                                        <!-- <th class="border-0">#</th> -->
                                        <th class="border-0">รหัสวิชา</th>
                                        <th class="border-0">ภาคการเรียน</th>
                                        <th class="border-0">กลุ่มเรียน</th>
                                        <th class="border-0">รหัสยืนยัน</th>
                                        <th class="border-0">รับโครงงาน</th>
                                        <th class="border-0">จัดการไฟล์เอกสาร</th>
                                        <th class="border-0">ไฟล์ Export</th>
                                        <th class="border-0">ล้างข้อมูล</th>
                                        
    
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Item -->
                                    <!-- <td><a href="#" class="text-primary font-weight-bold">#</a> </td> -->


                                    <?php
           include '../../conn.php';
           $teacher_id =$_SESSION["TeacherID"];
               
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
                    subject_project.subject_day, 
	subject_day.day_name,
    subject_project.status_regis, 
	subject_project.status_file
                    FROM
                    subject_project
                    INNER JOIN	subject_day ON subject_project.subject_day = subject_day.day_id
                    WHERE
                    subject_project.subject_teacher = '$teacher_id'
                    ORDER BY
                    subject_project.subject_record DESC";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            echo '<tr>  
                                        <td >
                                        ' . $row["subject_id2"].'
                                        </td>
                                        <td >
                                        ' . $row["subject_semester"].'/' . $row["subject_year"].'
                                        </td>
                                        <td >
                                        ' . $row["subject_sec"].'
                                        </td>
                                        <td >
                                     ' . $row["subject_key"].' 
                                        </td>
                                        <td >'; ?>
<?php
if ($row["status_regis"]==1) {
    echo'<a class="btn btn-link  dropdown-toggle dropdown-toggle-split m-0 p-0 text-danger" href="m_project.php?keyregis=' . $row["subject_key"].'&ID=' . $row["status_regis"].'"><i class="fas fa-toggle-off fa-2x"></i></a>';
}
if ($row["status_regis"]==2) {
    echo'<a class="btn btn-link  dropdown-toggle dropdown-toggle-split m-0 p-0 text-success" href="m_project.php?keyregis=' . $row["subject_key"].'&ID=' . $row["status_regis"].'"><i class="fas fa-toggle-on fa-2x"></i></a>';
}                                      
                                          ?>
                                        
                                       <?php echo'</td>
                                        <td >'; ?>
                                        <?php
                                        if ($row["status_file"]==1) {
                                            echo'<a class="btn btn-link  dropdown-toggle dropdown-toggle-split m-0 p-0 text-danger" href="m_project.php?keyfile=' . $row["subject_key"].'&ID=' . $row["status_file"].'"><i class="fas fa-toggle-off fa-2x"></i></a>';
                                        }
                                        if ($row["status_file"]==2) {
                                            echo'<a class="btn btn-link  dropdown-toggle dropdown-toggle-split m-0 p-0 text-success" href="m_project.php?keyfile=' . $row["subject_key"].'&ID=' . $row["status_file"].'"><i class="fas fa-toggle-on fa-2x"></i></a>';
                                        }                                      
                                                                                  ?>
                                                                                
                                                                               <?php echo'
                                          </td>
                                          <td >
                                          <a class="btn btn-link  dropdown-toggle dropdown-toggle-split m-0 p-0 text-success" href="export.php?key=' . $row["subject_key"].'"><i class="fas fa-file-excel"></i>  ' . $row["subject_key"].'.xlsx</a>
                                            </td>
                                            <td >
                                            '; ?>
                                            <a
                                                
                                             class="btn btn-link  dropdown-toggle dropdown-toggle-split m-0 p-0 text-danger" href="m_project.php?projectDEL=req&ID=<?php echo $row["subject_key"]; ?>"><span
                                                    class="fas fa-trash-alt mr-2 fa-2x"></span> 
                                                    </a>
                                   <?php     echo'
                                                </td>
                                    </tr>';       
                                }
                                }
                                $con->close();
                                ?> 



                                    
                                   
                            
        
                                 
    
                                    
    
                                   
                                </tbody>
                            </table>
    
                            
    
                        </div>
                        
                        
                    </div>
                </div>
            
                <?php
include '../../conn.php';
if (isset($_GET["projectDEL"] )) {
        echo
            "<script> 
                Swal.fire({
                    icon: 'warning',
                    title: 'ต้องการล้างค่าข้อมูล?',
                    text: 'หากล้างแล้วไม่สามารถเรียกคืนได้!',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'ใช่',
                    cancelButtonText: 'ไม่!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        location = 'm_project.php?ProjectDELID=req&ID={$_GET["ID"]}'
                    }else{
                        location = 'm_project.php'
                    }
                }); 
        </script>";
}


if (isset($_GET["ProjectDELID"])) {
   

    
    $subject_id = $_GET["ID"];

    
    
      
      $sql111 = "DELETE FROM regis_project  WHERE subject_id='$subject_id' ";

    
        

    if (mysqli_query($con,$sql111 )) {
        echo
            "<script> 
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'ล้างค่าเรียบร้อย!',
                    showConfirmButton: false,
                    timer: 2000
                }).then(()=> location = 'm_project.php')
            </script>";
        //header('Location: index.php');
    } else {
        echo
            "<script> 
            Swal.fire({
                icon: 'error',
                title: 'ล้างค่าไม่สำเร็จ', 
            }).then(()=> location = 'm_project.php')
        </script>";
    }
  
   
}


if (isset($_GET["keyregis"])) {
   

    $keyregis = $_GET["keyregis"];
    $status = $_GET["ID"];

    if ($status == 1) {
        $sql111 = "UPDATE subject_project SET

status_regis = 2
                  WHERE subject_key='$keyregis'";
    }
    
    if ($status == 2) {
        $sql111 = "UPDATE subject_project SET

status_regis = 1
            
            
            
            
                  WHERE subject_key='$keyregis'";
    }
     

    
        

    if (mysqli_query($con,$sql111 )) {
        echo
            "<script> 
            window.location ='m_project.php';
            </script>";
        //header('Location: index.php');
    } else {
        echo
            "<script> 
            window.location = 'm_project.php';
        </script>";
    }
  
   
}

if (isset($_GET["keyfile"])) {
   

    $keyregis = $_GET["keyfile"];
    $status = $_GET["ID"];

    if ($status == 1) {
        $sql111 = "UPDATE subject_project SET

status_file = 2
                  WHERE subject_key='$keyregis'";
    }
    
    if ($status == 2) {
        $sql111 = "UPDATE subject_project SET

status_file = 1
            
            
            
            
                  WHERE subject_key='$keyregis'";
    }
     

    
        

    if (mysqli_query($con,$sql111 )) {
        echo
            "<script> 
            window.location ='m_project.php';
            </script>";
        //header('Location: index.php');
    } else {
        echo
            "<script> 
            window.location = 'm_project.php';
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