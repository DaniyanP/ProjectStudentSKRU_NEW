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



                                <li class="breadcrumb-item"><a href="../subject"><span class="fas fa-home"></span></a>
                                </li>
                                <li class="breadcrumb-item"><a href="../subject">ข้อมูลรายวิชา</a></li>
                                <li class="breadcrumb-item active" aria-current="page">เพิ่มรายวิชา</li>

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

                <form action="classroom_add_ac.php" method="post">


                    <div class="row">

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="subject_id2">รหัสวิชา</label>
                                <input class="form-control" id="subject_id2" name="subject_id2" type="text"
                                    placeholder="กรอกรหัสวิชา" required autofocus>
                            </div>
                        </div>

                        <div class="col-md-9 mb-3">
                            <div class="form-group">
                                <label for="subject_name">ชื่อวิชา</label>
                                <input class="form-control" id="subject_name" name="subject_name" type="text"
                                    placeholder="กรอกชื่อวิชา" required>
                            </div>
                        </div>


                    </div>

                    <div class="row">

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="subject_sec">กลุ่มเรียน</label>
                                <input class="form-control" id="subject_sec" name="subject_sec" type="text"
                                    placeholder="กรอกกลุ่มเรียน" required>
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="subject_classroom">รหัส Classroom</label>
                                <input class="form-control" id="subject_classroom" name="subject_classroom" type="text"
                                    placeholder="กรอกรหัส Classroom" required>
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="subject_semester">ภาคการเรียน</label>
                                <input class="form-control" id="subject_semester" name="subject_semester" type="number"
                                    placeholder="กรอกภาคการเรียน" required>
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="subject_year">ปีการศึกษา</label>
                                <input class="form-control" id="subject_year" name="subject_year" type="number"
                                    placeholder="กรอกปีการศึกษา" required>
                            </div>
                        </div>



                    </div>

                    <div class="row">

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="subject_day">วันทำการสอน</label>

                                <?php 
                                    $query11 = "SELECT
                                    subject_day.day_id as t1_day_id,
                                    subject_day.day_name as t1_day_name
                                    FROM
                                    subject_day
                                    
                                    ORDER BY
                                    subject_day.day_id ASC";
                                    $result11 = mysqli_query($con, $query11);

                                    ?>

                                <select class="form-select" id="subject_day" name="subject_day"
                                    aria-label="Default select example">
                                    <option selected>เลือกวันทำการสอน</option>

                                    <?php foreach($result11 as $results1){?>
                                    <option value="<?php echo $results1["t1_day_id"];?>">
                                        <?php echo $results1["t1_day_name"]; ?>
                                    </option>
                                    <?php } ?>
                                </select>

                            </div>


                        </div>

                        <input type="text" name="subject_teacher" id="subject_teacher"
                            value="<?php echo  $_SESSION["TeacherID"]; ?>" hidden>



                            <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="subject_time_start">เวลาสอน(เริ่มต้น)</label>
                                <input class="form-control" id="subject_time_start" name="subject_time_start" type="time"
                                    placeholder="กรอกปีการศึกษา" required>
                            </div>
                        </div>


                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="subject_time_end">เวลาสอน(สิ้นสุด)</label>
                                <input class="form-control" id="subject_time_end" name="subject_time_end" type="time"
                                    placeholder="กรอกปีการศึกษา" required>
                            </div>
                        </div>



                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <a type="button" class="btn btn-info" href="../subject">กลับ</a>
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