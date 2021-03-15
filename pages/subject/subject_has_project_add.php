<?php include '../../conn.php';?>
<?php





$project_id  = $_POST['project_id'];
$id_class  = $_POST['class_key'];

$project_name  = $_POST['project_name'];

$project_type  = $_POST['project_type'];






	$check1 = "select * from project  where project_id = '$project_id'";
	  $result1 = mysqli_query($con, $check1)  or die(mysql_error());
		
        if($result1->num_rows > 0)   		
        {


            $check2 = "select * from subject_hash_project  where sp_subject_id = '$id_class' and sp_project_id = '$project_id' ";
            $result2 = mysqli_query($con, $check2)  or die(mysql_error());
              
              if($result2->num_rows > 0)   		
              {

} else {
    $sql22 = "INSERT INTO subject_hash_project
    (sp_subject_id, sp_project_id)
    
     VALUES
    ('$id_class', '$project_id') "; 
    $result = mysqli_query($con, $sql22);
}









 
		}else{
	
            $sql3 = "INSERT INTO project
            (project_id, project_name, project_type)
            
             VALUES
            ('$project_id', '$project_name', '$project_type') "; 
        $result = mysqli_query($con, $sql3);



 $sql4 = "INSERT INTO subject_hash_project
		(sp_subject_id, sp_project_id)
		
 		VALUES
		('$id_class', '$project_id') "; 
	$result = mysqli_query($con, $sql4);
 
 
}
    mysqli_close($con);
    
    if($result){
      echo "<script>";
   
      echo "window.location = 'project.php?act=show&ID=$id_class' ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('บันทึกไม่สำเร็จ กรอกข้อมูลให้ครบ');";
      echo "window.location = history.back(1); ";
      echo "</script>";
    }
?>