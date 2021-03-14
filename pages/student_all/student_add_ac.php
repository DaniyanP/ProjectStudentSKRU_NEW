
  <?php include '../../conn.php';?>
<?php





$student_id  = $_POST['student_id'];
$student_name  = $_POST['student_name'];
$student_major  = $_POST['student_major'];
$student_email  = $_POST['student_email'];
$student_phone  = $_POST['student_phone'];
$set_password = $student_id;
$student_password = md5($set_password);



		

 $sql = "INSERT INTO student
		(student_id, student_name, student_major, student_phone, student_email, student_password)
		
 		VALUES
		('$student_id', '$student_name', '$student_major', '$student_phone', '$student_email', '$student_password') "; 
	$result = mysqli_query($con, $sql);
 
 

    mysqli_close($con);
    
    if($result){
      echo "<script>";
   
      echo "window.location = 'index.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ไม่สามารถบันทึกได้ เนื่องจากรหัสนักศึกษามีในระบบแล้ว');";
      echo "window.location = history.back(1); ";
      echo "</script>";
    }





?>