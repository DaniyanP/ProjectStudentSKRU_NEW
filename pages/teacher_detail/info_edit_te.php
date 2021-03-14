<meta charset="UTF-8">

<?php include '../../conn.php';?> 
<?php



$teacher_id = $_REQUEST["teacher_id"];
$teacher_name = $_REQUEST["teacher_name"];
$teacher_email = $_REQUEST["teacher_email"];
$teacher_photo = $_REQUEST["teacher_photo"];


  
  $sql = "UPDATE teacher SET

teacher_name ='$teacher_name',
teacher_email ='$teacher_email',
teacher_photo ='$teacher_photo'



      WHERE teacher_id='$teacher_id'";





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