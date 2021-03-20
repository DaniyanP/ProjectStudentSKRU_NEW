
  <?php include '../../conn.php';?>
<?php





$student_id  = $_POST['student_id'];
$id_class  = $_POST['id_class'];




// เช็คว่ามีข้อมูลนี้อยู่หรือไม่
	$check = "select * from subject_hash_student  where ss_subject_id = '$id_class' and ss_student_id = '$student_id' ";
	  $result1 = mysqli_query($con, $check)  or die(mysql_error());
		
        if($result1->num_rows > 0)   		
        {
//ถ้ามี โครงงาน นี้อยู่ในระบบแล้วให้แจ้งเตือน
             echo "<script>";
			 echo "alert('ไม่สามารถบันทึกได้ เนื่องจากนักศึกษาคนนี้อยู่ในกลุ่มเรียนนี้แล้ว');";
			 echo "window.location = 'student.php?act=show&ID=$id_class' ";
          	 echo "</script>";
 
		}else{
	
//ถ้าไม่มีก็บันทึกลงฐานข้อมูล
 $sql = "INSERT INTO subject_hash_student
		(ss_subject_id, ss_student_id)
		
 		VALUES
		('$id_class', '$student_id') "; 
	$result = mysqli_query($con, $sql);
 
 
}
    mysqli_close($con);
    
    if($result){
      echo "<script>";
   
      echo "window.location = 'student.php?act=show&ID=$id_class' ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ไม่พบรหัสนักศึกษานี้ในระบบ');";
      echo "window.location = 'student.php?act=show&ID=$id_class' ";
      echo "</script>";
    }
?>