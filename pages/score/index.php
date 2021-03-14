<!--

=========================================================
* Volt - Bootstrap 5 Admin Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2020 Themesberg (https://www.themesberg.com)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->

<?php session_start();

if (!$_SESSION["UserID"]){ 

	  Header("Location: ../../login.php"); 

}else{?>
<?php include '../../conn.php';?>

<!DOCTYPE html>
<html lang="en">
<?php include '../dateth.php';?>
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
                                <li class="breadcrumb-item"><a href="../student_index"><span class="fas fa-home"></span></a></li>
                                
                                <li class="breadcrumb-item active" aria-current="page">ข้อมูลประวัติการเข้าพบ</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Navbar links -->
                    <?php include '../navbar.php';?>
                </div>
            </div>
        </nav>

        <div class="py-0">

            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">ประวัติการนัดพบ</h1>
                    <p class="mb-0">ตรวจสอบคะแนนและประวัติการเข้าพบพบอาจารย์ที่ปรึกษาโครงงาน
                    </p>
                </div>

            </div>
        </div>

        <div class="card border-light shadow-sm mb-4">
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                <col style="width:5%">
                    <col style="width:10%">
                    <col style="width:70%">
                    <col style="width:5%">
                    <col style="width:10%">
                    <thead class="table-light">
                   
                        <tr>
                            <th scope="col">ครั้งที่</th>
                            <th scope="col">วันที่</th>
                            <th scope="col">สิ่งที่นำเสนอ</th>
                            <th scope="col">คะแนน</th>
                            <th scope="col">COM05</th>
                        </tr>
                    </thead>
                    <tbody>


                    <?php
           
           $id_ptojrct =$_SESSION["ProjectID"];
               
					$sql = "SELECT
                    com05.com05_id,
                    com05.appoint_id,
                    appoint.appoint_comment,
                    com05.score,
appoint.appoint_date_start
                    FROM
                    com05
                    INNER JOIN appoint ON com05.appoint_id = appoint.appoint_id
                    WHERE
                    com05.project_id = '$id_ptojrct'
                    ORDER BY
                    com05.com05_id ASC";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            $strDate = $row["appoint_date_start"];
                            echo '<tr>
                            <td scope="row"></td>

                            <td>'.DateThai($strDate).'</td>
                            <td>'. mb_substr($row["appoint_comment"],0,50,'UTF-8').'</td>
                            <td>' . $row["score"].'</td>
                            <td><a href="com05.php?act=show&ID='. $row["com05_id"].'"" class="btn  btn-sm btn-outline-info mr-3"><span class="far fa-paper-plane mr-2"></span>COM-05</a></td>
                        </tr>';       
                    }
                    }
                    $con->close();
                    ?> 
                        


                    </tbody>
                   
                </table>
                </div>
                <br>
                <p>คะแนนรวม <b>
                <?php
           include '../../conn.php';
          
					$sql2 = "SELECT
                    com05.project_id,
                    Sum(score.score_score) as s_sum
                    FROM
                    com05
                    INNER JOIN score ON com05.score = score.score_id
                    WHERE
                    com05.project_id = '$id_ptojrct'
                    GROUP BY
com05.project_id
                    ";
					$result = $con->query($sql2);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            echo $row["s_sum"];       
                        }
                        }else{

                            echo '0';
                        }
                        $con->close();
                        ?> 
                </b>  คะแนน</p>
                

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