<?php 
session_start();
        if(isset($_POST['Username'])){
				//connection
                  include("conn.php");
				//รับค่า user & password
                  $Username = $_POST['Username'];
                  $Password = md5($_POST['Password']);
				//query 
                  $sql="SELECT * FROM teacher Where teacher_id='".$Username."' and 	teacher_password	='".$Password."' ";

                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["TeacherID"] = $row["teacher_id"];
                      $_SESSION["TeacherName"] = $row["teacher_title"].$row["teacher_name"]."&nbsp;&nbsp;".$row["teacher_lastname"];
                      $_SESSION["TeacherPhoto"] = $row["teacher_photo"];
                      $_SESSION["Teacherlevel"] = $row["teacher_type"];
                    

                     

                     if ($_SESSION["Teacherlevel"]==1){    

                        Header("Location: pages/teacher");

                       } if ($_SESSION["Teacherlevel"]==2){    

                        Header("Location: pages/teacher");

                       }if ($_SESSION["Teacherlevel"]==3){   

                        Header("Location: pages/Admin");

                       }


                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location: login_te.php");  

        }
?>