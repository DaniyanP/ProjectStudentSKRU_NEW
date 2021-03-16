<meta charset="UTF-8">

<?php include '../../conn.php';?> 
<?php

$subject_id  = $_POST['subject_id'];
$subject_id2  = $_POST['subject_id2'];
$subject_classroom  = $_POST['subject_classroom'];
$subject_name  = $_POST['subject_name'];
$subject_semester  = $_POST['subject_semester'];
$subject_year  = $_POST['subject_year'];
$subject_sec  = $_POST['subject_sec'];
$subject_day  = $_POST['subject_day'];
$subject_time_start  = $_POST['subject_time_start'];
$subject_time_end  = $_POST['subject_time_end'];


  
  $sql = "UPDATE subject_project SET


subject_id2='$subject_id2',
subject_classroom='$subject_classroom',
subject_name='$subject_name',
subject_semester='$subject_semester',
subject_year='$subject_year',
subject_sec='$subject_sec',
subject_day='$subject_day',
subject_time_start='$subject_time_start',
subject_time_end='$subject_time_end'



      WHERE subject_key='$subject_id' 
      ";





$result = mysqli_query($con, $sql);
mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าแรก
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('แก้ไขข้อมูลรายวิชาเสร็จแล้ว');";
  echo "window.location = 'index.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to Update again');";
  echo "</script>";
}
?>