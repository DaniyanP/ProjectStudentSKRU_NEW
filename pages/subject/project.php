<?php session_start();?>

<?php 

if ($_SESSION["Teacherlevel"]=="2"){?>

<?php include '../../conn.php';
$id_section_room =$_REQUEST["ID"];
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
                            <li class="breadcrumb-item"><a href="../subject"><span class="fas fa-home"></span></a></li>
                                <li class="breadcrumb-item"><a href="../subject">ข้อมูลรายวิชา</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">ข้อมูลโครงงาน</li>
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
                    <h1 class="h4">โครงงานในรายวิชา</h1>
                    <p class="mb-0">
                        
                    
                    
                    <?php
                       
                        
                       $sql01 = "SELECT
                       subject_project.subject_key,
                       subject_project.subject_name,
                       subject_project.subject_semester,
                       subject_project.subject_year,
                       subject_project.subject_sec,
                       subject_project.subject_id2
                       FROM
                       subject_project
                       WHERE
                       subject_project.subject_key = '$id_section_room'
                       ";
                       $result01 = $con->query($sql01);
                       if ($result01->num_rows > 0) {
   
                           while($row01 = $result01->fetch_assoc()) {
                               echo 'รหัสวิชา'. $row01["subject_id2"].' Sec. '. $row01["subject_sec"].'  '. $row01["subject_name"].'  ภาคการเรียน'. $row01["subject_semester"].'  ปีการศึกษา '. $row01["subject_year"].' ';
                                                      
   
                                   
                                
                           }
                       }
                       $con->close();
                       ?>
                    </p>
                </div>

            </div>
        </div>

        <div class="card border-light shadow-sm mb-4">
            <div class="card-body">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5">
                            <form action="" method="post">
                                <label for="projec_id">เพิ่มโครงงาน</label>
                                <input type="text" name="projec_id" id="projec_id" placeholder="กรอกรหัสโครงงาน"
                                    required>
                                <input type="text" name="id_class" id="id_class" value="<?php echo $id_section_room ?>"
                                    hidden>
                                <button type="submit" class="btn btn-primary btn-sm" name="ProjectAdder">บันทึก</button>
                            </form>
                            
                        </div>

                        <div class="col-lg-7 col-md-7">

                        <div class="btn-group  ">
                            <a class="btn btn-success btn-sm " data-toggle="modal" data-target="#exampleModalCenter"
                                role="button">เพิ่ม Excel</a>
                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="fas fa-angle-down dropdown-arrow"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>


                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="../../file_excell/Project_Add.xlsx"><span class="fas fa-file-excel mr-2"></span>ไฟล์ต้นแบบ</a>
                                  
                                   
                                </div>
                                </div>

                                <a class="btn btn-info btn-sm " href="subject_has_project_frm.php?act=show&ID=<?php echo $id_section_room ?>"
                                role="button">เพิ่มโครงงานใหม่</a>
                                <a  class="btn btn-dark btn-sm " href="project_has_adviser_frm.php?&ID=<?php echo $id_section_room ?>" role="button">บันทึกอาจารย์ที่ปรึกษา</a>
                                <a  class="btn btn-warning btn-sm " href="project_has_student_frm.php?&ID=<?php echo $id_section_room ?>" role="button">บันทึกกลุ่มโครงงาน</a>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มโครงงานเข้ากลุ่มเรียน</h5>
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
                                    <input name="result_file" required="" type="file" accept=".xls, .xlsx">
                                    <input name="id_room" type="text" value="<?php echo $id_section_room ?>" hidden>
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
                <table id="example" class="table table-striped table-bordered" width="100%"
                    data-order="[[ 0, &quot;desc&quot; ]]" id="tableId">
                    <col style="width:5%">
                    <col style="width:7%">
                    <col style="width:7%">
                    <col style="width:71%">
                    <col style="width:5%">
                    <col style="width:5%">

                    <thead class="thead-dark">
                    <tr>
                            <th>รหัสโครงงาน</th>
                            <th>ชื่อโครงงาน</th>
                            <th>สถานะ</th>
                            <th>เพิ่มเติม</th>



                        </tr>
                    </thead>
                    <tbody>

                        <?php
                       
                       include '../../conn.php';
					$sql = "SELECT
                    subject_hash_project.sp_id,
                    subject_hash_project.sp_subject_id, 
                    subject_hash_project.sp_project_id, 
                    project.project_name, 
                    project_status.project_status_name, 
                    project_status.project_status_class
                FROM
                    subject_hash_project
                    INNER JOIN
                    project
                    ON 
                        subject_hash_project.sp_project_id = project.project_id
                    INNER JOIN
                    project_status
                    ON 
                        project.project_status = project_status.project_status_id
                WHERE
                subject_hash_project.sp_subject_id = '$id_section_room'
                ORDER BY
                    subject_hash_project.sp_project_id ASC
                
                    ";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                         
                            echo '<tr>
                                <td>'. $row["sp_project_id"].'</td>
                                <td>'. mb_substr($row["project_name"],0,65,'UTF-8').'</td>
                                
                                <td><h6><span class="badge bg-'. $row["project_status_class"].'">'. $row["project_status_name"].'</span></h6></td>
                              
                                   <td>
                                    
                                        <a type="button" href="project_detail.php?act=show&ID=' . $row["sp_project_id"].'&IDT=' . $id_section_room.'"
                                            class="btn btn-info btn-xs"
                                           >
                                            <span class="icon icon-sm">
                                                <span class="fas fa-eye icon-dark"></span>
                                            </span>
                                            
                                        </a>

                                        <a type="button" href="project_edit.php?act=show&ID=' . $row["sp_project_id"].'&IDR=' . $id_section_room.'"
                                        class="btn btn-warning btn-xs"
                                       >
                                        <span class="icon icon-sm">
                                            <span class="fas fa-edit icon-dark"></span>
                                        </span>
                                        
                                    </a>

                                    <a type="button" href="project.php?DelProjectG=req&ID=' . $row["sp_id"].'&IDR=' . $id_section_room.'"
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
                            <th>รหัสโครงงาน</th>
                            <th>ชื่อโครงงาน</th>
                            <th>สถานะ</th>
                            <th>เพิ่มเติม</th>



                        </tr>
                    </tfoot> -->
                </table>

            </div>
            <a href="../../pdf_project.php?act=show&ID=<?php echo $id_section_room ?>" type="button" class="btn btn-danger"><span class="fas fa-file-pdf mr-2"></span>รายงานโครงงาน</a>
        </div>
        </div>


        <?php
 include '../../conn.php';
            if (isset($_POST["ProjectAdder"])) {
   

                $projec_id  = $_POST['projec_id'];
                $id_class  = $_POST['id_class'];
                
                
                
                
                // เช็คว่ามีข้อมูลนี้อยู่หรือไม่
                    $check = "select * from subject_hash_project  where sp_subject_id = '$id_class' and sp_project_id = '$projec_id' ";
                      $result101 = mysqli_query($con, $check)  or die(mysql_error());
                        
                        if($result101->num_rows > 0)   		
                        {
                //ถ้ามี project นี้อยู่ในระบบแล้วให้แจ้งเตือน
                echo "<script> 
                Swal.fire(
                    'ไม่สามารถบันทึกได้!  ',
                    'เนื่องจากโครงงานนี้อยู่ในกลุ่มเรียนนี้แล้ว โปรดตรวจสอบรหัสโครงงานอีกครั้ง',
                    'warning'
                ).then(()=> location = 'project.php?act=show&ID=$id_class')
            </script>";
        }else{
                    
                //ถ้าไม่มีก็บันทึกลงฐานข้อมูล
                 $sqladdproject = "INSERT INTO subject_hash_project
                        (sp_subject_id, sp_project_id)
                        
                         VALUES
                        ('$id_class', '$projec_id') "; 
                    
                 
                 
                
                    

                    if(mysqli_query($con,$sqladdproject)){



                        echo
                        "<script> 
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'เพิ่มโครงงานเข้ากลุ่มเรียนเรียบร้อยแล้ว!',
                                showConfirmButton: false,
                                timer: 2000
                            }).then(()=> location = 'project.php?act=show&ID=$id_class')
                        </script>";

                        
                      } else {
                          echo "<script> 
                        Swal.fire(
                            'ไม่พบรหัสโครงงานในระบบ!  ',
                            'โปรดตรวจสอบรหัสโครงงานอีกครั้ง เพื่อความถูกต้อง',
                            'error'
                        ).then(()=> location = 'project.php?act=show&ID=$id_class')
                    </script>";
                      }

                    }
  
   
}





