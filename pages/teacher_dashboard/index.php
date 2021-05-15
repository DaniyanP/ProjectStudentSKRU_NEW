<?php session_start();?>
<?php 

if (!$_SESSION["TeacherID"]){  

	  Header("Location: ../../login_te.php"); 

}else{?>
<?php $TeacherID = $_SESSION["TeacherID"] ?>
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
                            <!-- <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                                <li class="breadcrumb-item"><a href="../student_index"><span
                                            class="fas fa-home"></span></a></li>
                                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Bootstrap tables</li>
                            </ol> -->
                        </nav>
                    </div>
                    <!-- Navbar links -->
                    <?php include '../navbar_te.php';?>
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
	COUNT(project_has_adviser.pha_key) as countPJJ, 
	project_has_adviser.pha_project_id, 
	project.project_status, 
	project_has_adviser.pha_teacher_id
FROM
	project_has_adviser
	INNER JOIN
	project
	ON 
		project_has_adviser.pha_project_id = project.project_id
WHERE
	project_has_adviser.pha_teacher_id = '$TeacherID'
    
                    ";
					
                    $result = mysqli_query($con, $sqlcountPJ) or die ("Error in query: $sqlcountPJ " . mysqli_error());
                    $row = mysqli_fetch_array($result);
                    extract($row);
                    echo $countPJJ;
                    ?></h3>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-7 px-xl-0">
                                    <div class="d-none d-sm-block">
                                        <h2 class="h5">โครงงาน</h2>
                                        <h3 class="mb-1">
                                        <?php
echo $countPJJ;
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
                                    <div class="icon icon-shape icon-md icon-shape-warning rounded mr-4 mr-sm-0"><span class="far fa-hourglass"></span></div>
                                    <div class="d-sm-none">
                                        <h2 class="h5">กำลังดำเนินการ</h2>
                                        <h3 class="mb-1"> <?php
                       include '../../conn.php';
                        
					$sqlcountPJ = "SELECT
	COUNT(project_has_adviser.pha_key) as countPJJ, 
	project_has_adviser.pha_project_id, 
	project.project_status, 
	project_has_adviser.pha_teacher_id
FROM
	project_has_adviser
	INNER JOIN
	project
	ON 
		project_has_adviser.pha_project_id = project.project_id
WHERE
	project_has_adviser.pha_teacher_id = '$TeacherID' and  project.project_status =1
    
                    ";
					
                    $result = mysqli_query($con, $sqlcountPJ) or die ("Error in query: $sqlcountPJ " . mysqli_error());
                    $row = mysqli_fetch_array($result);
                    extract($row);
                    echo $countPJJ;
                    ?></h3>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-7 px-xl-0">
                                    <div class="d-none d-sm-block">
                                        <h2 class="h5">ดำเนินการ</h2>
                                        <h3 class="mb-1"><?php
echo $countPJJ;
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
                        <h2 class="h5">ยกเลิก</h2>
                        <h3 class="mb-1"> <?php
                       include '../../conn.php';
                        
					$sqlcountPJ = "SELECT
	COUNT(project_has_adviser.pha_key) as countPJJ, 
	project_has_adviser.pha_project_id, 
	project.project_status, 
	project_has_adviser.pha_teacher_id
FROM
	project_has_adviser
	INNER JOIN
	project
	ON 
		project_has_adviser.pha_project_id = project.project_id
WHERE
	project_has_adviser.pha_teacher_id = '$TeacherID' and  project.project_status =3
    
                    ";
					
                    $result = mysqli_query($con, $sqlcountPJ) or die ("Error in query: $sqlcountPJ " . mysqli_error());
                    $row = mysqli_fetch_array($result);
                    extract($row);
                    echo $countPJJ;
                    ?></h3>
                    </div>
                </div>
                <div class="col-12 col-xl-7 px-xl-0">
                    <div class="d-none d-sm-block">
                        <h2 class="h5">ยกเลิก</h2>
                        <h3 class="mb-1"><?php
echo $countPJJ;
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
                                        <h2 class="h5">เสร็จสิ้น</h2>
                                        <h3 class="mb-1"><?php
                       include '../../conn.php';
                        
					$sqlcountPJ = "SELECT
	COUNT(project_has_adviser.pha_key) as countPJJ, 
	project_has_adviser.pha_project_id, 
	project.project_status, 
	project_has_adviser.pha_teacher_id
FROM
	project_has_adviser
	INNER JOIN
	project
	ON 
		project_has_adviser.pha_project_id = project.project_id
WHERE
	project_has_adviser.pha_teacher_id = '$TeacherID' and  project.project_status =2
    
                    ";
					
                    $result = mysqli_query($con, $sqlcountPJ) or die ("Error in query: $sqlcountPJ " . mysqli_error());
                    $row = mysqli_fetch_array($result);
                    extract($row);
                    echo $countPJJ;
                    ?></h3>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-7 px-xl-0">
                                    <div class="d-none d-sm-block">
                                        <h2 class="h5">เสร็จสิ้น</h2>
                                        <h3 class="mb-1"><?php
echo $countPJJ;
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

<p></p>
        <div class="row">

<!-- กล่อง datatable โครงงานที่รับผิดชอบ -->
            <div class="col-12 col-xl-12">
                <div class="card border-light shadow-sm mb-4">
                    <div class="card-body">




                      <div class="table-responsive">
                      <table id="example" class="table table-striped table-bordered" width="100%" data-order="[[ 0, &quot;desc&quot; ]]" id="tableId">
                    <col style="width:5%">
                    <col style="width:80%">
                    <col style="width:5%">
                    <col style="width:5%">
                    <col style="width:5%">
                  

                    <thead>
                        <tr>
                            <th>รหัสโครงงาน</th>
                            <th>ชื่อโครงาน</th>
                            <th>ประเภท</th>
                            <th>สถานะ</th>
                            <th>เพิ่มเติม</th>




                        </tr>
                    </thead>
                    <tbody>

                        <?php
                       include '../../conn.php';
                        
					$sql = "SELECT
                    project_has_adviser.pha_key, 
                    project_has_adviser.pha_project_id, 
                    project.project_name, 
                    project_type.project_type_name, 
                    project.project_status, 
                    project_status.project_status_name, 
                    project_has_adviser.pha_teacher_id
                FROM
                    project_has_adviser
                    INNER JOIN
                    project
                    ON 
                        project_has_adviser.pha_project_id = project.project_id
                    INNER JOIN
                    project_type
                    ON 
                        project.project_type = project_type.project_type_id
                    INNER JOIN
                    project_status
                    ON 
                        project.project_status = project_status.project_status_id
                WHERE
                    project_has_adviser.pha_teacher_id = '$TeacherID'
                ORDER BY
                    project_has_adviser.pha_key DESC
                    ";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                         
                            echo '<tr>
                                <td>'. $row["pha_project_id"].'</td>
                                <td>'. mb_substr($row["project_name"],0,80,'UTF-8').'</td>
                                
                                <td>'. $row["project_type_name"].'</td>
                                <td>'. $row["project_status_name"].'</td>
                                <td>
                                
                                       
                                <a href="../project_teacher/project_adviser.php?act=show&ID='. $row["pha_project_id"].'"
                                class="btn btn-link text-dark ">
                                <span class="icon icon-sm">
                                    <span class="fas fa-eye icon-dark"></span>
                                </span>
                                <span class="sr-only">Toggle Dropdown</span>
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
            </div>

<!-- ปิดกล่อง datatable โครงงานที่รับผิดชอบ -->

            
            
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
    <!-- Datatable JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>


</body>

</html>
<?php }?>