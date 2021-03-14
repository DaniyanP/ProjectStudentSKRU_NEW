<meta charset="UTF-8">

<?php include '../../conn.php';?> 
<?php



$student_id = $_REQUEST["student_id"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$photo_student = $_REQUEST["photo_student"];


  
  $sql = "UPDATE student SET

student_phone ='$phone',
student_email ='$email',
student_photo ='$photo_student'



      WHERE student_id='$student_id' 
      ";





$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con); 
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('แก้ไขข้อมูลเรียบร้อยแล้ว');";
  echo "window.location = 'index.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to Update again');";
  echo "</script>";
}
?>