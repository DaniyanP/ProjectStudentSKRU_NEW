
<?php session_start();

if (!$_SESSION["TeacherID"]){  

	  Header("Location: ../../login_te.php"); 

}else{?>
<?php
	//เรียกใช้ไฟล์ autoload.php ที่อยู่ใน Folder vendor
	require_once __DIR__ . '../vendor/autoload.php';
	
	//ตั้งค่าการเชื่อมต่อฐานข้อมูล
	
    include("conn.php");
	
	mysqli_set_charset($con, "utf8");

	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM items";
	
	$result = mysqli_query($con, $sql);
	$content = "";
	if (mysqli_num_rows($result) > 0) {
		$i = 1;
		while($row = mysqli_fetch_assoc($result)) {
			$content .= '<tr style="border:1px solid #000;">
				<td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$i.'</td>
				<td style="border-right:1px solid #000;padding:3px;text-align:center;" >14 มกราคม 2564</td>
				<td style="border-right:1px solid #000;padding:3px;"  >10.00 - 13.25 น.</td>
				<td style="border-right:1px solid #000;padding:3px;text-align:center;"  >ผศ.แสงรัศมี พัฒนพิบูลกัลญามิตร</td>
              
				<td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$row['units'].'</td>
			</tr>';
			$i++;
		}
	}
	
	mysqli_close($con);
	
    $mpdf = new \Mpdf\Mpdf();

$head = '
<style>
	body{
		font-family: "Garuda";//เรียกใช้font Garuda สำหรับแสดงผล ภาษาไทย
	}
</style>

<h3 style="text-align:center">ประวัติการนัดพบอาจารย์ที่ปรึกษาโครงงาน</h3>

<table id="bg-table" width="100%" style="border-collapse: collapse;font-size:12pt;margin-top:8px;">
    <tr style="border:0px solid #000;padding:4px;">
	<td  style="border-right:0px solid #000;padding:4px;"   width="10%">โครงงาน</td>       
    <td  style="border-right:0px solid #000;padding:4px;" width="90%">kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk </td>
	</tr>

	<tr style="border:0px solid #000;padding:4px;">
	<td  style="border-right:0px solid #000;padding:4px;"   width="20%">ผู้จัดทำโครงงาน</td>       
    <td  style="border-right:0px solid #000;padding:4px;" width="80%">kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk </td>
	</tr>

	</table>
	
<table id="bg-table" width="100%" style="border-collapse: collapse;font-size:12pt;margin-top:8px;">
    <tr style="border:1px solid #000;padding:4px;">
        <td  style="border-right:1px solid #000;padding:4px;text-align:center;"   width="10%">ครั้งที่</td>
       
        <td  style="border-right:1px solid #000;padding:4px;text-align:center;" width="20%">วันที่ </td>
        <td  style="border-right:1px solid #000;padding:4px;text-align:center;" width="15%">เวลา </td>
        <td  width="25%" style="border-right:1px solid #000;padding:4px;text-align:center;">&nbsp;อาจารย์</td>
        <td  style="border-right:1px solid #000;padding:4px;text-align:center;"  width="15%">สถานะ</td>
       
    </tr>

</thead>
	<tbody>';
	
$end = "</tbody>
</table>";

$mpdf->WriteHTML($head);

$mpdf->WriteHTML($content);

$mpdf->WriteHTML($end);

$mpdf->Output();

} ?>


