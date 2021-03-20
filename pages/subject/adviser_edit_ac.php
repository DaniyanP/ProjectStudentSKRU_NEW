
  <?php include '../../conn.php';?>
<?php




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
        echo "<script>";
        echo "alert('ไม่สามารถเปลี่ยนแปลงได้ เนื่องจากอาจารย์มีสถานะการเป็นที่ปรึกษาโครงงานนี้อยู่แล้ว');";
        echo "window.location = 'project_edit.php?act=show&ID=$pha_project_id&IDR=$class_idd'; ";
        echo "</script>";
      }else{

        $sql ="UPDATE project_has_adviser SET
        pha_type ='$pha_type'
        WHERE project_has_adviser.pha_key = '$pha_key'";
        
        $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    }

}else{
    $sql ="UPDATE project_has_adviser SET
        pha_teacher_id ='$pha_teacher_id',
        pha_type ='$pha_type'
        WHERE project_has_adviser.pha_key = '$pha_key'";
        
        $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
}





    mysqli_close($con);
    
    if($result){
      echo "<script>";
      echo "alert('แก้ไขข้อมูลสถานะอาจารย์ที่ปรึกษาเรียบร้อย');";
      echo "window.location = 'project_edit.php?act=show&ID=$pha_project_id&IDR=$class_idd'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.location ='index.php'; ";
      echo "</script>";
    }
?>