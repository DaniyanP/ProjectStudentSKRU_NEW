
  <?php include 'conn.php';?>
<?php





$id  = $_POST['id'];
$name  = $_POST['name'];
$phone  = $_POST['phone'];
$major  = $_POST['major'];
$email  = $_POST['email'];
$password  = $_POST['password'];
$id_project  = $_POST['id_project'];
$passworddenc  = md5($password);
$photo_link = "https://i.ibb.co/HFB65Yz/asa.png";


$sql ="INSERT INTO student

  ( `student_id`, `student_name`, `student_major`, `student_phone`, `student_email`, `student_password`, `student_photo`, `student_project`, `student_type`)

    VALUES 

    ('$id','$name','$major','$phone','$email','$passworddenc','$photo_link','$id_project','A')";
    
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    mysqli_close($con);
    
    if($result){
      echo "<script>";
      echo "alert('สมัครสมาชิกสำเร็จเข้าสู่ระบบได้เลย');";
      echo "window.location ='login.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.location ='sign-up.php'; ";
      echo "</script>";
    }
?>