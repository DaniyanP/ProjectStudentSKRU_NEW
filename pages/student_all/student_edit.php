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
                                <li class="breadcrumb-item"><a href="index.php">ข้อมูลนักศึกษา</a></li>
                                
                                    <li class="breadcrumb-item active" aria-current="page">แก้ไขข้อมูลนักศึกษา</li>
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
                    <h1 class="h4">แก้ไขข้อมูลนักศึกษา</h1>

                </div>

            </div>
        </div>

        <div class="card border-light shadow-sm mb-4">
            <div class="card-body">


            <?php

$student = $_REQUEST["ID"];



$sql = "SELECT
student.student_id,
student.student_name,
student.student_major,
student.student_phone,
student.student_email,
student.student_type,
major.student_major_name,
                    student.student_title, 
	                student.student_lastname

FROM
student
INNER JOIN major ON student.student_major = major.student_major_id

WHERE
student.student_id = '$student'";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
            
                <form action="" method="post">


                    <div class="row">

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="student_id">รหัสนักศึกษา</label>
                                <input class="form-control" id="student_id" name="student_id" type="number"
                                    placeholder="กรอกรหัสนักศึกษา" required autofocus value="<?php echo $student_id?>" readonly>
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="student_title">คำนำหน้า</label>
                                <input class="form-control" id="student_title" name="student_title" type="text"
                                    placeholder="กรอกคำนำหน้า" required value="<?php echo $student_title ?>">
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="student_name">ชื่อ</label>
                                <input class="form-control" id="student_name" name="student_name" type="text"
                                    placeholder="กรอกชื่อ" required value="<?php echo $student_name ?>">
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="student_lastname">นามสกุล</label>
                                <input class="form-control" id="student_lastname" name="student_lastname" type="text"
                                    placeholder="กรอกนามสกุล" required value="<?php echo $student_lastname ?>">
                            </div>
                        </div>


                    </div>

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="student_email">อีเมลล์</label>
                                <input class="form-control" id="student_email" name="student_email" type="email"
                                    placeholder="กรอกอีเมลล์นักศึกษา" required value="<?php echo $student_email?>">
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="student_phone">เบอร์ติดต่อ</label>
                                <input class="form-control" id="student_phone" name="student_phone" type="tel"
                                    placeholder="กรอกเบอร์ติดต่อนักศึกษา" required value="<?php echo $student_phone ?>">
                            </div>
                        </div>



                        <?php 
$query2 = "SELECT
major.student_major_id as m_id,
major.student_major_name as m_name
FROM
major
ORDER BY
major.student_major_id ASC";
$result2 = mysqli_query($con, $query2);

?>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="student_major">สาขาวิชา</label>
                                <select class="form-select" id="student_major" name="student_major" aria-label="Default select example">
                        <option selected>---เลือกสาขาวิชา---</option>
                        

    <?php foreach($result2 as $results2){
                                            if( $results2["m_id"] == $student_major ){
                                               echo' <option value="'.$results2["m_id"].'" selected="true">'.$results2["m_name"].'</option>';
                                            }else{
                                                echo' <option value="'.$results2["m_id"].'" >'.$results2["m_name"].'</option>';
                                            }
                                        }
                                        ?>

                    </select>
                            </div>
                        </div>
                       

                 
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="student_type">สถานะการใช้งาน</label>
                                <select class="form-select" id="student_type" name="student_type" aria-label="Default select example">
                        <option selected>---สถานะการใช้งาน---</option>
                        

<?php
                                            if( $student_type == 1 ){
                                               echo' <option value="1" selected="true">ปกติ</option>';
                                               echo' <option value="2" >ปิดการใช้งาน</option>';
                                            }else{
                                                echo' <option value="2" selected="true">ปิดการใช้งาน</option>';
                                                echo' <option value="1" >ปกติ</option>';
                                            }
                                        
                                       ?>

                    </select>
                            </div>
                        </div>

                            


                    </div>
                    

                    
                    <div class="row">
                    <div class="mt-3">
            <button type="submit" class="btn btn-primary" name="StudenEdit">บันทึก</button>
            <a type="buttoon" class="btn btn-info" href="index.php">กลับ</a>
        </div>
        </div>



            </div>
        </div>


        </div>







        
        </form>

        </div>
        </div>

        
        <?php
include '../../conn.php';
if (isset($_POST["StudenEdit"])) {


    $student_id  = $_POST['student_id'];
    $student_name  = $_POST['student_name'];
    $student_major  = $_POST['student_major'];
    $student_email  = $_POST['student_email'];
    $student_phone  = $_POST['student_phone'];
    $student_type = $_POST['student_type'];
    $student_lastname  = $_POST['student_lastname'];
    $student_title  = $_POST['student_title'];
    
      $sql = "UPDATE student SET
    
    
    student_name='$student_name',
    student_major='$student_major',
    student_email='$student_email',
    student_phone='$student_phone',
    student_type='$student_type',
    student_lastname='$student_lastname',
    student_title='$student_title'
    
    
    
          WHERE student_id='$student_id' 
          ";

if (mysqli_query($con, $sql)) {
    echo
        "<script> 
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'แก้ไขข้อมูลนักศึกษาเรียบร้อยแล้ว',
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
            title: 'แก้ไขข้อมูลนักศึกษาไม่สำเร็จ', 
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
<?php }else{

Header("Location: ../404/404.php");

    }
    
    
    
    ?>