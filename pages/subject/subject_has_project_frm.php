<?php session_start();?>

<?php 

if ($_SESSION["Teacherlevel"]=="2"){?>

<?php include '../../conn.php';
$class_id1 = $_REQUEST["ID"];?>
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
                                <li class="breadcrumb-item"><a href="index.php">ข้อมูลโครงงาน</a></li>
                                
                                    <li class="breadcrumb-item active" aria-current="page">เพิ่มข้อมูลโครงงาน</li>
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
                    <h1 class="h4">เพิ่มข้อมูลโครงงาน</h1>

                </div>

            </div>
        </div>

        <div class="card border-light shadow-sm mb-4">
            <div class="card-body">
            
                <form action="" method="post">


                    <div class="row">

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="project_id">รหัสโครงงาน</label>
                                <input class="form-control" id="project_id" name="project_id" type="number"
                                    placeholder="กรอกรหัสโครงงาน" required autofocus>
                            </div>
                        </div>

                        <div class="col-md-9 mb-3">
                            <div class="form-group">
                                <label for="project_name">ชื่อโครงงาน</label>
                                <input class="form-control" id="project_name" name="project_name" type="text"
                                    placeholder="กรอกชื่อโครงงาน" required>
                            </div>
                        </div>


                    </div>

                    <div class="row">

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="project_type">ประเภทโครงงาน</label>
                                <?php 
                                    $query = "SELECT
                                    project_type.project_type_id as p_id,
                                    project_type.project_type_name as p_type
                                    FROM
                                    project_type
                                    ORDER BY
                                    project_type.project_type_id ASC";
                                    $result = mysqli_query($con, $query);

                                    ?>

                                    <select class="form-select" id="project_type" name="project_type" aria-label="Default select example">
                                                 <option selected>เลือกประเภทโครงงาน</option>
                       
                                                    <?php foreach($result as $results){?>
                                <option value="<?php echo $results["p_id"];?>">
                                  <?php echo $results["p_type"]; ?>
                                  </option>
                                <?php } ?>
                    </select>
                            </div>
                        </div>

                        


                    </div>
                    <input type="text" class="form-control" id="class_key" name="class_key"
                                    aria-describedby="date_end-describ"  value="<?php echo  $class_id1 ?>" hidden>
                    
                   
                    <div class="mt-3">
            <button type="submit" class="btn btn-primary" name="SujectAddProject">บันทึก</button>
            <a type="buttoon" class="btn btn-info" href="project.php?act=show&ID=<?php echo  $class_id1 ?>">กลับ</a>
        </div>




            </div>
        </div>


        </div>







        
        </form>

        </div>
        </div>

        <?php
include '../../conn.php';
if (isset($_POST["SujectAddProject"])) {

    $project_id  = $_POST['project_id'];
    $id_class  = $_POST['class_key'];
    
    $project_name  = $_POST['project_name'];
    
    $project_type  = $_POST['project_type'];
    
    
    
    
    
    
        $check1 = "select * from project  where project_id = '$project_id'";
          $result1 = mysqli_query($con, $check1)  or die(mysql_error());
            
            if($result1->num_rows > 0)   		
            {
    
    
                $check2 = "select * from subject_hash_project  where sp_subject_id = '$id_class' and sp_project_id = '$project_id' ";
                $result2 = mysqli_query($con, $check2)  or die(mysql_error());
                  
                  if($result2->num_rows > 0)   		
                  {
    
                    echo
                    "<script> 
                    Swal.fire({
                        icon: 'error',
                        title: 'บันทึกไม่สำเร็จ เนื่องจากโครงงานนี้อยู่ในกลุ่มเรียนนี้แล้ว', 
                    }).then(() => {window.history.back()});
                </script>";

                   
    
    } else {
        $sql22 = "INSERT INTO subject_hash_project
        (sp_subject_id, sp_project_id)
        
         VALUES
        ('$id_class', '$project_id') "; 
        $result = mysqli_query($con, $sql22);
    }
    
    
    
    
    
    
    
    
    
     
            }else{
        
                $sql3 = "INSERT INTO project
                (project_id, project_name, project_type)
                
                 VALUES
                ('$project_id', '$project_name', '$project_type') "; 
            $result = mysqli_query($con, $sql3);
    
    
    
     $sql4 = "INSERT INTO subject_hash_project
            (sp_subject_id, sp_project_id)
            
             VALUES
            ('$id_class', '$project_id') "; 
        $result = mysqli_query($con, $sql4);
     
      mysqli_close($con);
        
        if($result){
            echo
            "<script> 
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'เพิ่มโครงงานเรียบร้อยแล้ว',
                    showConfirmButton: false,
                    timer: 2000  
                }).then(()=> location = 'project.php?act=show&ID=$id_class' )
            </script>";



        } else {
          
            echo
            "<script> 
            Swal.fire({
                icon: 'error',
                title: 'เพิ่มข้อมูลไม่สำเร็จ', 
            }).then(() => {window.history.back()});
        </script>";
        }
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
<?php }else{

Header("Location: ../404/404.php");

    }
    
    
    
    ?>