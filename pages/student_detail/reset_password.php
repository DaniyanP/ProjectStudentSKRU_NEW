<meta charset="UTF-8">

<?php include '../../conn.php';?> 
<?php



$student_id = $_REQUEST["student_id"];
$password = $_REQUEST["password"];
$password02 = $_REQUEST["password02"];
$set_password = md5($password);
if($password==$password02){
  
  $sql = "UPDATE student SET

student_password ='$set_password'




      WHERE student_id='$student_id' 
      ";





$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con); 
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('แก้ไขรหัสผ่านเรียบร้อยแล้ว');";
  echo "window.location = 'index.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to Update again');";
  echo "</script>";
}
}else{

  echo "<script>";
  echo "alert('รหัสผ่านและยืนยันรหัสผ่านไม่ตรงกัน');";
  echo "window.location= history.back(1);";
        echo "</script>";


}
?>