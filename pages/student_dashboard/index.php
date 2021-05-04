
<?php session_start();?>
<?php 

if (!$_SESSION["UserID"]){  //check session

	  Header("Location: ../../login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{?>
<?php include '../../conn.php';
$projectID_STU = $_SESSION["ProjectID"];
$studentSTU_ID = $_SESSION["UserID"];
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

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
    <style type="text/css">
        table {

            counter-reset: row-num;
        }

        table tbody tr {
            counter-increment: row-num;
        }

        table tr td:first-child::before {
            content: counter(row-num);
        }
    </style>
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
                               <!--  <li class="breadcrumb-item"><a href="../student_index"><span class="fas fa-home"></span></a></li>
                                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Bootstrap tables</li>
                            </ol> -->
                        </nav>
                    </div>
                    <!-- Navbar links -->
                    <?php include '../navbar.php';?>
                </div>
            </div>
        </nav>

        <div class="py-0">

           <!--  <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">หัวข้อ</h1>
                    <p class="mb-0">อธิบายหัวข้อ
                    </p>
                </div>
                
            </div> -->
        </div>


<!-- ยอดโครงงาน -->
<div class="row">


<!-- กล่องที่1 -->
<div class="col-12 col-sm-6 col-xl-3 mb-4">
            <div class="card border-light shadow-sm">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon icon-shape icon-md icon-shape-blue rounded mr-4 mr-sm-0"><span class="far fa-clone"></span></div>
                            <div class="d-sm-none">
                                <h2 class="h5">โครงงาน</h2>
                                <h3 class="mb-1">
                                
                                
                                <?php
               include '../../conn.php';
                
            $sqlcountPJ = "SELECT
           
           Count(project_has_student.phs_key) as C_project, 
            project_has_student.phs_project_id, 
            project_has_student.phs_student_id
        FROM
            project_has_student
        WHERE
            project_has_student.phs_student_id = '$studentSTU_ID'

            ";
            
            $result = mysqli_query($con, $sqlcountPJ) or die ("Error in query: $sqlcountPJ " . mysqli_error());
            $row = mysqli_fetch_array($result);
            extract($row);
            echo $C_project;
            ?></h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h5">โครงงาน</h2>
                                <h3 class="mb-1">
                                <?php
echo $C_project;
$con->close();
            ?> </h3>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- กล่องที่2 -->
<div class="col-12 col-sm-6 col-xl-3 mb-4">
            <div class="card border-light shadow-sm">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon icon-shape icon-md icon-shape-warning rounded mr-4 mr-sm-0"><span class="far fa-star"></span></div>
                            <div class="d-sm-none">
                                <h2 class="h5">คะแนน</h2>
                                <h3 class="mb-1"> <?php
               include '../../conn.php';
                
            $sqlcountPJ = "SELECT
            com05.com05_id, 
            SUM(score.score_score) as c_score, 
            com05.project_id
        FROM
            com05
            INNER JOIN
            score
            ON 
                com05.score = score.score_id
        WHERE
            com05.project_id = '$projectID_STU'
            
            

            ";
            
            $result = mysqli_query($con, $sqlcountPJ) or die ("Error in query: $sqlcountPJ " . mysqli_error());
            $row = mysqli_fetch_array($result);
            extract($row);
            echo $c_score;
            ?></h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h5">คะแนน</h2>
                                <h3 class="mb-1"><?php
echo $c_score;
$con->close();
            ?></h3>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- กล่องที่3 -->
<div class="col-12 col-sm-6 col-xl-3 mb-4">
<div class="card border-light shadow-sm">
<div class="card-body">
    <div class="row d-block d-xl-flex align-items-center">
        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
            <div class="icon icon-shape icon-md icon-shape-danger rounded mr-4 mr-sm-0"><span class="far fa-times-circle"></span></div>
            <div class="d-sm-none">
                <h2 class="h5">ผิดนัด</h2>
                <h3 class="mb-1"> <?php
               include '../../conn.php';
                
            $sqlcountPJ = "SELECT
            COUNT(appoint.appoint_id) as C_mis, 
            appoint.project_id, 
            appoint.appoint_status
        FROM
            appoint
        WHERE
            appoint.project_id = '$projectID_STU' AND
            appoint.appoint_status = 6

            ";
            
            $result = mysqli_query($con, $sqlcountPJ) or die ("Error in query: $sqlcountPJ " . mysqli_error());
            $row = mysqli_fetch_array($result);
            extract($row);
            echo $C_mis;
            ?></h3>
            </div>
        </div>
        <div class="col-12 col-xl-7 px-xl-0">
            <div class="d-none d-sm-block">
                <h2 class="h5">ผิดนัด</h2>
                <h3 class="mb-1"><?php
echo $C_mis;
$con->close();
            ?></h3>
            </div>
            
        </div>
    </div>
</div>
</div>
</div>


        <!-- กล่องที่4 -->
        <div class="col-12 col-sm-6 col-xl-3 mb-4">
            <div class="card border-light shadow-sm">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon icon-shape icon-md icon-shape-success rounded mr-4 mr-sm-0"><span class="far fa-check-circle"></span></div>
                            <div class="d-sm-none">
                                <h2 class="h5">เข้าพบ</h2>
                                <h3 class="mb-1"><?php
               include '../../conn.php';
                
            $sqlcountPJ = "SELECT
            COUNT(appoint.appoint_id) as C_pass, 
            appoint.project_id, 
            appoint.appoint_status
        FROM
            appoint
        WHERE
            appoint.project_id = '$projectID_STU' AND
            appoint.appoint_status = 4
            ";
            
            $result = mysqli_query($con, $sqlcountPJ) or die ("Error in query: $sqlcountPJ " . mysqli_error());
            $row = mysqli_fetch_array($result);
            extract($row);
            echo $C_pass;
            ?></h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h5">เข้าพบ</h2>
                                <h3 class="mb-1"><?php
echo $C_pass;
$con->close();
            ?></h3>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>




        
        </div>
<!-- ปิดยอดโครงงาน -->



<!-- ประวัติการทำโครงงาน -->
        <div class="card border-light shadow-sm mb-4">
            <div class="card-body">
                <b><h5>โครงงาน</h5></b>
                <div class="table-responsive">
                <table class="table table-hover">

                <col style="width:5%">
                <col style="width:80%">
                    <col style="width:10%">
                   
                
                    <col style="width:10%">

                    <thead class="table-light">
                   
                        <tr>
                            <th scope="col">ครั้งที่</th>
                            <th scope="col">ชื่อโครงาน</th>
                            <th scope="col">ประเภท</th>
                            <th scope="col">สถานะ</th>
                    
                        </tr>
                    </thead>
                    <tbody>


                    <?php
           
           include '../../conn.php';
               
					$sql = "SELECT
                    project_has_student.phs_key, 
                    project_has_student.phs_project_id, 
                    project.project_name, 
                    project_type.project_type_name, 
                    project_status.project_status_name, 
                    project_has_student.phs_student_id
                FROM
                    project_has_student
                    INNER JOIN
                    project
                    ON 
                        project_has_student.phs_project_id = project.project_id
                    INNER JOIN
                    project_type
                    ON 
                        project.project_type = project_type.project_type_id
                    INNER JOIN
                    project_status
                    ON 
                        project.project_status = project_status.project_status_id
                WHERE
                    project_has_student.phs_student_id = '$studentSTU_ID'
                ORDER BY
                    project_has_student.phs_key ASC";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            $text = $row["project_name"];
                          $warptxt = wordwrap($text,80,"<br/>",true);
                            echo '<tr>
                            <td scope="row"></td>

                           
                            <td>' . $warptxt.'</td>
                            <td>' . $row["project_type_name"].'</td>
                            <td>' . $row["project_status_name"].'</td>
                           
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


       <!-- ประวัติการลงทะเบียนเรียน -->
       <div class="card border-light shadow-sm mb-4">
            <div class="card-body">
                <b><h5>ประวัติการลงทะเบียนเรียน</h5></b>
                <div class="table-responsive">
                <table class="table table-hover">

                <col style="width:5%">
                <col style="width:10%">
                <col style="width:10%">
                <col style="width:10%">
                <col style="width:45%">
                <col style="width:20%">


                    <thead class="table-light">
                   
                        <tr>
                            <th scope="col">ครั้งที่</th>
                            <th scope="col">ภาคการเรียน</th>
                            <th scope="col">ClassRoom</th>
                            <th scope="col">รหัสวิชา</th>
                            <th scope="col">ชื่อวิชา</th>
                            <th scope="col">อาจารย์ผู้สอน</th>
                         
                        </tr>
                    </thead>
                    <tbody>


                    <?php
           
           include '../../conn.php';
               
					$sql = "SELECT
                    subject_hash_student.ss_id, 
                    subject_hash_student.ss_subject_id, 
                    subject_project.subject_id2, 
                    subject_project.subject_classroom, 
                    subject_project.subject_name, 
                    subject_project.subject_semester, 
                    subject_project.subject_year, 
                    teacher.teacher_name
                FROM
                    subject_hash_student
                    INNER JOIN
                    subject_project
                    ON 
                        subject_hash_student.ss_subject_id = subject_project.subject_key
                    INNER JOIN
                    teacher
                    ON 
                        subject_project.subject_teacher = teacher.teacher_id
                WHERE
                    subject_hash_student.ss_student_id = '$studentSTU_ID'
                ORDER BY
                    subject_hash_student.ss_id ASC";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            $text = $row["subject_name"];
                          $warptxt = wordwrap($text,40,"<br/>",true);
                            echo '<tr>
                           

                            <td scope="row"></td>
                            <td>' . $row["subject_semester"].'/' . $row["subject_year"].'</td>                           
                            <td>' . $row["subject_classroom"].'</td>
                            <td>' . $row["subject_id2"].'</td>
                            <td>' . $warptxt.'</td>
                            <td>' . $row["teacher_name"].'</td>

                           
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
<?php }?>