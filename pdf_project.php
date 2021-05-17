
<?php session_start();

if (!$_SESSION["TeacherID"]){  

	  Header("Location: ../../login_te.php"); 

}else{?>
<?php
	//เรียกใช้ไฟล์ autoload.php ที่อยู่ใน Folder vendor
	require_once __DIR__ . '../vendor/autoload.php';
	$id_section_room = $_REQUEST["ID"];
	include './pages/dateth.php';
	
    include("conn.php");
	
	mysqli_set_charset($con, "utf8");

	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}


	
	$sql = "SELECT
	subject_hash_project.sp_id, 
	subject_hash_project.sp_subject_id, 
	subject_hash_project.sp_project_id, 
	project.project_name, 
	project_status.project_status_name, 
	project_status.project_status_class, 
	project_type.project_type_name
FROM
	subject_hash_project
	INNER JOIN
	project
	ON 
		subject_hash_project.sp_project_id = project.project_id
	INNER JOIN
	project_status
	ON 
		project.project_status = project_status.project_status_id
	INNER JOIN
	project_type
	ON 
		project.project_type = project_type.project_type_id
WHERE
    subject_hash_project.sp_subject_id = '$id_section_room'
ORDER BY
    subject_hash_project.sp_project_id ASC";
	
	$result = mysqli_query($con, $sql);
	$content = "";
	if (mysqli_num_rows($result) > 0) {
		$i = 1;
		while($row = mysqli_fetch_assoc($result)) {
		
			$content .= '<tr style="border:1px solid #000;">
				<td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$i.'</td>
				<td style="border-right:1px solid #000;padding:3px;text-align:center;" >'.$row['sp_project_id'].'</td>
				
				<td style="border-right:1px solid #000;padding:3px;word-wrap: break-word">'.$row['project_name'].'</td>
              
				<td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$row['project_type_name'].'</td>
                <td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$row['project_status_name'].'</td>
			</tr>';
			$i++;
		}
	}








	

	
   $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);  
/* 
	$mpdf = new \Mpdf\Mpdf(); */

	include("conn.php");



$sql2 = "SELECT
subject_project.subject_id2, 
subject_project.subject_classroom, 
subject_project.subject_name, 
subject_project.subject_semester, 
subject_project.subject_year, 
subject_project.subject_sec, 
subject_day.day_name, 
 
subject_project.subject_time_start, 
subject_project.subject_time_end, 
subject_project.subject_key, 
                    teacher.teacher_name as nametecher,
                    teacher.teacher_title as titletecher,
                    teacher.teacher_lastname as lastnametecher
FROM
subject_project
INNER JOIN
subject_day
ON 
    subject_project.subject_day = subject_day.day_id
INNER JOIN
teacher
ON 
    subject_project.subject_teacher = teacher.teacher_id
HAVING
subject_project.subject_key = '$id_section_room' ";
$result2 = mysqli_query($con, $sql2) or die ("Error in query: $sql2 " . mysqli_error());
$row2 = mysqli_fetch_array($result2);
extract($row2);
$strDatetoHourMinute = $subject_time_start;
$strDatetoHourMinute1 = $subject_time_end;
$subject_st = HourMinute($strDatetoHourMinute);
$subject_end = HourMinute($strDatetoHourMinute1);
$teachern = $titletecher.$nametecher."&nbsp;&nbsp;".$lastnametecher;


$head1 = '
<style>
	body{
		font-family: "Garuda";//เรียกใช้font Garuda สำหรับแสดงผล ภาษาไทย
	}

</style>

<h3 style="text-align:center">รายชื่อโครงงานในรายวิชา</h3>';
	
	
$echoproject = "$subject_id2   $subject_name ( Sec $subject_sec )"; 
$infoproject ="ภาคการเรียน $subject_semester ปีการศึกษา $subject_year    ทำการสอนวัน$day_name  เวลา $subject_st -  $subject_end น.";
$txtteacher = 'อาจารย์ผู้สอน : '.$teacher_name;
	
	$head4 = '
	<table id="bg-table" width="100%" style="table-layout:fixed;border-collapse: collapse;font-size:12pt;margin-top:8px; word-wrap:break-word">
    <tr style="border:1px solid #000;padding:4px;">
    <td  style="border-right:1px solid #000;padding:4px;text-align:center;"   width="10%">ลำดับ</td>
        <td  style="border-right:1px solid #000;padding:4px;text-align:center;"   width="10%">รหัสโครงงาน</td>
       
        <td  style="border-right:1px solid #000;padding:4px;text-align:center;" width="45%">ชื่อโครงงาน</td>
       
        <td  width="15%" style="border-right:1px solid #000;padding:4px;text-align:center;">ประเภทโครงงาน</td>
        <td  style="border-right:1px solid #000;padding:4px;text-align:center;"  width="15%">สถานะ</td>
       
    </tr>

</thead>
	<tbody>';
	
$end = "</tbody>
</table>";

$mpdf->WriteHTML($head1);
$mpdf->WriteHTML($echoproject);


$mpdf->WriteHTML($infoproject);



$mpdf->WriteHTML($teachern);
$mpdf->WriteHTML($head4);
$mpdf->WriteHTML($content);

$mpdf->WriteHTML($end);



$mpdf->Output();

} ?>


