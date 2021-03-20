<meta charset="UTF-8">

<?php include '../../conn.php';?> 
<?php



$phs_key = $_REQUEST["ID"];



  
  $sql = "DELETE FROM project_has_student  WHERE phs_key='$phs_key' ";





$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con); 
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('ลบนักศึกษาออกจากโครงงานเรียบร้อยแล้ว');";
  echo "window.location = history.back(1); ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('ลบนักศึกษาออกจากโครงงานไม่สำเร็จ');";
  echo "</script>";
}
?>