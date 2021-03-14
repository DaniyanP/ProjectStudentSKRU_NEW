<meta charset="UTF-8">

<?php include '../../conn.php';?> 
<?php




$student_id  = $_POST['student_id'];
$student_name  = $_POST['student_name'];
$student_major  = $_POST['student_major'];
$student_email  = $_POST['student_email'];
$student_phone  = $_POST['student_phone'];
$student_type  = $_POST['student_type'];


  $sql = "UPDATE student SET


student_name='$student_name',
student_major='$student_major',
student_email='$student_email',
student_phone='$student_phone',
student_type='$student_type'



      WHERE student_id='$student_id' 
      ";





$result = mysqli_query($con, $sql);
mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าแรก
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('แก้ไขข้อมูลนักศึกษาเสร็จแล้ว');";
  echo "window.location = history.back(1); ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to Update again');";
  echo "window.location = history.back(1); ";
  echo "</script>";
}


?>

