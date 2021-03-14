<meta charset="UTF-8">

<?php include '../../conn.php';?> 
<?php



$teacher_id = $_REQUEST["ID"];

$sql = "DELETE FROM teacher  WHERE teacher_id='$teacher_id' ";
$result = mysqli_query($con, $sql);







mysqli_close($con); 
  
  if($result){
  echo "<script type='text/javascript'>";

  echo "window.location = history.back(1); ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('ลบข้อมูลผู้ดูแลระบบไม่สำเร็จ');";
  echo "window.location = history.back(1); ";
  echo "</script>";
}
?>