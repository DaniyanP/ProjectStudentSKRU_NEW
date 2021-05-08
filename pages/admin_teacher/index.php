<?php session_start();?>

<?php 

if ($_SESSION["Teacherlevel"]=="3"){?>

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

    <?php include '../menu_admin.php';?>


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
                                    <li class="breadcrumb-item active" aria-current="page">ข้อมูลอาจารย์</li>
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
                    <h1 class="h4">ข้อมูลอาจารย์</h1>
                    <p class="mb-0">แสดงข้อมูลอาจารย์ที่ปรึกษาโครงงานและอาจารย์ประจำวิชา
                    </p>
                </div>

            </div>
        </div>

        <div class="card border-light shadow-sm mb-4">
            <div class="card-body">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                        <a class="btn btn-info btn-sm " href="teacher_add.php"
                                role="button">เพิ่มอาจารย์</a>


                                <div class="btn-group  ">
                                <a class="btn btn-success btn-sm " data-toggle="modal" data-target="#exampleModalCenter"
                                role="button">เพิ่มด้วย Excel</a>

                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="fas fa-angle-down dropdown-arrow"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>


                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="../../file_excell/Teacher_Add.xlsx"><span class="fas fa-file-excel mr-2"></span>ไฟล์ต้นแบบ</a>
                                  
                                   
                                </div>
                                </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                           ------

                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มอาจารย์</h5>
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
                <table id="example" class="table table-striped table-bordered" width="100%"
                    >
                    <col style="width:5%">
                    <col style="width:17%">
                    <col style="width:18%">
                    <col style="width:50%">
                    <col style="width:5%">
                    <col style="width:5%">

                    <thead>
                        <tr>
                            <th>รหัสอาจารย์</th>
                            <th>ชื่อ - นามสกุล</th>
                            <th>อีเมลล์</th>
                            <th>บทบาท</th>
                            <th>เพิ่มเติม</th>




                        </tr>
                    </thead>
                    <tbody>

                        <?php
                       
                        
					$sql = "SELECT
                    teacher.teacher_id,
                    teacher.teacher_name,
                    teacher.teacher_email,
                    teacher.teacher_password,
                    teacher.teacher_photo,
                    teacher.teacher_type,
                    teacher_type.teacher_type_name
                    FROM
                    teacher
                    INNER JOIN teacher_type ON teacher.teacher_type = teacher_type.teacher_type_id
                    WHERE
                    teacher.teacher_type NOT IN(3) and teacher.teacher_id NOT IN(3,1111) ;
                    ";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                         
                            echo '<tr>
                                <td>'. $row["teacher_id"].'</td>
                                <td>'. $row["teacher_name"].'</td>
                                
                                <td>'. $row["teacher_email"].'</td>
                                <td>'. $row["teacher_type_name"].'</td>
                                <td>
                                
                                       
                                



                            <a type="button" href="index.php?Setpassword=req&ID=' . $row["teacher_id"].'"
                                        class="btn btn-success btn-xs"
                                       >
                                        <span class="icon icon-sm">
                                            <span class="fas fa-key"></span>
                                        </span>
                                        
                                    </a>



                                        <a type="button" href="teacher_edit.php?act=edit&ID=' . $row["teacher_id"].'"
                                        class="btn btn-warning btn-xs"
                                       >
                                        <span class="icon icon-sm">
                                            <span class="fas fa-edit icon-dark"></span>
                                        </span>
                                        
                                    </a>

                                    <a type="button" href="index.php?TeacherDelCF=req&ID=' . $row["teacher_id"].'"
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
                    <tfoot>
                       
                    </tfoot>
                </table>

            </div>
        </div>
        </div>

        <?php
include '../../conn.php';

        if (isset($_GET["Setpassword"] )) {


echo
    "<script> 
        Swal.fire({
            icon: 'warning',
            title: 'ต้องการรีเซ็ตรหัสรหัสผ่าน',
            text: 'รหัสผ่านคือรหัสประจำตัว',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ใช่',
            cancelButtonText: 'ไม่!'
        }).then((result) => {
            if (result.isConfirmed) {
                
                location = 'index.php?SetPassTeacherID=req&ID={$_GET["ID"]}'
            }else{
                
                location = 'index.php'
            }
        }); 
</script>";

}


if (isset($_GET["SetPassTeacherID"])) {







$teacher = $_GET["ID"];
$setpassword = md5($teacher);

  $sql = "UPDATE teacher SET

teacher_password ='$setpassword'


      WHERE teacher_id='$teacher' 
      ";




if (mysqli_query($con, $sql)) {
echo
    "<script> 
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'รีเซ็ตรหัสผ่านอาจารย์เรียบร้อยแล้ว',
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
        title: 'รีเซ็ตรหัสผ่านไม่สำเร็จ', 
    }).then(()=> location = 'index.php')
</script>";
}
}




//ลบอาจารย์
if (isset($_GET["TeacherDelCF"] )) {


    echo
        "<script> 
            Swal.fire({
                icon: 'warning',
                title: 'ต้องการลบอาจารย์',
                text: 'ยืนยันการลบ',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ใช่',
                cancelButtonText: 'ไม่!'
            }).then((result) => {
                if (result.isConfirmed) {
                    
                    location = 'index.php?DelTeacherC=req&ID={$_GET["ID"]}'
                }else{
                    
                    location = 'index.php'
                }
            }); 
    </script>";
    
    }
    
    
    if (isset($_GET["DelTeacherC"])) {
    
    
    
    
    
    
    
   
    $teacher_id = $_GET["ID"];

    $sql1 = "DELETE FROM pr  WHERE pr_record='$teacher_id' ";
    $result1 = mysqli_query($con, $sql1);
    $sql2 = "DELETE FROM subject_project  WHERE subject_teacher='$teacher_id' ";
    $result2 = mysqli_query($con, $sql2);
    $sql3 = "DELETE FROM appoint  WHERE teacher_id='$teacher_id' ";
    $result3 = mysqli_query($con, $sql3);
    $sql4 = "DELETE FROM com05  WHERE teacher_id='$teacher_id' ";
    $result4 = mysqli_query($con, $sql4);
    $sql5 = "DELETE FROM project_has_adviser  WHERE pha_teacher_id='$teacher_id' ";
    $result5 = mysqli_query($con, $sql5);
    


    $sql = "DELETE FROM teacher  WHERE teacher_id='$teacher_id' ";
    
    
    
    
    if (mysqli_query($con, $sql)) {
    echo
        "<script> 
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'ลบอาจารย์เรียบร้อยแล้ว',
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
            title: 'ลบอาจารย์ไม่สำเร็จ', 
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