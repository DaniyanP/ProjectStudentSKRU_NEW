<?php session_start();?>

<?php 

if ($_SESSION["Teacherlevel"]=="2"){?>

<?php include '../../conn.php';
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
    <?php include '../dateth.php';?>
    <script type="text/javascript">
        function delete_student(student_id) {
            if (confirm('ต้องการลบนักศึกษาออกจากโครงงานนี้ใช่ไหม')) {
                window.location.href = 'project_student_del.php?&ID=' + student_id;
            }
        }
    </script>

<script type="text/javascript">
        function delete_adviser(adviser_id) {
            if (confirm('ต้องการลบอาจารย์ออกจากที่ปรึกษาโครงงานนี้ใช่ไหม')) {
                window.location.href = 'project_adviser_del.php?&ID=' + adviser_id;
            }
        }
    </script>
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
                                <li class="breadcrumb-item"><a href="../subject">ข้อมูลรายวิชา</a></li>
                                <li class="breadcrumb-item"><a href="#">ข้อมูลโครงงาน</a></li>
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
                    <h1 class="h4">แก้ไขข้อมูลโครงงาน</h1>

                </div>

            </div>
        </div>

        <div class="card border-light shadow-sm mb-4">
            <div class="card-body">
            
                <form action="" method="post">

                <?php

$project_idd = $_REQUEST["ID"];

$class_idd = $_REQUEST["IDR"];


$sql = "SELECT
project.project_id,
project.project_name,
project.project_type,
project.project_status
FROM
project

WHERE
project.project_id = '$project_idd'";
$result = mysqli_query($con, $sql);
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

                       

                       

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="project_status">สถานะโครงงาน</label>
                                <?php 
                                    $query13 = "SELECT
                                    project_status.project_status_id as p_id3,
                                    project_status.project_status_name as  p_name3
                                    FROM
                                    project_status
                                    ORDER BY
                                    project_status.project_status_id ASC";
                                    $result13 = mysqli_query($con, $query13);

                                    ?>

                                    <select class="form-select" id="project_status" name="project_status" aria-label="Default select example">
                                                 <option selected>เลือกสถานะโครงงาน</option>
                                                 
                                                 <?php foreach($result13 as $results3){
                                            if( $results3["p_id3"] == $project_status ){
                                               echo' <option value="'.$results3["p_id3"].'" selected="true">'.$results3["p_name3"].'</option>';
                                            }else{
                                                echo' <option value="'.$results3["p_id3"].'" >'.$results3["p_name3"].'</option>';
                                            }
                                        }
                                        ?>
                    </select>
                            </div>
                        </div>

                        
                       


                    </div>

                   
                    <div class="mt-3">
            <button type="submit" class="btn btn-primary" name="ProjectEditInfo">บันทึก</button>
            <a type="button" class="btn btn-info" href="project.php?act=show&ID=<?php echo $class_idd ?>">กลับ</a>
        </div>




            </div>
        </div>


        </div>







        
        </form>

        </div>
        </div>


        <div class="row">

<!-- ส่วนล่าง -->
<div class="col-12 col-xl-6">
    <div class="card border-light shadow-sm mb-4">
        <div class="card-body">
            
            <b>อาจารย์ที่ปรึกษาโครงงาน</b>   
            <div class="table-responsive">
            <table class="table">
  <thead class="table-dark">
    <tr>
    <td>ชื่ออาจารย์</td>
    <td>สถานะ</td>
    <td>จัดการ</td>
    </tr>
  </thead>
  <tbody>

  <?php
           include '../../conn.php';
           
               
					$sql_project_has_adviser = "SELECT
                    project_has_adviser.pha_key, 
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
                    project_has_adviser.pha_project_id = '$project_idd'
                ORDER BY
                    project_has_adviser.pha_type ASC, 
                    project_has_adviser.pha_teacher_id ASC";
					$result = $con->query($sql_project_has_adviser );
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            echo '<tr>
    <td>' . $row["teacher_name"].'</td>
    <td>';

    if ($row["pha_type"] == 1 ) {
        echo "ที่ปรึกษาหลัก";
    }if ($row["pha_type"] == 2 ) {
        echo "ที่ปรึกษาร่วม";
    }
    echo'</td>
    <td><a type="button" data-toggle="modal" data-target="#myModal'. $row["pha_key"].'" class="btn btn-warning btn-sm">
    <span class="icon icon-sm"><span class="fas fa-edit icon-dark"></span>
    </span></a>
    <a type="button" href="project_edit.php?DelAdivserProject=req&ID=' . $row["pha_key"].'&Project_id=' . $project_idd.'&IDRoom=' . $class_idd.'" class="btn btn-danger btn-sm">
    <span class="icon icon-sm"><span class="fas fa-trash-alt icon-dark"></span>
    </span></a></td>
    </tr>';     

    echo'<div class="modal fade" id="myModal'. $row["pha_key"].'" role="dialog">
<div class="modal-dialog">
  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">';
    
    $id = $row["pha_key"]; 
    $query_edit = mysqli_query($con, "SELECT
	project_has_adviser.pha_key, 
	project_has_adviser.pha_project_id, 
	project_has_adviser.pha_teacher_id, 
	project_has_adviser.pha_type, 
	teacher.teacher_name
FROM
	project_has_adviser
	INNER JOIN
	teacher
	ON 
		project_has_adviser.pha_teacher_id = teacher.teacher_id
WHERE
	project_has_adviser.pha_key = '$id'");
    while ($row = mysqli_fetch_array($query_edit)) { 
        
      
   
      echo'<h4 class="modal-title">แก้ไขอาจารย์ที่ปรึกษาโครงงาน '. $row["pha_key"].'</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">

    
      <form role="form" action="" method="post">

      <input type="text" class="form-control" id="pha_key" name="pha_key"
      aria-describedby="date_end-describ" value="'. $row["pha_key"].'" hidden>
      <input type="text" class="form-control" id="pha_project_id" name="pha_project_id"
      aria-describedby="date_end-describ" value="'. $row["pha_project_id"].'" hidden>
      
      <input type="text" class="form-control" id="class_idd" name="class_idd"
      aria-describedby="date_end-describ" value="'. $class_idd.'" hidden>
      <div class="mb-2">
          <label for="pha_teacher_id">ชื่ออาจารย์</label>';
          
          
                                    
                                    $id_teacher_adviser = $row["pha_teacher_id"];
                                    $query_adviser = "SELECT
                                    teacher.teacher_id as t_id, 
                                    teacher.teacher_name as t_name
                                FROM
                                    teacher
                                ORDER BY
                                    teacher.teacher_id ASC";
                                $result_adviser = mysqli_query($con, $query_adviser);
                                    
                                    
                       echo' <select class="form-select" id="pha_teacher_id" name="pha_teacher_id" aria-label="Default select example">
                        <option selected>เลือกอาจารย์ที่ปรึกษาโครงงาน</option>';
                                                 
                                                 foreach( $result_adviser as $results33){
                                            if( $results33["t_id"] == $id_teacher_adviser ){
                                               echo' <option value="'.$results33["t_id"].'" selected="true">'.$results33["t_name"].'</option>';
                                            }else{
                                                echo' <option value="'.$results33["t_id"].'" >'.$results33["t_name"].'</option>';
                                            }
                                        }
                                        
                                        echo'</select>
          
     </div>
      <div class="mb-2">
          <label for="pha_type">สถานะอาจารย์ที่ปรึกษา</label>
          <select class="form-select" id="pha_type" name="pha_type" aria-label="Default select example">
                      ';
                        
                        
                if ($row["pha_type"] == 1) {
                    echo'<option value="1" selected="true">อาจารย์ที่ปรึกษาหลัก</option>
                    <option value="2" >อาจารย์ที่ปรึกษาร่วม</option>';
                }if ($row["pha_type"] == 2) {
                    echo'<option value="2" selected="true">อาจารย์ที่ปรึกษาร่วม</option>
                    <option value="1" >อาจารย์ที่ปรึกษาหลัก</option>';
                }



             echo'</select>
                        
             </div>';
    }
   
      echo'<div class="modal-footer">  
      <button type="submit" class="btn btn-success" name="ProjectEditAdivser">ยืนยัน</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
    </div>';
 

        echo'</form>
    </div>
  </div>
</div>
</div>';  
}
}if ($result->num_rows == 0){
    echo "ไม่พบรายชื่ออาจารย์ที่ปรึกษาโครงงาน";
}
$con->close();
?> 
    
    
    


  </tbody>
