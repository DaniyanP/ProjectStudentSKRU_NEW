

<?php include '../../conn.php';?> 
<?php



$teacher = $_REQUEST["ID"];
$setpassword = md5($teacher);

  $sql = "UPDATE teacher SET

teacher_password ='$setpassword'


      WHERE teacher_id='$teacher' 
      ";


$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con); 
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('รีเซ็ตรหัสผ่านอาจารย์เรียบร้อยแล้ว');";
  echo "window.location = 'index.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to Update again');";
  echo "</script>";
}
?>
