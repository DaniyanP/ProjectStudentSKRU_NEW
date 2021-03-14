

<?php include '../../conn.php';?> 
<?php



$appoint_id = $_POST['appoint_id'];
$date_start  = $_POST['date_start'];
$date_end  = $_POST['date_end'];
$set_status = 5;
$appoint_end = date('Y-m-d H:i:s',strtotime('+'.$date_end.' minutes',strtotime($date_start)));

  
  $sql = "UPDATE appoint SET

appoint_status ='$set_status',
appoint_date_start ='$date_start',
appoint_date_end ='$appoint_end'



      WHERE appoint_id='$appoint_id' 
      ";





$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con); 
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('เปลี่ยนแปลงการนัดหมายเรียบร้อยแล้ว');";
  echo "window.location = 'index.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to Update again');";
  echo "</script>";
}
?>
