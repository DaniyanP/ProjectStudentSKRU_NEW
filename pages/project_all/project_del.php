<meta charset="UTF-8">

<?php include '../../conn.php';?> 
<?php



$project_id = $_REQUEST["ID"];


$sql1 = "DELETE FROM filee  WHERE project_id='$project_id' ";
$result1 = mysqli_query($con, $sql1);

$sql2 = "DELETE FROM project_has_student  WHERE phs_project_id='$project_id' ";
$result2 = mysqli_query($con, $sql2);

$sql3 = "DELETE FROM appoint  WHERE project_id='$project_id' ";
$result3 = mysqli_query($con, $sql3);

$sql4 = "DELETE FROM com05  WHERE project_id='$project_id' ";
$result4 = mysqli_query($con, $sql4);

$sql5 = "DELETE FROM subject_hash_project  WHERE sp_project_id='$project_id' ";
$result5 = mysqli_query($con, $sql5);

$sql6 = "DELETE FROM project_has_adviser  WHERE pha_project_id='$project_id' ";
$result6 = mysqli_query($con, $sql6);
  
  $sql = "DELETE FROM project  WHERE project_id='$project_id' ";





$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con); 
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('ลบโครงงานนี้เรียบร้อยแล้ว');";
  echo "window.location = history.back(1); ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('ลบโครงงานไม่สำเร็จ');";
  echo "</script>";
}
?>