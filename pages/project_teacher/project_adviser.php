<?php session_start();?>
<?php 

if (!$_SESSION["TeacherID"]){  

	  Header("Location: ../../login_te.php"); 

}else{?>
<?php include '../../conn.php';

$id_project = $_REQUEST["ID"];?>
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
    </script>


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
                                <li class="breadcrumb-item"><a href="../student_index"><span
                                            class="fas fa-home"></span></a></li>
                                <li class="breadcrumb-item"><a href="../project_teacher">ข้อมูลโครงงานที่ดูแล</a></li>
                                <li class="breadcrumb-item active" aria-current="page">รายละเอียดโครงงาน</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Navbar links -->
                    <?php include '../navbar_te.php';?>
                </div>
            </div>
        </nav>

        <!-- <div class="py-0">

            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">หัวข้อ</h1>

                </div>

            </div>
        </div> -->

        <div class="row">

            <div class="col-12 col-xl-8">
                <div class="card border-light shadow-sm mb-4 lg-8">
                    <div class="card-body">

                    <?php
           
               
					$sql = "SELECT
                    project.project_id,
                    project.project_name,
                    project.project_type,
                    project_type.project_type_name
                    FROM
                    project
                    INNER JOIN project_type ON project.project_type = project_type.project_type_id
                    WHERE
                    project.project_id = '$id_project'";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            echo '<p><b>รหัสโครงงาน :</b> '. $row["project_id"].'</p>
                        <p><b>ชื่อโครงงาน :</b> '. $row["project_name"].'</p>
                        <p><b>ประเภทโครงงาน :</b> '. $row["project_type_name"].'</p>';       
                    }
                    }
                    $con->close();
                    ?> 
                        <p><b>ผู้จัดทำ :</b>  <ul><?php
           include '../../conn.php';
           $id_ptojrct = $_REQUEST["ID"];
               
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
                            $namestudent = $row["student_title"].$row["student_name"]."&nbsp;&nbsp;".$row["student_lastname"];
                            echo '' . $row["student_id"].' ' . $namestudent.',  ';       
            }
            }
            $con->close();
            ?> </ul> </p>
                        <p><b>อาจารย์ที่ปรึกษาโครงงาน :</b>
                        <ul>
                        <?php
           include '../../conn.php';
          
               
					$sql = "SELECT
	project_has_adviser.pha_project_id, 
	project_has_adviser.pha_teacher_id, 
	teacher.teacher_name, 
	project_has_adviser.pha_type,
                    teacher.teacher_title,
                    teacher.teacher_lastname
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
                            $teachern = $row["teacher_title"].$row["teacher_name"]."&nbsp;&nbsp;".$row["teacher_lastname"];
                            echo '' . $teachern.'   ';
                            
                            /* if ($row["pha_type"]==1) {
                               echo "( อาจารย์ที่ปรึกษาหลัก )";
                            }
                            if ($row["pha_type"]==2) {
                                echo "( อาจารย์ที่ปรึกษารอง )";
                             } */
                           echo',  ';       
                        }
                        }else{
                            echo "<ul>ไม่มีรายชื่ออาจารย์ที่ปรึกษาโครงงาน</ul>";
                        }
                        $con->close();
                        ?></ul>




