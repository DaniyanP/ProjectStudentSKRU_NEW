<?php include '../../conn.php';?>
<?php





$student_id  = $_POST['student_id'];
$id_class  = $_POST['class_key'];

$student_name  = $_POST['student_name'];
$student_major  = $_POST['student_major'];


$set_password = $student_id;
$student_password = md5($set_password);




	$check1 = "select * from student  where student_id = '$student_id'";
	  $result1 = mysqli_query($con, $check1)  or die(mysql_error());
		
        if($result1->num_rows > 0)   		
        {


            $check2 = "select * from subject_hash_student  where ss_subject_id = '$id_class' and ss_student_id = '$student_id' ";
            $result2 = mysqli_query($con, $check2)  or die(mysql_error());
              
              if($result2->num_rows > 0)   		
              {

} else {
    $sql22 = "INSERT INTO subject_hash_student
    (ss_subject_id, ss_student_id)
    
     VALUES
    ('$id_class', '$student_id') "; 
    $result = mysqli_query($con, $sql22);
}









 
		}else{
	
            $sql3 = "INSERT INTO student
            (student_id, student_name, student_major, student_email, student_password)
            
             VALUES
            ('$student_id', '$student_name', '$student_major', '$student_id@parichat.skru.ac.th', '$student_password') "; 
        $result = mysqli_query($con, $sql3);



 $sql4 = "INSERT INTO subject_hash_student
		(ss_subject_id, ss_student_id)
		
 		VALUES
		('$id_class', '$student_id') "; 
	$result = mysqli_query($con, $sql4);
 
 
}
    mysqli_close($con);
    
    if($result){
      echo "<script>";
   
      echo "window.location = 'student.php?act=show&ID=$id_class' ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('บันทึกไม่สำเร็จ กรอกข้อมูลให้ครบ');";
      echo "window.location = history.back(1); ";
      echo "</script>";
    }
?>