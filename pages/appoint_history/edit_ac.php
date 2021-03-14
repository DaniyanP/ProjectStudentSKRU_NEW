<meta charset="UTF-8">

<?php include '../../conn.php';?> 
<?php


$idd = $_POST['id'];
$present  = $_POST['present'];
$teacher  = $_POST['teacher'];
$date_start  = $_POST['date_start'];
$date_end  = $_POST['date_end'];

$id_project = $_POST['id_project'];
$record = $_POST['record'];
$appoint_end = date('Y-m-d H:i:s',strtotime('+'.$date_end.' minutes',strtotime($date_start)));


  
  $sql = "UPDATE appoint SET

appoint_date_start ='$date_start',
appoint_date_end='$appoint_end',
apooint_minute='$date_end',
appoint_comment='$present',
teacher_id='$teacher'



      WHERE appoint_id='$idd' 
      ";





$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าแรก
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('แก้ไขการนัดหมายเสร็จแล้ว');";
  echo "window.location = 'index.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to Update again');";
  echo "</script>";
}
?>