</p>

                    </div>
                </div>
            </div>



            <!-- start sec3 -->
            <div class="col-12 px-0 mb-4 col-xl-4">
                <div class="card border-light shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between border-bottom border-light pb-3">
                            <div>
                                <h6 class="mb-0"><span class="icon icon-xs mr-3"><span
                                            class="fas fa-bookmark"></span></span>จำนวนนัดพบ</h6>
                            </div>
                            <div>
                            <a href="#" class="text-primary font-weight-bold">
                            <?php
           include '../../conn.php';
           $id_project = $_REQUEST["ID"];
               
					$sql = "SELECT
                    Count(appoint.appoint_id) as C_appoint,
                    appoint.project_id
                    FROM
                    appoint
                    WHERE
                    appoint.project_id = '$id_project'
                    GROUP BY
                    appoint.project_id";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            echo $row["C_appoint"];       
                        }
                        }else{

                            echo '0';
                        }
                        $con->close();
                        ?> 
                            <span class="fas fa-chart-line ml-2"></span></a>
                                
                                    
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom border-light py-3">
                            <div>
                                <h6 class="mb-0"><span class="icon icon-xs mr-3"><span
                                            class="fas fa-calendar-check"></span></span>สำเร็จ</h6>

                            </div>
                            <div>
                            <a href="#" class="text-primary font-weight-bold">
                            <?php
           include '../../conn.php';
           $id_project = $_REQUEST["ID"];
               
					$sql2 = "SELECT
                    Count(appoint.appoint_id) AS C_appoint01,
                    appoint.project_id
                    FROM
                    appoint
                    WHERE
                    appoint.project_id = '$id_project' AND
                    appoint.appoint_status = 4
                    GROUP BY
                    appoint.project_id";
					$result = $con->query($sql2);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            echo $row["C_appoint01"];       
                        }
                        }else{

                            echo '0';
                        }
                        $con->close();
                        ?> 
                            <span class="fas fa-chart-line ml-2"></span></a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom border-light py-3">
                            <div>
                                <h6 class="mb-0"><span class="icon icon-xs mr-3"><span
                                            class="fas fa-star"></span></span>คะแนน</h6>

                            </div>
                            <div>
                            <a href="#" class="text-primary font-weight-bold">
                            <?php
           include '../../conn.php';
           $id_project = $_REQUEST["ID"];
               
					$sql2 = "SELECT
                    com05.project_id,
                    Sum(score.score_score) as s_sum
                    FROM
                    com05
                    INNER JOIN score ON com05.score = score.score_id
                    WHERE
                    com05.project_id = '$id_project'
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
                            <span class="fas fa-chart-line ml-2"></span></a>
                            </div>
                        </div>

                        <div class="d-flex align-items-center justify-content-between pt-3">
                            <div>
                                <h6 class="mb-0"><span class="icon icon-xs mr-3"><span
                                            class="fas fa-calendar-times"></span></span>ผิดนัด</h6>

                            </div>
                            <div>
                                <a href="#" class="text-primary font-weight-bold">
                                <a href="#" class="text-primary font-weight-bold">
                                <?php
           include '../../conn.php';
           $id_project = $_REQUEST["ID"];
               
					$sql2 = "SELECT
                    Count(appoint.appoint_id) AS C_appoint01,
                    appoint.project_id
                    FROM
                    appoint
                    WHERE
                    appoint.project_id = '$id_project' AND
                    appoint.appoint_status = 6
                    GROUP BY
                    appoint.project_id";
					$result = $con->query($sql2);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            echo $row["C_appoint01"];       
                        }
                        }else{

                            echo '0';
                        }
                        $con->close();
                        ?> <span
                                        class="fas fa-chart-line ml-2"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end sec3 -->






        </div>



        <style>
            a:hover,
            a:focus {
                outline: none;
                text-decoration: none;
            }

            .tab .nav-tabs {
                position: relative;
                border-bottom: none;
            }

            .tab .nav-tabs li {
                text-align: center;
                margin-right: 3px;
            }

            .tab .nav-tabs li a {
                display: block;
                font-size: 15px;
                font-weight: 600;
                color: #231123;
                text-transform: uppercase;
                padding: 15px;
                background: #fff;
                margin-right: 0;
                border-radius: 0;
                border: none;
                position: relative;
                transition: all 0.5s ease 0s;
            }

            .tab .nav-tabs li a:before {
                content: "";
                width: 8px;
                height: 8px;
                border-radius: 50%;
                background: transparent;
                position: absolute;
                margin-left: -20px;
                bottom: 0;
                left: 50%;
                transition: all 0.2s ease 0s;
            }

            .tab .nav-tabs li a:hover:before,
            .tab .nav-tabs li.active a:before {
                background: #00cad5;
            }

            .tab .nav-tabs li a:after {
                content: "";
                width: 0;
                height: 1px;
                background: #00cad5;
                margin-left: -15px;
                position: absolute;
                bottom: 6%;
                left: 50%;
                transition: all 0.2s ease 0s;
            }

            .tab .nav-tabs li a:hover:after,
            .tab .nav-tabs li.active a:after {
                width: 35px;
            }

            .nav-tabs li.active a,
            .nav-tabs li.active a:focus,
            .nav-tabs li.active a:hover,
            .nav-tabs li a:hover {
                border: none;
                color: blue;
            }

            .tab .tab-content {
                font-size: 14px;
                color: #6f6c6c;
                line-height: 26px;
                padding: 20px 20px 20px 15px;
            }

            .tab .tab-content h3 {
                font-size: 24px;
                margin-top: 0;
            }

            @media only screen and (max-width: 479px) {
                .tab .nav-tabs li {
                    width: 100%;
                    margin-bottom: 5px;
                }
            }
        </style>


        <!-- nav start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" ><a href="#Section1" aria-controls="home" role="tab"
                                    data-toggle="tab">ประวัติการนัดพบ</a></li>
                            <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab"
                                    data-toggle="tab">COM-05</a></li>
                            <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab"
                                    data-toggle="tab">เอกสารที่เกี่ยวข้อง</a></li>
                                    <li role="presentation"><a href="#Section4" aria-controls="messages" role="tab"
                                    data-toggle="tab">ข้อมูลผู้จัดทำ</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabs">
                            <div role="tabpanel" class="tab-pane fade in active" id="Section1">

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" table table-dark table-hover">

                                            <tr>

                                               
                                                <td>วันที่เข้าพบ</td>
                                                <td>เวลา</td>
                                                <td>นัดพบอาจารย์</td>
                                                <td>สถานะ</td>
                                                <td>เพิ่มเติม</td>

                                            </tr>
                                        </thead>
                                        <tbody>


                                        <?php
           include '../../conn.php';
           $id_ptojrct = $_REQUEST["ID"];
               
					$sql = "SELECT
                    appoint.appoint_id,
