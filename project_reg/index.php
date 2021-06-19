<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>บันทึกโครงาน</title>

    <script type="text/javascript">
function Check() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.display = 'block';
    } 
    else {
        document.getElementById('ifYes').style.display = 'none';

   }
}

function Checkno() {
    if (document.getElementById('noCheck').checked) {
        document.getElementById('ifYes').style.display = 'none';
    } 
    else {
        document.getElementById('ifYes').style.display = 'block';

   }
}



function Check1() {
    if (document.getElementById('yesCheck1').checked) {
        document.getElementById('ifY').style.display = 'block';
    } 
    else {
        document.getElementById('ifY').style.display = 'none';

   }
}

function Checkno1() {
    if (document.getElementById('noCheck1').checked) {
        document.getElementById('ifY').style.display = 'none';
    } 
    else {
        document.getElementById('ifY').style.display = 'block';

   }
}

</script>

 <!-- การลิ้ง sweetalert2 เเบบ cdn  -->
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>



  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <div class="row align-items-stretch justify-content-center no-gutters">
        <div class="col-md-7">
          <div class="form h-100 contact-wrap p-5">
            <h3 class="text-center">บันทึกโครงงาน</h3>
         
            <form action="" method="post">
       
             
              <div class="row">
<!-- ปีการศึกษา -->
<div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">รหัสยืนยัน</label>
                  <input type="text" class="form-control" name="subject_id" id="subject_id"    placeholder="รหัสยืนยันจากอาจารย์">
                </div>

<!-- ปีการศึกษา -->
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">ปีการศึกษา</label>
                  <input type="number" class="form-control" name="year_edu" id="year_edu"  min="2563"   minlength="4"  maxlength="4"  placeholder="กรอกปีการศึกษา">
                </div>

              </div>


              <div class="row">
<!-- เลือกสาขาวิชา -->
<div class="col-md-6 form-group mb-3">
                  <label for="major_id" class="col-form-label">สาขาวิชา</label>
                  

                  <select required class="form-control" id="major_id" name="major_id" aria-label="Default select example" >
                  <option selected="selected">เลือกสาขาวิชา</option>
                                   <?php include '../conn.php';?>
                                   <?php
                                  
         $sqlmajor = "SELECT
         major.student_major_id, 
         major.student_major_name
       FROM
         
         major
       ORDER BY
         major.student_major_id ASC";
         $resultmajor = $con->query($sqlmajor);
         if ($resultmajor->num_rows > 0) {

           while($rowmajor = $resultmajor->fetch_assoc()) {
                         
                           echo '<option value="'. $rowmajor["student_major_id"].'">'. $rowmajor["student_major_name"].'</option>';
                           
                         
              
           }
         }
         $con->close();
         ?>
                                   
                               </select>



                  
                </div>
<!-- ประเภทโครงงาน -->
                <div class="col-md-6 form-group mb-3">
                  <label for="project_type" class="col-form-label">ประเภทโครงงาน</label>
                  <select required class="form-control" id="project_type" name="project_type" aria-label="Default select example" >
                  <option selected="selected">เลือกประเภทโครงงาน</option>
                                   <?php include '../conn.php';?>
                                   <?php
                                  
         $sqlproject_type = "SELECT
         project_type.project_type_id, 
         project_type.project_type_name
       FROM
         project_type
       ORDER BY
         project_type.project_type_id ASC ";
         $resultproject_type = $con->query($sqlproject_type);
         if ($resultproject_type->num_rows > 0) {

           while($rowproject_type = $resultproject_type->fetch_assoc()) {
                         
                           echo '<option value="'. $rowproject_type["project_type_id"].'">'. $rowproject_type["project_type_name"].'</option>';
                           
                         
              
           }
         }
         $con->close();
         ?>
                                   
                               </select>
                </div>



                

              </div>


              <div class="row">
                <div class="col-md-12 form-group mb-3">
                  <label for="project_name" class="col-form-label">ชื่อโครงาน</label>
                  <input type="text" class="form-control" name="project_name" id="project_name" placeholder="กรอกชื่อโครงาน">
                </div>
              </div>
 
             <!--  <div class="row mb-5">
                <div class="col-md-12 form-group mb-3">
                  <label for="message" class="col-form-label">Message *</label>
                  <textarea class="form-control" name="message" id="message" cols="30" rows="4"  placeholder="Write your message"></textarea>
                </div>
              </div> -->
              <div class="row">
              <div class="col-md-6 form-group mb-3">
              <h6>จำนวนนักศึกษา<h6> <br>
                 <input required type="radio" onclick="Checkno();" value="no" name="selectchoice" id="noCheck"/>   1 คน
                <input required type="radio" onclick="Check();" value="yes" name="selectchoice" id="yesCheck"/>   2 คน  
   


              </div>
              </div>

            <h6>นักศึกษาคนที่ 1</h6> 
          
              <div class="row">


