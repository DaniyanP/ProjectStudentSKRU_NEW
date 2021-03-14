<meta charset="UTF-8">

<?php include '../../conn.php';?> 
<?php

$file_id = $_POST['file_id'];
$filee  = $_POST['filee'];
$filee_url  = $_POST['filee_url'];
$project_id  = $_POST['project_id'];


  
  $sql = "UPDATE filee SET

project_id ='$project_id',
file_type='$filee',
file_link='$filee_url'



      WHERE file_id='$file_id' 
      ";





$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าแรก
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('แก้ไขไฟล์เสร็จแล้ว');";
  echo "window.location = 'index.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to Update again');";
  echo "</script>";
}
?>