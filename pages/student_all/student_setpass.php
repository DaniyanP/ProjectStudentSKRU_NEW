

<?php include '../../conn.php';?> 
<?php



$student = $_REQUEST["ID"];
$setpassword = md5($student);

  $sql = "UPDATE student SET

student_password ='$setpassword'


      WHERE student_id='$student' 
      ";


$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con); 
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('รีเซ็ตรหัสผ่านนักศึกษาเรียบร้อยแล้ว');";
  echo "window.location = 'student.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to Update again');";
  echo "</script>";
}
?>
