

<?php include '../../conn.php';?> 
<?php



$teacher_id  = $_POST['teacher_id'];
$teacher_name  = $_POST['teacher_name'];
$teacher_email  = $_POST['teacher_email'];

$teacher_type = $_POST['teacher_type'];
  $sql = "UPDATE teacher SET

teacher_name ='$teacher_name',
teacher_email ='$teacher_email',
teacher_type ='$teacher_type'


      WHERE teacher_id='$teacher_id' 
      ";


$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con); 
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('แก้ไขข้อมูลอาจารย์เรียบร้อยแล้ว');";
  echo "window.location = 'index.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to Update again');";
  echo "</script>";
}
?>
