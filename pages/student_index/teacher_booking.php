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
 date_default_timezone_set("Asia/Bangkok");
?>
<?php 

if (!$_SESSION["UserID"]){  

	  Header("Location: ../../login.php"); 

}else{?>
<?php include '../../conn.php';
 $teacher_ID = $_REQUEST["ID"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
    <?php include '../title.php';?>

    <?php include '../../meta.php';?>


    <!-- Fontawesome -->
    <link type="text/css" href="../../vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="../../vendor/notyf/notyf.min.css" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="../../css/volt.css" rel="stylesheet">
    <link href='../../lib/main.css' rel='stylesheet' />
    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
    <script src='../../lib/main.js'></script>
    <script src='../../lib/locales-all.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var initialLocaleCode = 'th';
            var localeSelectorEl = document.getElementById('locale-selector');
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                },
                initialDate: '<?php echo date("Y-m-d") ?>',
                locale: initialLocaleCode,
                buttonIcons: false, // show the prev/next text
                weekNumbers: false,
                navLinks: true, // can click day/week names to navigate views
                editable: false,
                dayMaxEvents: true, // allow "more" link when too many events
                events: [
                    
                    <?php
              
					$sql = "SELECT
                    appoint.appoint_id, 
                    appoint.project_id, 
                    project.project_name, 
                    appoint.appoint_date_start, 
                    appoint.appoint_date_end, 
                    appoint.teacher_id, 
                    appoint.appoint_status
                FROM
                    appoint
                    INNER JOIN
                    project
                    ON 
                        appoint.project_id = project.project_id
                WHERE

                appoint.teacher_id = '$teacher_ID' and
                    (appoint.appoint_status = 2 OR
                    appoint.appoint_status = 4 OR
                    appoint.appoint_status = 6 )
                    ";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                    
                    echo"
                    
                    {
                        title: '" . $row["project_name"]. "',
                        start: '" . $row["appoint_date_start"]. "',
                        end: '" . $row["appoint_date_end"]. "',
                        color: 'red',
                    },

                    ";
							 
						}
					}
					$con->close();
					?> 


<?php
              include '../../conn.php';
					$sql = "SELECT
                    appoint.appoint_id, 
                    appoint.project_id, 
                    project.project_name, 
                    appoint.appoint_date_start, 
                    appoint.appoint_date_end, 
                    appoint.teacher_id, 
                    appoint.appoint_status
                FROM
                    appoint
                    INNER JOIN
                    project
                    ON 
                        appoint.project_id = project.project_id
                WHERE

                appoint.teacher_id = '$teacher_ID' and
                   ( appoint.appoint_status = 1 OR
                    
                    appoint.appoint_status = 5 )";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                    
                    echo"
                    
                    {
                        title: '" . $row["project_name"]. "',
                        start: '" . $row["appoint_date_start"]. "',
                        end: '" . $row["appoint_date_end"]. "',
                        color: 'blue',
                    },

                    ";
							 
						}
					}
					$con->close();
					?> 


                ]
            });

            calendar.render();

            // build the locale selector's options
            calendar.getAvailableLocaleCodes().forEach(function (localeCode) {
                var optionEl = document.createElement('option');
                optionEl.value = localeCode;
                optionEl.selected = localeCode == initialLocaleCode;
                optionEl.innerText = localeCode;
                localeSelectorEl.appendChild(optionEl);
            });

            // when the selected option changes, dynamically change the calendar option
            localeSelectorEl.addEventListener('change', function () {
                if (this.value) {
                    calendar.setOption('locale', this.value);
                }
            });

        });
    </script>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
        }

        #top {
            background: #eee;
            border-bottom: 1px solid #ddd;
            padding: 0 10px;
            line-height: 40px;
            font-size: 12px;
        }

        #calendar {
            max-width: 1000px;

            margin: 20px auto;
            padding: 0 5px;
        }
    </style>


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

    <?php include '../menu_stu.php';?>


    <main class="content">

        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                                <li class="breadcrumb-item"><a href="index.php"><span class="fas fa-home"></span></a></li>
                                
                                <li class="breadcrumb-item active" aria-current="page">ตรวจสอบปฏิทินอาจารย์</li>
                                
                            </ol>
                        </nav>
                    </div>
                    <!-- Navbar links -->
                    <?php include '../navbar.php';?>
                </div>
            </div>
        </nav>



        <div class="card border-light shadow-sm mb-4">
            <div class="card-body">
                <!--  <div id='top'>
 


                    Locales:
                    <select id='locale-selector'></select>

                </div> -->

                <div class="row">


                    <div class="col-lg-12 col-sm-12">
<h2>
<?php
                       include '../../conn.php';
                        
					$sqlnameteacher = "SELECT
                    teacher.teacher_id, 
                    teacher.teacher_name as nametecher
                FROM
                    teacher
                WHERE
                    teacher.teacher_id = '$teacher_ID'
    
                    ";
					
                    $result = mysqli_query($con, $sqlnameteacher) or die ("Error in query: $sqlnameteacher " . mysqli_error());
                    $row = mysqli_fetch_array($result);
                    extract($row);
                    echo $nametecher;
                    $con->close();
                    ?>


</h2>
                        <div id='calendar'></div>
สีแดง คือ อาจารย์ยืนยันการนัดพบแล้ว <br /> 
สีน้ำเงิน คือ อยู่ระหว่างการอนุมัติการเข้าพบ
                    </div>


                    

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