<!-- รหัสนักศึกษา -->
<div class="col-md-3 form-group mb-3">
                  <label for="student1_id" class="col-form-label">รหัสนักศึกษา</label>
                  <input type="number" class="form-control" name="student1_id" id="student1_id" minlength="9" min="594235000" placeholder="รหัสนักศึกษา">
                </div>


                <!-- คำนำหน้า -->
                <div class="col-md-3 form-group mb-3">
                  <label for="student1_title" class="col-form-label">คำนำหน้า</label>
                      
              <select required class="form-control" id="student1_title" name="student1_title" aria-label="Default select example" >
    <option selected="selected">คำนำหน้า</option>
    <option value="นาย">นาย</option> 
    <option value="นางสาว">นางสาว</option>    
    </select>
                </div>

 <!--ชื่อ -->
 <div class="col-md-3 form-group mb-3">
                  <label for="student1_name" class="col-form-label">ชื่อ</label>
                  <input type="text" class="form-control" name="student1_name" id="student1_name"   placeholder="กรอกชื่อ">
                </div>

              <!-- นามสกุล -->
              <div class="col-md-3 form-group mb-3">
                  <label for="student1_lastname" class="col-form-label">นามสกุล</label>
                  <input type="text" class="form-control" name="student1_lastname" id="student1_lastname"   placeholder="กรอกนามสกุล">
                </div>
                
              </div>


              <div id="ifYes" style="display:none" >

              <h6>นักศึกษาคนที่ 2</h6> 
          
          <div class="row">


<!-- รหัสนักศึกษา -->
<div class="col-md-3 form-group mb-3">
              <label for="student2_id" class="col-form-label">รหัสนักศึกษา</label>
              <input type="number" class="form-control" name="student2_id" id="student2_id" minlength="9" min="594235000" placeholder="รหัสนักศึกษา">
            </div>


            <!-- คำนำหน้า -->
            <div class="col-md-3 form-group mb-3">
              <label for="student2_title" class="col-form-label">คำนำหน้า</label>
             
              
              <select required class="form-control" id="student2_title" name="student2_title" aria-label="Default select example" >
    <option selected="selected">คำนำหน้า</option>
    <option value="นาย">นาย</option> 
    <option value="นางสาว">นางสาว</option>    
    </select>
            </div>

<!--ชื่อ -->
<div class="col-md-3 form-group mb-3">
              <label for="student2_name" class="col-form-label">ชื่อ</label>
              <input type="text" class="form-control" name="student2_name" id="student2_name"   placeholder="กรอกชื่อ">
            </div>

          <!-- นามสกุล -->
          <div class="col-md-3 form-group mb-3">
              <label for="student2_lastname" class="col-form-label">นามสกุล</label>
              <input type="text" class="form-control" name="student2_lastname" id="student2_lastname"   placeholder="กรอกนามสกุล">
            </div>
            
          </div>
              </div>





              <div class="row">
              <div class="col-md-6 form-group mb-3">
              <h6>อาจารย์ที่ปรึกษาร่วม<h6> <br>
              <input required type="radio" onclick="Check1();" value="yes" name="selectchoicet2" id="yesCheck1"/>  มี 
                 <input required type="radio" onclick="Checkno1();" value="no" name="selectchoicet2" id="noCheck1"/>   ไม่มี 

   


              </div>
              </div>
             

              <div class="row">
<!-- อาจารย์ที่ปรึกษาหลัก -->
              <div class="col-md-6 form-group mb-3">

              <label for="teacher1_id" class="col-form-label">อาจารย์ที่ปรึกษาหลัก</label>
                  <select required class="form-control" id="teacher1_id" name="teacher1_id" aria-label="Default select example" >
                  <option selected="selected">เลือกอาจารย์ที่ปรึกษาหลัก</option>
                                   <?php include '../conn.php';?>
                                   <?php
                                  
         $sqlteacher1 = "SELECT
         teacher.teacher_id, 
         teacher.teacher_title, 
         teacher.teacher_name, 
         teacher.teacher_lastname
       FROM
         teacher
       WHERE
         teacher.teacher_type < 3
       ORDER BY
         teacher.teacher_id ASC";
         $resultteacher1 = $con->query($sqlteacher1);
         if ($resultteacher1->num_rows > 0) {

           while($rowteacher1 = $resultteacher1->fetch_assoc()) {
            $teachern = $rowteacher1["teacher_title"].$rowteacher1["teacher_name"]."&nbsp;&nbsp;".$rowteacher1["teacher_lastname"];
                           echo '<option value="'. $rowteacher1["teacher_id"].'">'. $teachern .'</option>';
                           
                         
              
           }
         }
         $con->close();
         ?>
                                   
                               </select>

              </div>
<!-- สิ้นสุด -->

<div class="col-md-6 form-group mb-3">
<div id="ifY" style="display:none" >


<label for="teacher2_id" class="col-form-label">อาจารย์ที่ปรึกษาร่วม</label>
    <select required class="form-control" id="teacher2_id" name="teacher2_id" aria-label="Default select example" >
    <option selected="selected">เลือกอาจารย์ที่ปรึกษาร่วม</option>
                     <?php include '../conn.php';?>
                     <?php
                    
