<meta charset="UTF-8">

<?php include '../../conn.php';?> 
<?php

$file_id = $_POST['file_id'];
$filee  = $_POST['filee'];
$filee_url  = $_POST['filee_url'];



  
  $sql = "UPDATE filee SET


file_type='$filee',
file_link='$filee_url'



      WHERE file_id='$file_id' 
      ";





$result = mysqli_query($con, $sql);
mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าแรก
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('แก้ไขไฟล์เสร็จแล้ว');";
  echo "window.location = history.back(1); ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to Update again');";
  echo "</script>";
}
?>