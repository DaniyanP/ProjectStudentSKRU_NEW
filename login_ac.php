<?php 
session_start();
        if(isset($_POST['StudentLogin'])){
				//connection
                  include("conn.php");
				//รับค่า user & password
                  $Username = $_POST['Username'];
                  $Password = md5($_POST['Password']);
				//query 
                  $sql="SELECT
                  project_has_student.phs_project_id, 
                  project.project_name, 
                  project_has_student.phs_key, 
                  student.student_id, 
                  student.student_name, 
                  student.student_type, 
                  student.student_password, 
	                student.student_photo, 
	                project.project_status
                FROM
                  student
                 
                  INNER JOIN
                  project_has_student
                  ON 
                    student.student_id = project_has_student.phs_student_id
                  INNER JOIN
                  project
                  ON 
                    project_has_student.phs_project_id = project.project_id
                    Where student_id='".$Username."' and student_password	='".$Password."'
                ORDER BY
                  project_has_student.phs_key DESC
                LIMIT 1 ";
                
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["UserID"] = $row["student_id"];
                      $_SESSION["User"] = $row["student_name"];
                      $_SESSION["ProjectID"] = $row["phs_project_id"];
                      $_SESSION["Userlevel"] = $row["student_type"];
                      $_SESSION["UserIMG"] = $row["student_photo"];
                      $_SESSION["project_status"] = $row["project_status"];
                     

                      if ($_SESSION["project_status"]=="3"){  
                        echo "<script>";
                        echo "alert(\" ไม่สารถใช้งานได้เนื่องจากสถานะโครงงานของนักศึกษาถูกยกเลิก ติดต่ออาจารย์ประจำวิชา!!!\");"; 
                        echo "window.history.back()";
                    echo "</script>";
                       
                      }else if ($_SESSION["Userlevel"]=="1") {
                        Header("Location: pages/student_index");

                      }else if($_SESSION["Userlevel"]=="2"){
                        echo "<script>";
                            echo "alert(\" นักศึกษาไม่สามารถใช้งานระบบได้เนื่องจากถูกล็อกการใช้งาน โปรดติดต่ออาจารย์ประจำวิชา\");"; 
                            echo "window.history.back()";
                        echo "</script>";
    
                      }
                      

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }




        if(isset($_POST['TeacherLogin'])){
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
                        $_SESSION["TeacherName"] = $row["teacher_name"];
                        $_SESSION["TeacherPhoto"] = $row["teacher_photo"];
                        $_SESSION["Teacherlevel"] = $row["teacher_type"];
                      
  
                       
  
                       if ($_SESSION["Teacherlevel"]==1){   //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
  
                          Header("Location: pages/teacher");
  
                         } if ($_SESSION["Teacherlevel"]==2){   //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
  
                          Header("Location: pages/teacher");
  
                         }if ($_SESSION["Teacherlevel"]==3){   //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
  
                          Header("Location: pages/Admin");
  
                         }
  
  
                    }else{
                      echo "<script>";
                          echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                          echo "window.history.back()";
                      echo "</script>";
  
                    }
  
          }
?>