</table>
</div>
        </div>
    </div>
</div>



<div class="col-12 col-xl-6">
    <div class="card border-light shadow-sm mb-4">
        <div class="card-body">
          <b>ผู้จัดทำโครงงาน</b>   
            <div class="table-responsive">
            <table class="table">
  <thead class="table-dark">
    <tr>
    <td>รหัสนักศึกษา</td>
    <td>ชื่อ  นามสกุล </td>
    <td>จัดการ</td>
    </tr>
  </thead>
  <tbody>

  <?php
           include '../../conn.php';
           
               
					$sql_project_has_student = "SELECT
                    project_has_student.phs_key, 
                    project_has_student.phs_project_id, 
                    project_has_student.phs_student_id, 
                    student.student_name
                FROM
                    project_has_student
                    INNER JOIN
                    student
                    ON 
                        project_has_student.phs_student_id = student.student_id
                WHERE
                    project_has_student.phs_project_id   = '$project_idd'
                ORDER BY
                    project_has_student.phs_project_id ASC";
					$result = $con->query($sql_project_has_student );
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            echo '<tr>
    <td>' . $row["phs_student_id"].'</td>
    <td>' . $row["student_name"].'</td>
    <td><a type="button" href="project_edit.php?DelStudentProject=req&ID=' . $row["phs_key"].'&Project_id=' . $project_idd.'&IDRoom=' . $class_idd.'" class="btn btn-danger btn-sm">
    <span class="icon icon-sm"><span class="fas fa-trash-alt icon-dark"></span>
    </span></a></td>                             
    </tr>';       
}
}if ($result->num_rows == 0){  
    echo "ไม่พบรายชื่อนักศึกษาจัดทำโครงงานนี้";
}
$con->close();
?> 
    
  </tbody>
