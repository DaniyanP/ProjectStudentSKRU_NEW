<meta charset="UTF-8">

<?php include '../../conn.php';?> 
<?php



$file_idd = $_REQUEST["ID"];



  
  $sql = "DELETE FROM filee  WHERE file_id='$file_idd' ";





$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con); 
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('ลบไฟล์เรียบร้อยแล้ว');";
  echo "window.location = 'index.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('ลบไฟล์ไม่สำเร็จ');";
  echo "</script>";
}
?>