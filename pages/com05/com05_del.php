<meta charset="UTF-8">

<?php include '../../conn.php';?> 
<?php

$com05_id = $_REQUEST["ID"];



$sql = "DELETE FROM com05 WHERE com05_id='$com05_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());


  
  if($result){
  echo "<script type='text/javascript'>";
  echo "window.location = 'index.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to delete again');";
  echo "</script>";
}
?>