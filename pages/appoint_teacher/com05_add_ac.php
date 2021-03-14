
  <?php include '../../conn.php';?>
<?php





$appoint_id  = $_POST['appoint_id'];
$project_id  = $_POST['project_id'];
$comment_teacher  = $_POST['comment_teacher'];
$comment_assign  = $_POST['comment_assign'];

$score  = $_POST['score'];
$meet_check  = $_POST['meet_check'];
$teacher_id  = $_POST['teacher_id'];
$set_status = 4;


$sql ="INSERT INTO com05

  ( `appoint_id`, `project_id`, `comment_teacher`, `comment_assign`, `score`, `meet_check`, `teacher_id`)

    VALUES 

    ('$appoint_id','$project_id','$comment_teacher','$comment_assign','$score','$meet_check','$teacher_id')";
    
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());



    $sql2 ="UPDATE appoint SET

    appoint_status ='$set_status'
    
    
    
    
          WHERE appoint_id='$appoint_id'";
      
      $result = mysqli_query($con, $sql2) or die ("Error in query: $sql2 " . mysqli_error());


    mysqli_close($con);
    
    if($result){
      echo "<script>";
      echo "alert('บันทึกการเข้าพบเรียบร้อย');";
      echo "window.location ='index.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.location ='index.php'; ";
      echo "</script>";
    }
?>