</table>
</div>
        </div>
    </div>
</div>

</div>








<?php
 include '../../conn.php';


            if (isset($_POST["ProjectEditInfo"])) {
   

   
$project_id  = $_POST['project_id'];
$project_name  = $_POST['project_name'];
$project_type  = $_POST['project_type'];

$project_status  = $_POST['project_status'];





  $sqleditproject ="UPDATE project SET

project_name ='$project_name',
project_type ='$project_type',
project_status = '$project_status'
    
    
    
    
          WHERE project.project_id='$project_id'";

    if (mysqli_query($con, $sqleditproject)) {
        echo
            "<script> 
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'แก้ไขข้อมูลโครงงานเรียบร้อยแล้ว!',
                    showConfirmButton: false,
                    timer: 2000
                }).then(()=> location = 'project_edit.php?act=show&ID=$project_id&IDR=$class_idd')
            </script>";
        //header('Location: index.php');
    } else {
        echo
            "<script> 
            Swal.fire({
                icon: 'error',
                title: 'แก้ไขข้อมูลโครงงานไม่สำเร็จ', 
            }).then(() => {window.history.back()});
        </script>";
    }
  
   
}




if (isset($_POST["ProjectEditAdivser"])) {
   
    $pha_key  = $_POST['pha_key'];
    $pha_project_id  = $_POST['pha_project_id'];
    $pha_teacher_id  = $_POST['pha_teacher_id'];
    $pha_type  = $_POST['pha_type'];
    $class_idd  = $_POST['class_idd'];
    
    
    
    
    $check = "select * from project_has_adviser  where pha_project_id = '$pha_project_id' and pha_teacher_id = '$pha_teacher_id' ";
          $result1 = mysqli_query($con, $check)  or die(mysql_error());
            
            if($result1->num_rows > 0){
    
    
    
    
    $check2 = "select * from project_has_adviser  where pha_project_id = '$pha_project_id' and pha_teacher_id = '$pha_teacher_id' and pha_type = '$pha_type' ";
          $result2 = mysqli_query($con, $check2)  or die(mysql_error());
          if($result2->num_rows > 0){
              echo
            "<script> 
            Swal.fire({
                icon: 'error',
                title: 'ไม่สามารถเปลี่ยนแปลงได้ เนื่องจากอาจารย์มีสถานะการเป็นที่ปรึกษาโครงงานนี้อยู่แล้ว', 
            }).then(()=> location = 'project_edit.php?act=show&ID=$project_id&IDR=$class_idd')
        </script>";
          }else{
    
            $sqledit ="UPDATE project_has_adviser SET
            pha_type ='$pha_type'
            WHERE project_has_adviser.pha_key = '$pha_key'";
            
            if(mysqli_query($con, $sqledit)){
                echo
                "<script> 
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'แก้ไขข้อมูลสถานะอาจารย์ที่ปรึกษาเรียบร้อย!',
                        showConfirmButton: false,
                        timer: 2000
                    }).then(()=> location = 'project_edit.php?act=show&ID=$project_id&IDR=$class_idd')
                </script>";
    
            } else {  echo
                "<script> 
                Swal.fire({
                    icon: 'error',
                    title: 'แก้ไขสถานะอาจารย์ที่ปรึกษาไม่สำเร็จ', 
                }).then(() => {window.history.back()});
            </script>";
            }
        }
    
    }else{
        $sqledit2 ="UPDATE project_has_adviser SET
            pha_teacher_id ='$pha_teacher_id',
            pha_type ='$pha_type'
            WHERE project_has_adviser.pha_key = '$pha_key'";
            
            if(mysqli_query($con, $sqledit2)){
                echo
                "<script> 
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'แก้ไขข้อมูลสถานะอาจารย์ที่ปรึกษาเรียบร้อย!',
                        showConfirmButton: false,
                        timer: 2000
                    }).then(()=> location = 'project_edit.php?act=show&ID=$project_id&IDR=$class_idd')
                </script>";
    
            } else {  echo
                "<script> 
                Swal.fire({
                    icon: 'error',
                    title: 'แก้ไขสถานะอาจารย์ที่ปรึกษาไม่สำเร็จ', 
                }).then(() => {window.history.back()});
            </script>";
            }
    } 
       
    }


    if (isset($_GET["DelAdivserProject"] )) {


        echo
            "<script> 
                Swal.fire({
                    icon: 'warning',
                    title: 'ลบอาจารย์ที่ปรึกษาโครงงานออกจากโครงงานนี้?',
                    text: 'ท่านเเน่ใจว่าต้องการลบ!',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'ใช่',
                    cancelButtonText: 'ไม่!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        
                        location = 'project_edit.php?deleteR2=req&ID={$_GET["ID"]}&IDR11={$_GET["IDRoom"]}&IDPro={$_GET["Project_id"]}'
                    }else{
                        
                        location = 'project_edit.php?act=show&ID={$_GET["Project_id"]}&IDR={$_GET["IDRoom"]}'
                    }
                }); 
        </script>";

    }


