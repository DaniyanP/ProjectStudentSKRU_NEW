
  <?php include '../../conn.php';?>
<?php




$project_id  = $_POST['project_id'];
$project_name  = $_POST['project_name'];
$project_type  = $_POST['project_type'];

$project_status  = $_POST['project_status'];





  $sql ="UPDATE project SET

project_name ='$project_name',
project_type ='$project_type',
project_status = '$project_status'
    
    
    
    
          WHERE project.project_id='$project_id'";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());






    mysqli_close($con);
    
    if($result){
      echo "<script>";
      echo "alert('แก้ไขข้อมูลโครงงานเรียบร้อย');";
      echo "window.location = history.back(1); ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.location ='index.php'; ";
      echo "</script>";
    }
?>