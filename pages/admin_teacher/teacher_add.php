<?php session_start();?>

<?php 

if ($_SESSION["Teacherlevel"]=="3"){?>

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

    <?php include '../menu_admin.php';?>


    <main class="content">

        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                            <li class="breadcrumb-item"><a href="../admin"><span class="fas fa-home"></span></a></li>
                                <li class="breadcrumb-item"><a href="index.php">ข้อมูลอาจารย์</a></li>
                                
                                    <li class="breadcrumb-item active" aria-current="page">เพิ่มข้อมูลอาจารย์</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Navbar links -->
                    <?php include '../navbar_admin.php';?>
                </div>
            </div>
        </nav>

        <div class="py-0">

            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">เพิ่มข้อมูลอาจารย์</h1>

                </div>

            </div>
        </div>

        <div class="card border-light shadow-sm mb-4">
            <div class="card-body">
            
                <form action="" method="post">


                    <div class="row">

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="teacher_id">รหัสอาจารย์</label>
                                <input class="form-control" id="teacher_id" name="teacher_id" type="number"
                                    placeholder="กรอกรหัสอาจารย์" required autofocus>
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="teacher_title">คำนำหน้า</label>
                                <select class="form-select" id="teacher_title" name="teacher_title" aria-label="Default select example">
                                                 <option selected>คำนำหน้า</option>
                                                 <option value="อ.">อ.</option>
                                                 <option value="ผศ.">ผศ.</option>
                                                 <option value="อ.ดร.">อ.ดร.</option>
                                                 <option value="ผศ.ดร.">ผศ.ดร.</option>
                                                 
                                                
                                
                    </select>
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="teacher_name">ชื่อ</label>
                                <input class="form-control" id="teacher_name" name="teacher_name" type="text"
                                    placeholder="กรอกชื่อ" required>
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="teacher_lastname">นามสกุล</label>
                                <input class="form-control" id="teacher_lastname" name="teacher_lastname" type="text"
                                    placeholder="กรอกนามสกุล" required>
                            </div>
                        </div>


                    </div>

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="teacher_email">อีเมลล์</label>
                                <input class="form-control" id="teacher_email" name="teacher_email" type="email"
                                    placeholder="กรอกอีเมลล์อาจารย์" required >
                            </div>
                        </div>


                       

                 
                            


                    </div>
                    

                    
                    <div class="row">
                    <div class="mt-3">
            <button type="submit" class="btn btn-primary" name="TeacherAdd">บันทึก</button>
            <a type="button" class="btn btn-info" href="index.php">กลับ</a>
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

if (isset($_POST["TeacherAdd"])) {



    
$teacher_id  = $_POST['teacher_id'];
$teacher_name  = $_POST['teacher_name'];
$teacher_email  = $_POST['teacher_email'];
$set_password = $teacher_id;
$teacher_password = md5($set_password);
$teacher_title  = $_POST['teacher_title'];
$teacher_lastname  = $_POST['teacher_lastname'];


		


 $sql = "INSERT INTO teacher
		(teacher_id, teacher_name, teacher_email, teacher_password, teacher_title, teacher_lastname)
		
 		VALUES
		('$teacher_id', '$teacher_name', '$teacher_email', '$teacher_password', '$teacher_title', '$teacher_lastname') "; 


if (mysqli_query($con, $sql)) {
    echo
        "<script> 
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'เพิ่มข้อมูลอาจารย์เรียบร้อยแล้ว',
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
            title: 'ไม่สามารถบันทึกได้ เนื่องจากอาจารย์ท่านนี้มีในระบบแล้ว', 
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