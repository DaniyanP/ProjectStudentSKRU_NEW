
  <?php include '../../conn.php';?>
<?php





$projec_id  = $_POST['projec_id'];
$id_class  = $_POST['id_class'];




// เช็คว่ามีข้อมูลนี้อยู่หรือไม่
	$check = "select * from subject_hash_project  where sp_subject_id = '$id_class' and sp_project_id = '$projec_id' ";
	  $result1 = mysqli_query($con, $check)  or die(mysql_error());
		
        if($result1->num_rows > 0)   		
        {
//ถ้ามี username นี้อยู่ในระบบแล้วให้แจ้งเตือน
             echo "<script>";
			 echo "alert('ไม่สามารถบันทึกได้ เนื่องจากโครงงานนี้อยู่ในกลุ่มเรียนนี้แล้ว');";
			 echo "window.location= history.back(1);";
          	 echo "</script>";
 
		}else{
	
//ถ้าไม่มีก็บันทึกลงฐานข้อมูล
 $sql = "INSERT INTO subject_hash_project
		(sp_subject_id, sp_project_id)
		
 		VALUES
		('$id_class', '$projec_id') "; 
	$result = mysqli_query($con, $sql);
 
 
}
    mysqli_close($con);
    
    if($result){
      echo "<script>";
   
      echo "window.location = history.back(1); ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ไม่พบรหัสโครงงานนี้ในระบบ');";
      echo "window.location = history.back(1); ";
      echo "</script>";
    }
?>