$sqlteacher1 = "SELECT
teacher.teacher_id, 
teacher.teacher_title, 
teacher.teacher_name, 
teacher.teacher_lastname
FROM
teacher
WHERE
teacher.teacher_type < 3
ORDER BY
teacher.teacher_id ASC";
$resultteacher1 = $con->query($sqlteacher1);
if ($resultteacher1->num_rows > 0) {

while($rowteacher1 = $resultteacher1->fetch_assoc()) {
$teachern = $rowteacher1["teacher_title"].$rowteacher1["teacher_name"]."&nbsp;&nbsp;".$rowteacher1["teacher_lastname"];
             echo '<option value="'. $rowteacher1["teacher_id"].'">'. $teachern .'</option>';
             
           

}
}
$con->close();
?>
                     
                 </select>

</div>



</div>
<!-- สิ้นสุด -->
              </div>


<style>

.yourownclass{
      
     font-size: 15px ! important;  
  }
</style>

              <div class="row justify-content-center">
                <div class="col-md-5 form-group text-center">
                 <!--  <input type="submit" value="ส่งแบบฟอร์ม" class="btn btn-block btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span> -->


                  <button class="btn  btn-success btn-lg yourownclass " type="submit" name="project_reg">บันทึก</button>
                </div>
              </div>


              
            </form>

            

          </div>
        </div>
      </div>
    </div>

  </div>



  <?php
  if (isset($_POST["project_reg"])) {
    //นำเข้าไฟล์ การเชื่อมต่อฐานข้อมูล
    include '../conn.php';
    $pass  = $_POST['subject_id'];
    $year_edu  = $_POST['year_edu'];
    $major_id  = $_POST['major_id'];
    $project_type  = $_POST['project_type'];
    $project_name  = $_POST['project_name'];
    $selectchoice  = $_POST['selectchoice'];
    $student1_id  = $_POST['student1_id'];
    $student1_title  = $_POST['student1_title'];
    $student1_name  = $_POST['student1_name'];
    $student1_lastname = $_POST['student1_lastname'];
    if ($selectchoice=='yes') {
    $student2_id  = $_POST['student2_id'];
    $student2_title  = $_POST['student2_title'];
    $student2_name  = $_POST['student2_name'];
    $student2_lastname  = $_POST['student2_lastname'];
    }
    if ($selectchoice=='no') {
      $student2_id  = "000000000";
      $student2_title  = "";
      $student2_name  = "";
      $student2_lastname  = "";
      }     
    $teacher1_id  = $_POST['teacher1_id'];
    $selectchoicet2 = $_POST['selectchoicet2'];
if ($selectchoicet2=='yes') {
  $teacher2_id = $_POST['teacher2_id'];
}
if ($selectchoicet2=='no') {
  $teacher2_id = "";
}

$pid_year  = substr($year_edu, -2); 
$pid_yearstu  = substr($student1_id, 0, 2);
$pid_stu1  = substr($student1_id, -2); 
$pid_stu2  = substr($student2_id, -2);




   $project_id   = "$pid_year$major_id$pid_yearstu$pid_stu1$pid_stu2";          
            



	
$checkpass = mysqli_query($con,'SELECT
subject_project.subject_key, 
subject_project.status_regis
FROM
subject_project
WHERE
subject_project.subject_key = "'.$pass.'" AND
subject_project.status_regis = 2 ');
$row = mysqli_fetch_array($checkpass);


                if(mysqli_num_rows($checkpass) == '1')
                {
                   
                  
                  $regisproject ="INSERT INTO regis_project
    
                  ( `subject_id`, `major_id`, `project_id`, `project_name`, `project_type`, `student1_id`, `student1_title`, `student1_name`, `student1_lastname`, `student2_id`, `student2_title`, `student2_name`, `student2_lastname`, `teacher1_id`, `teacher2_id`)
                  
                    VALUES 
                  
                    ('$pass','$major_id','$project_id','$project_name','$project_type','$student1_id','$student1_title','$student1_name','$student1_lastname','$student2_id','$student2_title','$student2_name','$student2_lastname','$teacher1_id','$teacher2_id')";

    if (mysqli_query($con, $regisproject)) {
        echo
            "<script> 
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'เพิ่มโครงงานสำเร็จ รออาจารย์ประจำวิชาอนุมัติ',
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
          title: 'บันทึกไม่สำเร็จ', 
          text: 'นักศึกษาติดต่ออาจารย์ประจำวิชา',
          
        }).then(() => {window.history.back()});
  </script>";
    }
                }
                if(mysqli_num_rows($checkpass) == '0')
                {
                    echo
                              "<script> 
                              Swal.fire({
                                  icon: 'error',
                                  title: 'รหัสยืนยันผิดพลาด', 
                                  text: 'รหัสยืนยันผิดพลาดหรืออาจารย์ปิดการรับไฟล์แล้ว',
                                  
                                }).then(() => {window.history.back()});
                          </script>";
                }


    }
    
    ?>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>