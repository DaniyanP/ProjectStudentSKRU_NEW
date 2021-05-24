 
        
   

 
 


<?php  
include '../../conn.php';
include '../dateth.php';

 
 if(isset($_POST["appoint_id"]))  
 {  
      $output = '';  
      
      $query = "SELECT
      *, 
      appoint.appoint_id, 
      appoint.project_id, 
      project.project_name, 
      appoint.appoint_date_start, 
      appoint.appoint_date_end, 
      appoint.appoint_comment, 
      appoint.teacher_id, 
      teacher.teacher_title, 
      teacher.teacher_name, 
      teacher.teacher_lastname, 
      appoint.appoint_status, 
      appoint_status.appoint_status_name, 
      appoint.recorder, 
      student.student_title, 
      student.student_name, 
      student.student_lastname
  FROM
      appoint
      INNER JOIN
      project
      ON 
          appoint.project_id = project.project_id
      INNER JOIN
      teacher
      ON 
          appoint.teacher_id = teacher.teacher_id
      INNER JOIN
      appoint_status
      ON 
          appoint.appoint_status = appoint_status.appoint_status_id
      INNER JOIN
      student
      ON 
          appoint.recorder = student.student_id
  WHERE
      appoint_id  = '".$_POST["appoint_id"]."'";  
      $result = mysqli_query($con, $query);  
      
      $output .= '  
      <div class="table-responsive">  
           <table        width="100%">';  
           while($row = mysqli_fetch_array($result))
      {  

        $namestudent = $row["student_title"].$row["student_name"]."&nbsp;&nbsp;".$row["student_lastname"];
        $teachern = $row["teacher_title"].$row["teacher_name"]."&nbsp;&nbsp;".$row["teacher_lastname"];
                            $strDate = $row["appoint_date_start"];
                            $strDatetoHourMinute = $row["appoint_date_start"];
                            $strDatetoHourMinute1 = $row["appoint_date_end"];
                            $newDate = date('Y-m-d\TH:i', strtotime($strDatetoHourMinute));
       
           $output .= '  

           <tr>  
           <td  width="30%" ><label>โครงงาน</label></td>  
           <td  >'.$row["project_name"].'</td>  
            <tr>  
                     <td  ><label>วันที่เข้าพบ</label></td>  
                     <td >'.DateThai($strDate).'</td>  
                </tr>
                
                <tr>  
                     <td  ><label>เวลาเข้าพบ</label></td>  
                     <td  >'. HourMinute($strDatetoHourMinute).'  - '. HourMinute1($strDatetoHourMinute1).' น.</td>  
                </tr>  
                <tr>  
                     <td ><label>เข้าพบ</label></td>  
                     <td  >'.$teachern.'</td>  
                </tr>  
                <tr>  
                     <td valign="top"  ><label>รายละเอียด</label></td>  
                     <td  > <p>'.$row["appoint_comment"].'  <p> </td>  
                </tr>  
                <tr>  
                     <td  ><label>นัดหมายโดย</label></td>  
                     <td  >'.$namestudent.'  </td>  
                </tr>  
                <tr>  
                     <td  ><label>สถานะ</label></td>  
                     <td >'.$row["appoint_status_name"].'  </td>  
                </tr>
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 } 
 
 if(isset($_POST["com05_id"]))  
 {  
      $output = '';  
      
      $query = "SELECT
      com05.com05_id, 
      com05.appoint_id, 
      appoint.*, 
      com05.project_id, 
      project.project_name, 
      com05.comment_teacher, 
      com05.comment_assign, 
      score.score_score, 
      com05.meet_check, 
      com05.teacher_id, 
      teacher.teacher_title, 
      teacher.teacher_name, 
      teacher.teacher_lastname, 
      com05.student_id, 
      student.student_title, 
      student.student_name, 
      student.student_lastname, 
      appoint_status.appoint_status_name
 FROM
      com05
      INNER JOIN
      appoint
      ON 
           com05.appoint_id = appoint.appoint_id
      INNER JOIN
      project
      ON 
           appoint.project_id = project.project_id AND
           com05.project_id = project.project_id
      INNER JOIN
      score
      ON 
           com05.score = score.score_id
      INNER JOIN
      teacher
      ON 
           appoint.teacher_id = teacher.teacher_id AND
           com05.teacher_id = teacher.teacher_id
      INNER JOIN
      student
      ON 
           appoint.recorder = student.student_id
      INNER JOIN
      appoint_status
      ON 
           appoint.appoint_status = appoint_status.appoint_status_id
 WHERE
      com05.com05_id ='".$_POST["com05_id"]."'";  
      $result = mysqli_query($con, $query);  
      
      $output .= '  
      <div class="table-responsive">  
           <table        width="100%">';  
           while($row = mysqli_fetch_array($result))
      {  

        $namestudent = $row["student_title"].$row["student_name"]."&nbsp;&nbsp;".$row["student_lastname"];
        $teachern = $row["teacher_title"].$row["teacher_name"]."&nbsp;&nbsp;".$row["teacher_lastname"];
                            $strDate = $row["appoint_date_start"];
                            $strDatetoHourMinute = $row["appoint_date_start"];
                            $strDatetoHourMinute1 = $row["appoint_date_end"];
                            $newDate = date('Y-m-d\TH:i', strtotime($strDatetoHourMinute));
       
           $output .= '  

           <tr>  
           <td  width="30%" ><label>โครงงาน</label></td>  
           <td  >'.$row["project_name"].'</td>  
            <tr>  
                     <td  ><label>วันที่เข้าพบ</label></td>  
                     <td >'.DateThai($strDate).'</td>  
                </tr>
                
                <tr>  
                     <td  ><label>เวลาเข้าพบ</label></td>  
                     <td  >'. HourMinute($strDatetoHourMinute).'  - '. HourMinute1($strDatetoHourMinute1).' น.</td>  
                </tr>  
                <tr>  
                     <td ><label>เข้าพบ</label></td>  
                     <td  >'.$teachern.'</td>  
                </tr>  
                <tr>  
                     <td valign="top"  ><label>รายละเอียด</label></td>  
                     <td  > <p>'.$row["appoint_comment"].'  <p> </td>  
                </tr>  
                <tr>  
                <td valign="top"  ><label>ความเห็นอาจารย์</label></td>  
                <td  > <p>'.$row["comment_teacher"].'  <p> </td>  
           </tr> 

           <tr>  
                <td valign="top"  ><label>งานที่มอบหมาย</label></td>  
                <td  > <p>'.$row["comment_assign"].'  <p> </td>  
           </tr> 
           <tr>  
           <td valign="top"  ><label>คะแนน</label></td>  
           <td  > <p>'.$row["score_score"].' คะแนน <p> </td>  
      </tr> 
                <tr>  
                     <td  ><label>นัดหมายโดย</label></td>  
                     <td  >'.$namestudent.'  </td>  
                </tr>  
                
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 } 

 ?>
