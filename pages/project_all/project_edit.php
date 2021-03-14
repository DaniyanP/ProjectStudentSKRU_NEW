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
                                
                                    <li class="breadcrumb-item active" aria-current="page">แก้ไขข้อมูลโครงงาน</li>
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
                    <h1 class="h4">เพิ่มข้อมูลรายวิชาที่สอน</h1>

                </div>

            </div>
        </div>

        <div class="card border-light shadow-sm mb-4">
            <div class="card-body">
            
                <form action="project_edit_ac.php" method="post">

                <?php

$project_idd = $_REQUEST["ID"];



$sql = "SELECT
project.project_id,
project.project_name,
project.project_type,
project.project_status
FROM
project

WHERE
project.project_id = '$project_idd'";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>

                    <div class="row">

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="project_id">รหัสโครงงาน</label>
                                <input class="form-control" id="project_id" name="project_id" type="number"
                                    placeholder="กรอกรหัสโครงงาน" required value="<?php echo $project_id ?>" readonly>
                            </div>
                        </div>

                        <div class="col-md-9 mb-3">
                            <div class="form-group">
                                <label for="project_name">ชื่อโครงงาน</label>
                                <input class="form-control" id="project_name" name="project_name" type="text"
                                    placeholder="กรอกชื่อโครงงาน" required value="<?php echo $project_name ?>">
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
                       
                                                 <?php foreach($result as $results){
                                            if( $results["p_id"] == $project_type ){
                                               echo' <option value="'.$results["p_id"].'" selected="true">'.$results["p_type"].'</option>';
                                            }else{
                                                echo' <option value="'.$results["p_id"].'" >'.$results["p_type"].'</option>';
                                            }
                                        }
                                        ?>
                    </select>
                            </div>
                        </div>

                       

                        
                       


                    </div>

                   
                    <div class="mt-3">
            <button type="submit" class="btn btn-primary">บันทึก</button>
        </div>




            </div>
        </div>


        </div>







        
        </form>

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
<?php }else{

Header("Location: ../404/404.php");

    }
    
    
    
    ?>