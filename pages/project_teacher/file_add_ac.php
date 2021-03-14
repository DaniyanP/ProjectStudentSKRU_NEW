
  <?php include '../../conn.php';?>
<?php





$filee  = $_POST['filee'];
$filee_url  = $_POST['filee_url'];
$project_id  = $_POST['project_id'];



$sql ="INSERT INTO filee

  ( `project_id`, `file_type`, `file_link`)

    VALUES 

    ('$project_id','$filee','$filee_url')";
    
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    mysqli_close($con);
    
    if($result){
      echo "<script>";
      echo "alert('เพิ่มไฟล์เอกสารที่เกี่ยวข้องเรียบร้อยแล้ว');";
      echo "window.location = history.back(1); ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.location = history.back(1); ";
      echo "</script>";
    }
?>