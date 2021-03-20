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
<?php session_start();?>
<?php 

if (!$_SESSION["UserID"]){  

	  Header("Location: ../../login.php"); 

}else{?>
<?php include '../../conn.php';?>
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

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
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
                                <li class="breadcrumb-item"><a href="../student_index"><span class="fas fa-home"></span></a></li>
                                
                                <li class="breadcrumb-item active" aria-current="page">ข้อมูลโครงงาน</li>
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
                    <h1 class="h4">ข้อมูลโครงงาน</h1>
                    <p class="mb-0">รายละเอียดข้อมูลโครงงาน
                    </p>
                </div>
                
            </div>
        </div>

        <div class="card border-light shadow-sm mb-4">
            <div class="card-body">
            <?php
           
           $id_ptojrct =$_SESSION["ProjectID"];
               
					$sql = "SELECT
                    project.project_id,
                    project.project_name,
                    project_type.project_type_name,
                    project_status.project_status_name
                    FROM
                    project
                    INNER JOIN project_type ON project.project_type = project_type.project_type_id
                    INNER JOIN project_status ON project.project_status = project_status.project_status_id
                    WHERE
                    project.project_id = '$id_ptojrct'";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            echo '<p>รหัสโครงงาน : ' . $row["project_id"].'</p>
                <p>ชื่อโครงงาน : ' . $row["project_name"].'</p>
                <p>ประเภทโครงงาน : ' . $row["project_type_name"].'</p>
                <p>สถานะ : ' . $row["project_status_name"].'</p>';       
            }
            }
            $con->close();
            ?> 
            <p>ผู้จัดทำโครงงาน : </p> 
            <?php
           include '../../conn.php';
           $id_ptojrct =$_SESSION["ProjectID"];
               
					$sql = "SELECT
                    project_has_student.*, 
                    project_has_student.phs_student_id, 
                    student.*
                FROM
                    project_has_student
                    INNER JOIN
                    student
                    ON 
                        project_has_student.phs_student_id = student.student_id
                    WHERE
                    project_has_student.phs_project_id ='$id_ptojrct'";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            echo '<ul>' . $row["student_id"].' ' . $row["student_name"].'</ul>';       
            }
            }
            $con->close();
            ?> 

             
<p>อาจารย์ที่ปรึกษาโครงงาน</p>

<?php
           include '../../conn.php';
           $id_ptojrct =$_SESSION["ProjectID"];
               
					$sql = "SELECT
	project_has_adviser.pha_project_id, 
	project_has_adviser.pha_teacher_id, 
	teacher.teacher_name, 
	project_has_adviser.pha_type
FROM
	project_has_adviser
	INNER JOIN
	teacher
	ON 
		project_has_adviser.pha_teacher_id = teacher.teacher_id
WHERE
	project_has_adviser.pha_project_id = '$id_ptojrct'
ORDER BY
	project_has_adviser.pha_type ASC";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            echo '<ul>' . $row["teacher_name"].'   ';
                            
                            if ($row["pha_type"]==1) {
                               echo "( อาจารย์ที่ปรึกษาหลัก )";
                            }
                            if ($row["pha_type"]==2) {
                                echo "( อาจารย์ที่ปรึกษาร่วม )";
                             }
                           echo' </ul>';       
                        }
                        }else{
                            echo "<ul>ไม่มีรายชื่ออาจารย์ที่ปรึกษาโครงงาน</ul>";
                        }
                        $con->close();
                        ?> 







                <p>ไฟล์เอกสารที่เกี่ยวข้อง : </p>
                <div class="btn-group mr-2 mb-2">
<a class="btn btn-warning" type="button" href="file_add.php"><span class="fas fa-plus mr-2"> เพิ่มเอกสาร</a>
</div>
                <?php
           include '../../conn.php';
           $id_ptojrct =$_SESSION["ProjectID"];
               
					$sql = "SELECT
                    filee.file_id,
                    filee.project_id,
                    file_type.file_type_name,
                    filee.file_link,
                    file_type.file_type_icon,
                    filee.file_apporve
                    FROM
                    filee
                    INNER JOIN file_type ON filee.file_type = file_type.file_type_id
                    WHERE
                    filee.project_id = '$id_ptojrct'
                    ORDER BY
                    filee.file_apporve DESC ";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {

if ($row["file_apporve"]==1) {
    echo '<div class="btn-group mr-2 mb-2"> 
    <a href="' . $row["file_link"].'" type="button" class="btn btn-danger"><span class="' . $row["file_type_icon"].' mr-2"></span> ' . $row["file_type_name"].'</a>
    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="fas fa-angle-down dropdown-arrow"></span>
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="file_edit.php?act=edit&ID=' . $row["file_id"].'"><span class="fas fa-edit mr-2"></span>แก้ไขไฟล์</a>
        <a class="dropdown-item text-danger" href="index.php?deleteFile=req&ID=' . $row["file_id"].'"><span class="fas fa-trash-alt mr-2"></span>ลบ</a>
       
    </div>
</div>'; 
} else {
    echo '<div class="btn-group mr-2 mb-2"> 
    <a href="' . $row["file_link"].'" type="button" class="btn btn-primary"><span class="' . $row["file_type_icon"].' mr-2"></span> ' . $row["file_type_name"].'</a>
    
   
</div>'; 
}

                             
                        
                        



                        }
                        }
                        $con->close();
                        ?> 

                
           
                </div>
        </div>
        

<?php
if (isset($_GET["deleteFile"] )) {
    echo
        "<script> 
            Swal.fire({
                icon: 'warning',
                title: 'ยืนยันการลบไฟล์ที่เกี่ยวข้อง?',
                text: 'ท่านเเน่ใจว่ายืนยันการลบไฟล์!',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ใช่',
                cancelButtonText: 'ไม่!'
            }).then((result) => {
                if (result.isConfirmed) {
                    location = 'index.php?deleteR2=req&ID={$_GET["ID"]}'
                }else{
                    location = 'index.php'
                }
            }); 
    </script>";
}


if (isset($_GET["deleteR2"])) {
//นำเข้าไฟล์ การเชื่อมต่อฐานข้อมูล
include '../../conn.php';

$sql2881 = "DELETE FROM filee  WHERE file_id ={$_GET["ID"]}";

if (mysqli_query($con, $sql2881)) {
    echo
        "<script> 
            Swal.fire(
                'ลบไฟล์สำเร็จ!',
                'ท่านได้ลบไฟล์เอกสารที่เกี่ยวข้องเรียบร้อย',
                'success'
            ).then(()=> location = 'index.php')
        </script>";
    //header('Location: index.php');
} else {
    echo
        "<script> 
        Swal.fire({
            icon: 'error',
            title: 'ลบไฟล์เอกสารที่เกี่ยวข้องไม่สำเร็จ', 
        }).then(()=> location = 'index.php')
    </script>";
}

mysqli_close($con);
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
<?php }?>