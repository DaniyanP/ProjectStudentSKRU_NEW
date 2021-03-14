<meta charset="UTF-8">

<?php include '../../conn.php';?> 
<?php



$ss_id = $_REQUEST["ID"];



  
  $sql = "DELETE FROM subject_hash_student  WHERE ss_id='$ss_id' ";





$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con); 
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('ลบนักศึกษาออกจากกลุ่มเรียนนี้เรียบร้อยแล้ว');";
  echo "window.location = history.back(1); ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('ลบนักศึกษาไม่สำเร็จ');";
  echo "</script>";
}
?>