<meta charset="UTF-8">

<?php include '../../conn.php';?> 
<?php



$pha_key = $_REQUEST["ID"];



  
  $sql = "DELETE FROM project_has_adviser  WHERE pha_key='$pha_key' ";





$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con); 
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('ลบอาจารย์ออกจากที่ปรึกษาโครงงานเรียบร้อยแล้ว');";
  echo "window.location = history.back(1); ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('ลบอาจารย์ออกจากที่ปรึกษาโครงงานไม่สำเร็จ');";
  echo "</script>";
}
?>