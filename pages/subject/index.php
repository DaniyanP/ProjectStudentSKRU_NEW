
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
                                    
                                    <li class="breadcrumb-item active" aria-current="page">ข้อมูลรายวิชา</li>
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
                        <h1 class="h4">ข้อมูลรายวิชาที่สอน</h1>
                        
                    </div>
                    
                </div>
            </div>
    
            <div class="card border-light shadow-sm mb-4" >
                    <div class="card-body">
                    <a  class="btn btn-primary btn-sm mr-2" type="button" href="classroom_add.php">
                        <span class="fas fa-plus mr-2"></span>เพิ่มกลุ่มเรียน</a>


                       
      
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0 rounded">
                                <thead class="thead-light">
                                    <tr>
                                        <!-- <th class="border-0">#</th> -->
                                        <th class="border-0">รหัสวิชา</th>
                                        <th class="border-0">ภาคการเรียน</th>
                                        <th class="border-0">กลุ่มเรียน</th>
                                        <th class="border-0">นักศึกษา</th>
                                        <th class="border-0">โครงงาน</th>
                                        <th class="border-0">ดำเนินการ</th>
                                        <th class="border-0">เสร็จสิ้น</th>
                                        <th class="border-0">ยกเลิก</th>
                                        <th class="border-0">จัดการ</th>
    
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Item -->
                                    <!-- <td><a href="#" class="text-primary font-weight-bold">#</a> </td> -->


                                    <?php
           include '../../conn.php';
           $teacher_id =$_SESSION["TeacherID"];
               
					$sql = "SELECT
                    subject_project.subject_key,
                    subject_project.subject_id2,
                    subject_project.subject_classroom,
                    subject_project.subject_name,
                    subject_project.subject_semester,
                    subject_project.subject_year,
                    subject_project.subject_sec,
                    subject_project.subject_day,
                    subject_project.subject_teacher,
                    subject_project.subject_record,
                    subject_project.subject_day, 
	subject_day.day_name
                    FROM
                    subject_project
                    INNER JOIN	subject_day ON subject_project.subject_day = subject_day.day_id
                    WHERE
                    subject_project.subject_teacher = '$teacher_id'
                    ORDER BY
                    subject_project.subject_record DESC";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            echo '<tr>  
                                        <td >
                                        ' . $row["subject_id2"].'
                                        </td>
                                        <td >
                                        ' . $row["subject_semester"].'/' . $row["subject_year"].'
                                        </td>
                                        <td >
                                        ' . $row["subject_sec"].'
                                        </td>
                                        <td>';
                                        
                                        $row_id = $row["subject_key"];
                                        $query01 = "SELECT
                                        Count(subject_hash_student.ss_id) as student_total,
                                        subject_hash_student.ss_subject_id,
                                        subject_hash_student.ss_student_id
                                        FROM
                                        subject_hash_student
                                        WHERE
                                        subject_hash_student.ss_subject_id = '$row_id'
                                        GROUP BY
                                        
                                        subject_hash_student.ss_subject_id";
                                        $result01 = $con->query($query01);
                                        $count_student = $result01->fetch_assoc();
                                        if($result01->num_rows > 0){
                                            echo $count_student["student_total"];
                                        }else{
                                            echo '0';
                                        }
                                        

                                        echo '</td>
                                        <td>';
                                        
                                        $row_id = $row["subject_key"];
                                        $query02 = "SELECT
                                        subject_hash_project.sp_subject_id, 
                                        subject_hash_project.sp_project_id, 
                                        project.project_status
                                    FROM
                                        subject_hash_project
                                        INNER JOIN
                                        project
                                        ON 
                                            subject_hash_project.sp_project_id = project.project_id
                                        WHERE
                                        subject_hash_project.sp_subject_id = '$row_id' ";
                                        $result02 = $con->query($query02);
                                        $count_project = $result02->fetch_assoc();
                                        if($result02->num_rows > 0){
                                            echo $result02->num_rows;
                                        }else{
                                            echo '0';
                                        }
                                        

                                        echo '</td>
                                        <td>';
                                        
                                        
                                        $row_id = $row["subject_key"];
                                        $query033 = "SELECT
                                        subject_hash_project.sp_subject_id, 
                                        subject_hash_project.sp_project_id, 
                                        project.project_status
                                    FROM
                                        subject_hash_project
                                        INNER JOIN
                                        project
                                        ON 
                                            subject_hash_project.sp_project_id = project.project_id
                                        WHERE
                                        subject_hash_project.sp_subject_id = '$row_id' and project.project_status = 1";
                                        $result033 = $con->query($query033);
                                        $count_project33 = $result033->fetch_assoc();
                                        if($result033->num_rows > 0){
                                            echo $result033->num_rows;
                                        }else{
                                            echo '0';
                                        }

                                        echo '</td>
                                        <td>';
                                        
                                        
                                        $row_id = $row["subject_key"];
                                        $query033 = "SELECT
                                        subject_hash_project.sp_subject_id, 
                                        subject_hash_project.sp_project_id, 
                                        project.project_status
                                    FROM
                                        subject_hash_project
                                        INNER JOIN
                                        project
                                        ON 
                                            subject_hash_project.sp_project_id = project.project_id
                                        WHERE
                                        subject_hash_project.sp_subject_id = '$row_id' and project.project_status = 2";
                                        $result033 = $con->query($query033);
                                        $count_project33 = $result033->fetch_assoc();
                                        if($result033->num_rows > 0){
                                            echo $result033->num_rows;
                                        }else{
                                            echo '0';
                                        }

                                        echo '</td>
                                        <td>';
                                        
                                        
                                        $row_id = $row["subject_key"];
                                        $query033 = "SELECT
                                        subject_hash_project.sp_subject_id, 
                                        subject_hash_project.sp_project_id, 
                                        project.project_status
                                    FROM
                                        subject_hash_project
                                        INNER JOIN
                                        project
                                        ON 
                                            subject_hash_project.sp_project_id = project.project_id
                                        WHERE
                                        subject_hash_project.sp_subject_id = '$row_id' and project.project_status = 3";
                                        $result033 = $con->query($query033);
                                        $count_project33 = $result033->fetch_assoc();
                                        if($result033->num_rows > 0){
                                            echo $result033->num_rows;
                                        }else{
                                            echo '0';
                                        }

                                        echo '</td>
                                        
                                        <td>
                                        <div class="btn-group">
                                            <button
                                                class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="icon icon-sm">
                                                    <span class="fas fa-ellipsis-h icon-dark"></span>
                                                </span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>

                                         

                                            <div class="dropdown-menu">
                                            <a class="dropdown-item" href="student.php?act=show&ID='. $row["subject_key"].'"><span
                                            class="fas fa-eye mr-2"></span>รายชื่อนักศึกษา</a>
                                            <a class="dropdown-item" href="project.php?act=show&ID='. $row["subject_key"].'"><span
                                                        class="fas fa-eye mr-2"></span>โครงงาน</a>
                                                       

                                                       
                                                                                                            

                                                        


                                                <a class="dropdown-item" href="classroom_edit.php?act=edit&ID=' . $row["subject_key"].'"><span
                                                        class="fas fa-edit mr-2"></span>แก้ไข</a>'; ?>
                                                <a class="dropdown-item text-danger" href="index.php?ClassRoomDEL=req&ID=<?php echo $row["subject_key"]; ?>"><span
                                                        class="fas fa-trash-alt mr-2"></span>ลบ</a>
                                       <?php     echo'</div>                                       
                                        </div>                                 
                                    </td>
                                    </tr>';       
                                }
                                }
                                $con->close();
                                ?> 



                                    <!-- End of Item -->
    <tr><td class="border-0"></td></tr>
    <tr><td class="border-0"></td></tr>
    <tr><td class="border-0"></td></tr>
    <tr><td class="border-0"></td></tr>
    <tr><td class="border-0"></td></tr>
                                   
                            
        
                                 
    
                                    
    
                                   
                                </tbody>
                            </table>
    
                            
    
                        </div>
                        
                    </div>
                </div>
            
                <?php
