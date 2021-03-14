<meta charset="UTF-8">

<?php include '../../conn.php';?> 
<?php



$subject_id = $_REQUEST["ID"];

$sql2 = "DELETE FROM subject_hash_project  WHERE sp_subject_id='$subject_id' ";
$result2 = mysqli_query($con, $sql2);

$sql3 = "DELETE FROM subject_hash_student  WHERE ss_subject_id='$subject_id' ";
$result3 = mysqli_query($con, $sql3);

  
  $sql = "DELETE FROM subject_project  WHERE subject_id='$subject_id' ";
$result = mysqli_query($con, $sql);





mysqli_close($con); 
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('ลบรายวิชานี้เรียบร้อยแล้ว');";
  echo "window.location = history.back(1); ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "window.location = history.back(1); ";
  echo "alert('ลบรายวิชาไม่สำเร็จ');";
  echo "</script>";
}
?>