appoint.project_id,
appoint.appoint_date_start,
appoint.appoint_date_end,

appoint.appoint_comment,
appoint.teacher_id,
appoint.appoint_status,
appoint.recorder,
teacher.teacher_name,
appoint_status.appoint_status_name,
appoint_status.appoint_status_class,
                    appoint.project_id,
                    teacher.teacher_title,
                    teacher.teacher_lastname

FROM
appoint
INNER JOIN project ON appoint.project_id = project.project_id
INNER JOIN teacher ON appoint.teacher_id = teacher.teacher_id
INNER JOIN appoint_status ON appoint.appoint_status = appoint_status.appoint_status_id
WHERE
appoint.project_id = '$id_ptojrct'
ORDER BY
appoint.appoint_id DESC";
					$result = $con->query($sql);

                    

					if (!empty($result) && $result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            $teachern = $row["teacher_title"].$row["teacher_name"]."&nbsp;&nbsp;".$row["teacher_lastname"];
                            $strDate = $row["appoint_date_start"];
                            $strDatetoHourMinute = $row["appoint_date_start"];
                            $strDatetoHourMinute1 = $row["appoint_date_end"];
                            $newDate = date('Y-m-d\TH:i', strtotime($strDatetoHourMinute));
                            echo '<tr>                                                
                                             
                                                <td>'.DateThai($strDate).'</td>
                                                <td>'. HourMinute($strDatetoHourMinute).'  - '. HourMinute1($strDatetoHourMinute1).' น.</td>
                                                <td>' . $teachern.'</td>
                                                <td><h6><span class="badge bg-'. $row["appoint_status_class"].'">'. $row["appoint_status_name"].'</span></h6></td>
                                                <td>
                                                <input type="button" name="view" value="ดูรายละเอียด" id="'. $row["appoint_id"].'" class="btn btn-info btn-sm view_data" />
                                                
                                                 </td>
                                            </tr>

                                            <div class="modal fade" id="myModal'. $row["appoint_id"].'" role="dialog">
                                        <div class="modal-dialog">
                                          <!-- Modal content-->
                                          <div class="modal-content">
                                            <div class="modal-header">';
                                            
                                            $ider = $row["appoint_id"]; 
                                            $query2 = mysqli_query($con, "SELECT
                                            appoint.appoint_id,
                                            appoint.appoint_date_start
                                            FROM
                                            appoint
                                            INNER JOIN project ON appoint.project_id = project.project_id
                                            WHERE
                                            appoint.appoint_id = '$ider'");
                                            while ($row1 = mysqli_fetch_array($query2)) { 

                                              
                                           
                                              echo'<h5 class="modal-title">พบเลขการนัดพบ : ' . $row["appoint_id"].' </h5>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">

                                            
                                               
                                            <p>ต้องการเข้าพบ : '.DateThai($strDate).'   เวลา '. HourMinute($strDatetoHourMinute).'  - '. HourMinute1($strDatetoHourMinute1).' น.
                                            <p> อาจารย์ที่ปรึกษาโครงงาน : ' . $teachern.'
                                            <p> รายละเอียด : ' . $row["appoint_comment"].'
                                           
                                            
                                            
                                            ';
                                            }
                                           
                                              echo'
                                            </div>
                                          </div>
                                        </div>
                                      </div>'; 
                                        };
                                        
                                           
                                    }

                             
                                    
                                    $con->close();
                                    ?> 

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section2">

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" table table-dark table-hover">

                                            <tr>

                                              
                                                <td>วันที่เข้าพบ</td>
                                                <td>นัดพบอาจารย์</td>
                                                <td>ตรงต่อเวลา</td>
                                                <td>คะแนน</td>
                                                <td>เพิ่มเติม</td>

                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php
           include '../../conn.php';
           $id_ptojrct = $_REQUEST["ID"];
               
					$sql = "SELECT
                    com05.com05_id,
                    com05.appoint_id,
                    appoint.appoint_comment,
                    com05.project_id,
                    com05.comment_teacher,
                    com05.comment_assign,
                    score.score_score,
                    meet_check.meet_check_name,
                    teacher.teacher_name,
