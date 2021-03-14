
  <?php include '../../conn.php';?>
<?php




$com05_id  = $_POST['com05_id'];
$appoint_id  = $_POST['appoint_id'];
$project_id  = $_POST['project_id'];
$comment_teacher  = $_POST['comment_teacher'];
$comment_assign  = $_POST['comment_assign'];

$score  = $_POST['score'];
$meet_check  = $_POST['meet_check'];
$teacher_id  = $_POST['teacher_id'];



$sql ="UPDATE com05 SET

comment_teacher ='$comment_teacher',
comment_assign ='$comment_assign',
score ='$score',
meet_check ='$meet_check'
    
    
    
    
          WHERE com05.com05_id='$com05_id'";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());


    mysqli_close($con);
    
    if($result){
      echo "<script>";
      echo "alert('แก้ไขการเข้าพบเรียบร้อย');";
      echo "window.location ='index.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.location ='index.php'; ";
      echo "</script>";
    }
?>