if (isset($_GET["deleteR2"])) {
   

  
    $sql288 = "DELETE FROM project_has_adviser  WHERE pha_key={$_GET["ID"]} ";

    if (mysqli_query($con, $sql288)) {
        echo
            "<script> 
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'ลบอาจารย์ที่ปรึกษาเรียบร้อยแล้ว!',
                    showConfirmButton: false,
                    timer: 2000  
                }).then(()=> location = 'project_edit.php?act=show&ID={$_GET["IDPro"]}&IDR={$_GET["IDR11"]}')
            </script>";
        //header('Location: index.php');
    } else {
        echo
            "<script> 
            Swal.fire({
                icon: 'error',
                title: 'ลบอาจารย์ที่ปรึกษาไม่สำเร็จ', 
            }).then(() => {window.history.back()});
        </script>";
    }
  
   
}



if (isset($_GET["DelStudentProject"] )) {


    echo
        "<script> 
            Swal.fire({
                icon: 'warning',
                title: 'ลบนักศึกษาออกจากโครงงานนี้?',
                text: 'ท่านเเน่ใจว่าต้องการลบ!',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ใช่',
                cancelButtonText: 'ไม่!'
            }).then((result) => {
                if (result.isConfirmed) {
                    
                    location = 'project_edit.php?deleteR3=req&ID={$_GET["ID"]}&IDR11={$_GET["IDRoom"]}&IDPro={$_GET["Project_id"]}'
                }else{
                    
                    location = 'project_edit.php?act=show&ID={$_GET["Project_id"]}&IDR={$_GET["IDRoom"]}'
                }
            }); 
    </script>";

}


if (isset($_GET["deleteR3"])) {



$sql289 = "DELETE FROM project_has_student  WHERE phs_key={$_GET["ID"]} ";

if (mysqli_query($con, $sql289)) {
    echo
        "<script> 
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'ลบนักศึกษาเรียบร้อยแล้ว!',
                showConfirmButton: false,
                timer: 2000  
            }).then(()=> location = 'project_edit.php?act=show&ID={$_GET["IDPro"]}&IDR={$_GET["IDR11"]}')
        </script>";
    //header('Location: index.php');
} else {
    echo
        "<script> 
        Swal.fire({
            icon: 'error',
            title: 'ลบนักศึกษาไม่สำเร็จ', 
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