appoint.appoint_date_start,
                    teacher.teacher_title,
                    teacher.teacher_lastname
                    FROM
                    com05
                    INNER JOIN appoint ON com05.appoint_id = appoint.appoint_id
                    INNER JOIN score ON com05.score = score.score_id
                    INNER JOIN meet_check ON com05.meet_check = meet_check.meet_check_id
                    INNER JOIN teacher ON com05.teacher_id = teacher.teacher_id AND appoint.teacher_id = teacher.teacher_id
                    WHERE
                    com05.project_id = '$id_ptojrct'
                    ORDER BY
                    com05.com05_id DESC
                    ";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            $strDate = $row["appoint_date_start"];
                            $teachern = $row["teacher_title"].$row["teacher_name"]."&nbsp;&nbsp;".$row["teacher_lastname"];
                            echo '<tr>

                                                 
                                                <td>'.DateThai($strDate).'</td>
                                                <td>' . $teachern.'</td>
                                                <td>' . $row["meet_check_name"].'</td>
                                                <td>' . $row["score_score"].'</td>
                                                <td><input type="button" name="view" value="ดูรายละเอียด" id="'. $row["com05_id"].'" class="btn btn-info btn-sm view_datacom05" />
                                                
                                                
                                                
                                                 </td>
                                            </tr> 
                                            
                                            <div class="modal fade" id="myModal2'. $row["com05_id"].'" role="dialog">
                                            <div class="modal-dialog modal-xl">
                                              <!-- Modal content-->
                                              <div class="modal-content">
                                                <div class="modal-header">';
                                                
                                                $ider = $row["com05_id"]; 
                                                $query2 = mysqli_query($con, "SELECT
                                                com05.com05_id,
                                                com05.appoint_id,
                                                appoint.appoint_comment,
                                                com05.project_id,
                                                com05.comment_teacher,
                                                com05.comment_assign,
                                                score.score_score,
                                                meet_check.meet_check_name,
                                                teacher.teacher_name,
                                                appoint.appoint_date_start
                                                FROM
                                                com05
                                                INNER JOIN appoint ON com05.appoint_id = appoint.appoint_id
                                                INNER JOIN score ON com05.score = score.score_id
                                                INNER JOIN meet_check ON com05.meet_check = meet_check.meet_check_id
                                                INNER JOIN teacher ON com05.teacher_id = teacher.teacher_id AND appoint.teacher_id = teacher.teacher_id
                                                WHERE
                                                com05.com05_id ='$ider'");
                                                
                                                while ($row1 = mysqli_fetch_array($query2)) { 
    
                                                  
                                               
                                                  echo'<h5 class="modal-title">COM-05 หมายเลข : ' . $row["com05_id"].' </h5>
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
    
                                                
                                                   
                                                <p>สิ่งที่นำเสนอ :'. $row["appoint_comment"].'</p>
                                                <p>ความเห็นของอาจารย์ที่ปรึกษา : '. $row["comment_teacher"].'</p>
                                                <p>งานที่อาจารย์ที่ปรึกษามอบหมายครั้งต่อไป :  '. $row["comment_assign"].'</p>
                                                <p>คะแนนความก้าวหน้า :  '. $row["score_score"].'</p>
                                                <p>การตรงต่อเวลา :  '. $row["meet_check_name"].'</p>
                                               
                                                
                                                
                                                ';
                                                }
                                               
                                                  echo'
                                                </div>
                                              </div>
                                            </div>
                                          </div>'; 
                                            };
                                            
                                               
                                        }
                                        
                                        $con->close();
                                        ?> 

                                        </tbody>
                                    </table>

                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="Section4">
