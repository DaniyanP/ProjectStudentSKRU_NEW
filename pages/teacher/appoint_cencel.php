<meta charset="UTF-8">

<?php include '../../conn.php';?> 
<?php


$appoint_id = $_REQUEST["ID"];
$id_status  = 3;


  $sql = "UPDATE appoint SET

appoint_status ='$id_status'



      WHERE appoint_id='$appoint_id' 
      ";





$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าแรก
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('ยกเลิกการนัดหมายเรียบร้อย');";
  echo "window.location = 'index.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to Update again');";
  echo "</script>";
}
?>