
  <?php include '../../conn.php';?>
<?php





$teacher_id  = $_POST['teacher_id'];
$teacher_name  = $_POST['teacher_name'];
$teacher_email  = $_POST['teacher_email'];
$set_password = $teacher_id;
$teacher_password = md5($set_password);



		


 $sql = "INSERT INTO teacher
		(teacher_id, teacher_name, teacher_email, teacher_password)
		
 		VALUES
		('$teacher_id', '$teacher_name', '$teacher_email', '$teacher_password') "; 
	$result = mysqli_query($con, $sql);
 
 

    mysqli_close($con);
    
    if($result){
      echo "<script>";
   
      echo "window.location = 'index.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ไม่สามารถบันทึกได้ เนื่องจากรหัสอาจารย์ท่านนี้มีในระบบแล้ว');";
      echo "window.location = history.back(1); ";
      echo "</script>";
    }
?>