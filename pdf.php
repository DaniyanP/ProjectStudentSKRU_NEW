
<?php session_start();

if (!$_SESSION["TeacherID"]){  

	  Header("Location: ../../login_te.php"); 

}else{?>
<?php
	//เรียกใช้ไฟล์ autoload.php ที่อยู่ใน Folder vendor
	require_once __DIR__ . '../vendor/autoload.php';
	$project_id = $_REQUEST["ID"];
	include './pages/dateth.php';
	
    include("conn.php");
	
	mysqli_set_charset($con, "utf8");

	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}


	

	$sql = "SELECT
	com05.com05_id, 
	com05.appoint_id, 
	appoint.appoint_date_start, 
	appoint.appoint_date_end, 
	com05.project_id, 
	com05.score, 
	appoint.teacher_id, 
	teacher.teacher_name, 
	score.score_score
FROM
	com05
	INNER JOIN
	appoint
	ON 
		com05.appoint_id = appoint.appoint_id
	INNER JOIN
	teacher
	ON 
		
		com05.teacher_id = teacher.teacher_id
		INNER JOIN
	score
	ON 
		com05.score = score.score_id
WHERE
	com05.project_id = '$project_id'
ORDER BY
	com05.com05_id ASC";
	
	$result = mysqli_query($con, $sql);
	$content = "";
	if (mysqli_num_rows($result) > 0) {
		$i = 1;
		while($row = mysqli_fetch_assoc($result)) {
			$strDate = $row["appoint_date_start"];
			$strDatetoHourMinute = $row["appoint_date_start"];
			$strDatetoHourMinute1 = $row["appoint_date_end"];
			
			$content .= '<tr style="border:1px solid #000;">
				<td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$i.'</td>
				<td style="border-right:1px solid #000;padding:3px;text-align:center;" >'.DateThai($strDate).' </td>
				<td style="border-right:1px solid #000;padding:3px;"  >'. HourMinute($strDatetoHourMinute).'  - '. HourMinute1($strDatetoHourMinute1).' น.</td>
				<td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$row['teacher_name'].'</td>
              
				<td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$row['score_score'].'</td>
			</tr>';
			$i++;
		}
	}





	$sql3 = "SELECT
	project_has_student.*, 
	project_has_student.phs_student_id, 
	student.*
    FROM
	project_has_student
	INNER JOIN
	student
	ON 
		project_has_student.phs_student_id = student.student_id
	WHERE
	project_has_student.phs_project_id = '$project_id'
	";
	
	$result3 = mysqli_query($con, $sql3);
	$namestudent = "";
	if (mysqli_num_rows($result3) > 0) {
		$i = 1;
		while($row3 = mysqli_fetch_assoc($result3)) {
			
			$namestudent .= ' '.$row3['student_title'].$row3['student_name']."&nbsp;&nbsp;".$row3['student_lastname'].' ,';
			$i++;
		}
	}


	$sql4 = "SELECT
	project_has_adviser.pha_project_id, 
	project_has_adviser.pha_teacher_id, 
	teacher.teacher_name, 
	project_has_adviser.pha_type
FROM
	project_has_adviser
	INNER JOIN
	teacher
	ON 
		project_has_adviser.pha_teacher_id = teacher.teacher_id
WHERE
	project_has_adviser.pha_project_id = '$project_id'
ORDER BY
	project_has_adviser.pha_type ASC
	";
	
	$result4 = mysqli_query($con, $sql4);
	$nameteacher = "";
	if (mysqli_num_rows($result4) > 0) {
		$i = 1;
		while($row4 = mysqli_fetch_assoc($result4)) {
			
			$nameteacher .= ' '.$row4['teacher_name'].' ,';
			$i++;
		}
	}

	mysqli_close($con);


	

	
  /*   $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']); */

	$mpdf = new \Mpdf\Mpdf();

	include("conn.php");



$sql2 = "SELECT
project.project_id, 
project.project_name, 
project.project_type, 
project_type.project_type_name
FROM
project
INNER JOIN
project_has_student
ON 
	project.project_id = project_has_student.phs_project_id
INNER JOIN
project_type
ON 
	project.project_type = project_type.project_type_id
WHERE
project.project_id = '$project_id'
GROUP BY
project.project_id";
$result2 = mysqli_query($con, $sql2) or die ("Error in query: $sql2 " . mysqli_error());
$row2 = mysqli_fetch_array($result2);
extract($row2);

			$warptxt = wordwrap($project_name,80,"<br/>",true);
$echoproject = "$project_id   $warptxt  ( $project_type_name )"; 

$head1 = '
<style>
	body{
		font-family: "Garuda";//เรียกใช้font Garuda สำหรับแสดงผล ภาษาไทย
		
	}
	
</style>

<h3 style="text-align:center">ประวัติการเข้าพบอาจารย์ที่ปรึกษาโครงงาน</h3>';

$txtadviser = 'อาจารย์ที่ปรึกษาโครงงาน : '.$nameteacher;
$txtstudent = 'ผู้จัดทำโครงงาน : '.$namestudent;
	
	$head4 = '<table id="bg-table" width="100%" style="border-collapse: collapse;font-size:12pt;margin-top:8px;">
    <tr style="border:1px solid #000;padding:4px;">
        <td  style="border-right:1px solid #000;padding:4px;text-align:center;"   width="10%">ครั้งที่</td>
       
        <td  style="border-right:1px solid #000;padding:4px;text-align:center;" width="20%">วันที่ </td>
        <td  style="border-right:1px solid #000;padding:4px;text-align:center;" width="15%">เวลา </td>
        <td  width="25%" style="border-right:1px solid #000;padding:4px;text-align:center;">&nbsp;อาจารย์</td>
        <td  style="border-right:1px solid #000;padding:4px;text-align:center;"  width="15%">คะแนน</td>
       
    </tr>

</thead>
	<tbody>';
	
$end = "</tbody>
</table>";

$mpdf->WriteHTML($head1);

$mpdf->WriteHTML($echoproject);


$mpdf->WriteHTML($txtstudent);


$mpdf->WriteHTML($txtadviser);

$mpdf->WriteHTML($head4);
$mpdf->WriteHTML($content);

$mpdf->WriteHTML($end);



$mpdf->Output();

} ?>


