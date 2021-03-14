<meta charset="UTF-8">

<?php include '../../conn.php';?> 
<?php



$appoint_id = $_REQUEST["ID"];
$set_status = 6;


  
  $sql = "UPDATE appoint SET

appoint_status ='$set_status'




      WHERE appoint_id='$appoint_id' 
      ";





$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con); 
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('บันทึกการผิดนัดเรียบร้อยแล้ว');";
  echo "window.location = 'index.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to Update again');";
  echo "</script>";
}
?>