<style>
    body {
    
    border-radius: 10px
}

.card {
   
    border: none;
    border-radius: 10px;
    background-color: #fff
}

.stats {
    background: #f2f5f8 !important;
    color: #000 !important
}

.articles {
    font-size: 10px;
    color: #a1aab9
}

.number1 {
    font-weight: 500
}

.followers {
    font-size: 10px;
    color: #a1aab9
}

.number2 {
    font-weight: 500
}

.rating {
    font-size: 10px;
    color: #a1aab9
}

.number3 {
    font-weight: 500
}
</style>
<div class="container">
  <div class="row">
                            <?php
           include '../../conn.php';
           $id_ptojrct = $_REQUEST["ID"];
               
					$sql = "SELECT
                    project_has_student.phs_key, 
                    project_has_student.phs_project_id, 
                    project_has_student.phs_student_id, 
                    student.student_name, 
                    major.student_major_name, 
                    student.student_phone, 
                    student.student_email, 
                    student.student_photo,
                    student.student_title, 
	                student.student_lastname
                FROM
                    project_has_student
                    INNER JOIN
                    student
                    ON 
                        project_has_student.phs_student_id = student.student_id
                    INNER JOIN
                    major
                    ON 
                        student.student_major = major.student_major_id
                WHERE
                    project_has_student.phs_project_id = '$id_ptojrct'
                ORDER BY
                    student.student_id ASC";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            $namestudent = $row["student_title"].$row["student_name"]."&nbsp;&nbsp;".$row["student_lastname"];
                            echo '
                            
                            <div class="col-lg-6 col-md-6">
                            <div class="card p-3">
                                <div class="d-flex align-items-center">
                                    <div class="image"> <img src="'. $row["student_photo"].'" class="rounded" width="155"> </div>
                                    <div class="ml-3 w-100">
                                        <h6 class="mb-0 mt-0">'.  $namestudent.'</h6> <span>รหัสนักศึกษา :'. $row["phs_student_id"].'</span>
                                        <br><span>สาขาวิชา'. $row["student_major_name"].'</span>
                                        <br><span>เบอร์ติดต่อ :'. $row["student_phone"].'</span>
                                        <br><span>อีเมลล์ :'. $row["student_email"].'</span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        
                        ';       
            }
            }
            $con->close();
            ?> 
            </div>
                        </div>
                            </div> 


                            <div role="tabpanel" class="tab-pane fade" id="Section3">
                           
                        


