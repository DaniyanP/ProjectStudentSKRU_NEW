
  <?php include '../../conn.php';?>
<?php





$pr_header  = $_POST['pr_header'];
$pr_content  = $_POST['pr_content'];
$admin_id  = $_POST['admin_id'];



		


 $sql = "INSERT INTO pr
		(pr_header, pr_content, pr_record)
		
 		VALUES
		('$pr_header', '$pr_content', '$admin_id') "; 
	$result = mysqli_query($con, $sql);
 
 

    mysqli_close($con);
    
    if($result){
      echo "<script>";
   
      echo "window.location = 'index.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ERROR');";
      echo "window.location = history.back(1); ";
      echo "</script>";
    }
?>