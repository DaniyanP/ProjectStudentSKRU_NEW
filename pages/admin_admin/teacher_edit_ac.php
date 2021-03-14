

<?php include '../../conn.php';?> 
<?php



$teacher_id  = $_POST['teacher_id'];
$teacher_name  = $_POST['teacher_name'];
$teacher_email  = $_POST['teacher_email'];

  $sql = "UPDATE teacher SET

teacher_name ='$teacher_name',
teacher_email ='$teacher_email'


      WHERE teacher_id='$teacher_id' 
      ";


$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con); 
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('แก้ไขข้อมูลผู้ดูแลระบบเรียบร้อยแล้ว');";
  echo "window.location = 'index.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to Update again');";
  echo "</script>";
}
?>