<!-- ฟอร์มเพิ่มไฟล์ เริ่ม -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มไฟล์เอกสารที่เกียวข้อง</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
<!-- frm_add str -->
<form action="file_add_ac.php" method="post">


    <div class="row">

        <div class="form-group">
            <label for="filee">ประเภทไฟล์</label>
            <select class="form-select" id="filee" name="filee">
                <option selected>เลือกประเภทไฟล์</option>

                <?php
                 include '../../conn.php';
					$sql = "SELECT
                    file_type.file_type_id,
                    file_type.file_type_name
                    
                    FROM
                    file_type
                    ORDER BY
                    file_type.file_type_id ASC";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            echo '<option value="'. $row["file_type_id"].'">'. $row["file_type_name"].'</option>';
                            
                          
							 
						}
					}
					$con->close();
					?>

            </select>
        </div>

    </div>
    
    <div class="row">

        <div class="form-group">
            <label for="filee_url">URL ไฟล์เอกสาร</label>
            <input class="form-control" id="filee_url" name="filee_url" type="url" placeholder="กรอกลิงค์เอกสาร"
                required>
        </div>
        <input type="text" name="project_id" id="project_id" value="<?php echo  $id_ptojrct; ?>" hidden>

    </div>

<!-- frm_add end -->
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
        <button type="submit" class="btn btn-primary">บันทึก</button>
      </div>
                </form>
    </div>
  </div>
</div>
<!-- ฟอร์มเพิ่มไฟล์ สิ้นสุด -->


<?php
           include '../../conn.php';
           $id_ptojrct =$_REQUEST["ID"];
               
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
                    filee.project_id = '$id_ptojrct' and filee.file_apporve = 2
                    ORDER BY
                    file_type.file_type_id ASC";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            echo '<div class="btn-group mr-2 mb-2"> 
                            <a href="' . $row["file_link"].'" type="button" class="btn btn-primary"><span class="' . $row["file_type_icon"].' mr-2"></span> ' . $row["file_type_name"].'</a>
                            
                        </div>';       
                        }
                        }
                        $con->close();
                        ?>     
                                   <div class="btn-group mr-2 mb-2"> 
                            <a href="../../pdf.php?act=show&ID=<?php echo $id_ptojrct ?>" type="button" class="btn btn-danger"><span class="fas fa-file-pdf mr-2"></span>รายงานประวัติการนัดพบ</a>
                            
                        </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  nav end -->
        

        <div id="dataModalappoint" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                 
                     <h4 class="modal-title">รายละเอียดการนัด</h4>  
                </div>  
                <div class="modal-body" id="appoint_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>  
                </div>  
           </div>  
      </div>  
 </div>  



 
 <div id="dataModalcom05" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                 
                     <h4 class="modal-title">รายละเอียดการเข้าพบ</h4>  
                </div>  
                <div class="modal-body" id="com05_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>  
                </div>  
           </div>  
      </div>  
 </div>  



 <script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var appoint_id = $(this).attr("id");  
           $.ajax({  
                url:"select.php",  
                method:"post",  
                data:{appoint_id:appoint_id},  
                success:function(data){  
                     $('#appoint_detail').html(data);  
                     $('#dataModalappoint').modal("show");  
                }  
           });  
      });  
 });  




 $(document).ready(function(){  
      $('.view_datacom05').click(function(){  
           var com05_id = $(this).attr("id");  
           $.ajax({  
                url:"select.php",  
                method:"post",  
                data:{com05_id:com05_id},  
                success:function(data){  
                     $('#com05_detail').html(data);  
                     $('#dataModalcom05').modal("show");  
                }  
           });  
      });  
 }); 
 </script>


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