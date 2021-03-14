<meta charset="UTF-8">

<?php include '../../conn.php';?> 
<?php



$student_id = $_REQUEST["ID"];



$sql2 = "DELETE FROM subject_hash_student  WHERE ss_student_id='$student_id' ";
$result2 = mysqli_query($con, $sql2);

$sql = "DELETE FROM student  WHERE student_id='$student_id' ";
$result = mysqli_query($con, $sql);







mysqli_close($con); 
  
  if($result){
  echo "<script type='text/javascript'>";

  echo "window.location = history.back(1); ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('ลบข้อมูลนักศึกษาไม่สำเร็จ');";
  echo "window.location = history.back(1); ";
  echo "</script>";
}
?>