if (isset($_GET["DelProjectG"] )) {

    echo
        "<script> 
            Swal.fire({
                icon: 'warning',
                title: 'ลบโครงงานออกจากกลุ่มเรียน?',
                text: 'ท่านเเน่ใจว่าลบโครงงาน!',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ใช่',
                cancelButtonText: 'ไม่!'
            }).then((result) => {
                if (result.isConfirmed) {
                    location = 'project.php?DelProjectGID=req&ID={$_GET["ID"]}&IDR={$_GET["IDR"]}'
                }else{
                    location = 'project.php?act=show&ID={$_GET["IDR"]}'
                }
            }); 
    </script>";
}


if (isset($_GET["DelProjectGID"])) {



    $sqldelpg = "DELETE FROM subject_hash_project  WHERE sp_id={$_GET["ID"]} ";



if (mysqli_query($con, $sqldelpg)) {
    echo
        "<script> 
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'ลบโครงงานออกจากกลุ่มเรียนเรียบร้อยแล้ว!',
                showConfirmButton: false,
                timer: 2000
            }).then(()=> location = 'project.php?act=show&ID={$_GET["IDR"]}')
        </script>";
    //header('Location: index.php');
} else {
    echo
        "<script> 
        Swal.fire({
            icon: 'error',
            title: 'ลบโครงงานออกจากกลุ่มเรียนไม่สำเร็จ', 
        }).then(()=> location = 'index.php')
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