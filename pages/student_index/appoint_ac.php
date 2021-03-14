
  <?php include '../../conn.php';?>
<?php





$present  = $_POST['present'];
$teacher  = $_POST['teacher'];
$date_start  = $_POST['date_start'];
$date_end  = $_POST['date_end'];

$id_project = $_POST['id_project'];
$record = $_POST['record'];
$appoint_end = date('Y-m-d H:i:s',strtotime('+'.$date_end.' minutes',strtotime($date_start)));

$sql ="INSERT INTO appoint

  ( `project_id`, `appoint_date_start`, `appoint_date_end`, `apooint_minute`, `appoint_comment`, `teacher_id`, `appoint_status`, `recorder`)

    VALUES 

    ('$id_project','$date_start','$appoint_end','$date_end','$present','$teacher','1','$record')";
    
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    mysqli_close($con);
    
    if($result){
      echo "<script>";
      echo "alert('นัดพบอาจารย์เรียบร้อยแล้ว รอยืนยัน');";
      echo "window.location ='index.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.location ='index.php'; ";
      echo "</script>";
    }
?>