include '../../conn.php';
if (isset($_GET["ClassRoomDEL"] )) {
        echo
            "<script> 
                Swal.fire({
                    icon: 'warning',
                    title: 'ลบกลุ่มเรียนนี้ออกหรือไม่?',
                    text: 'หากลบแล้วไม่สามารถเรียกคืนได้!',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'ใช่',
                    cancelButtonText: 'ไม่!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        location = 'index.php?ClassRoomDELID=req&ID={$_GET["ID"]}'
                    }else{
                        location = 'index.php'
                    }
                }); 
        </script>";
}


if (isset($_GET["ClassRoomDELID"])) {
   

    
    $subject_id = $_GET["ID"];

    $sql2 = "DELETE FROM subject_hash_project  WHERE sp_subject_id='$subject_id' ";
    $result2 = mysqli_query($con, $sql2);
    
    $sql3 = "DELETE FROM subject_hash_student  WHERE ss_subject_id='$subject_id' ";
    $result3 = mysqli_query($con, $sql3);
    
      
      $sql111 = "DELETE FROM subject_project  WHERE subject_key='$subject_id' ";

    
        

    if (mysqli_query($con,$sql111 )) {
        echo
            "<script> 
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'ลบข้อมูลกลุ่มเรียนเรียบร้อย!',
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
                title: 'ลบข้อมูลกลุ่มเรียนไม่สำเร็จ', 
            }).then(()=> location = 'index.php')
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