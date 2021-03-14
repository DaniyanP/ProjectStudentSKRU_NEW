

<?php include '../../conn.php';?> 
<?php



$pr_header  = $_POST['pr_header'];
$pr_content  = $_POST['pr_content'];
$admin_id  = $_POST['admin_id'];
$pr_id  = $_POST['pr_id'];

  $sql = "UPDATE pr SET

pr_header ='$pr_header',
pr_content ='$pr_content'


      WHERE pr_id='$pr_id' 
      ";


$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con); 
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('แก้ไขข่าวประชาสัมพันธ์เรียบร้อยแล้ว');";
  echo "window.location = 'index.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to Update again');";
  echo "</script>";
}
?>
