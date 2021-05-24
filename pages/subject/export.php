<?php
include '../../conn.php';
require_once '../../phpexcel/PHPExcel/IOFactory.php';
$key_subject = $_REQUEST["key"];
//ดึงข้อมูลจากฐานข้อมูล
$query = "SELECT * FROM regis_project  where subject_id='$key_subject'";
$res = mysqli_query($con, $query);
if (!$res) {
    die('<p><strong style="color:#FF0000">!! Invalid query:</strong> ' . $mysqli->error.'</p>');
}
 
// สร้าง object ของ Class  PHPExcel  ขึ้นมาใหม่
$objPHPExcel = new PHPExcel();
 
// กำหนดค่าต่างๆ
$objPHPExcel->getProperties()->setCreator("Songkhla Rajabhat University");
$objPHPExcel->getProperties()->setLastModifiedBy("Songkhla Rajabhat University");
$objPHPExcel->getProperties()->setTitle("รายวิชาโครงงาน");
$objPHPExcel->getProperties()->setSubject("โปรแกรมวิชาคอมพิวเตอร์");
$objPHPExcel->getProperties()->setDescription("ข้อมูลการเปิดรับโครงงาน");
 
$sheet = $objPHPExcel->getActiveSheet();
$pageMargins = $sheet->getPageMargins();
 
$columnCharacter = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P');
 
// margin is set in inches (0.5cm)
$margin = 0.5 / 2.54;
 
$pageMargins->setTop($margin);
$pageMargins->setBottom($margin);
$pageMargins->setLeft($margin);
$pageMargins->setRight(0);
 
$styleHeader = array(
		//'fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'ffff00')),
		'borders' => array('bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN)),
		'font'  => array(
		'bold'  => true,
		'size'  => 9,
		'name'  => 'Arial'
	));
 
//Set หัว Column
$rowCell=1;
$c=0; 
while ($f = $res->fetch_field()) { 
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue($columnCharacter[$c].$rowCell, $f->name);
	$c++;
}
$c = $c-1;
$objPHPExcel->getActiveSheet()->getStyle('A1:'.$columnCharacter[$c].'1')->applyFromArray($styleHeader);
 
//เขียนข้อมูล
$rowCell=2;
$c=0; 
while($row = $res->fetch_array(MYSQLI_NUM)){ $c++;
	for($i=0; $i < $res->field_count; $i++){
		$objPHPExcel->setActiveSheetIndex(0)->setCellValue($columnCharacter[$i].$rowCell, $row[$i]);
	}
	$rowCell++;
}
//	
 
// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('ImportProject');
 
// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);
 
 
//ตั้งชื่อไฟล์
 
$file_name = "Export_".$key_subject."";
//
 
// Save Excel 2007 file
#echo date('H:i:s') . " Write to Excel2007 format\n";
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
ob_end_clean();
// We'll be outputting an excel file
header('Content-type: application/vnd.ms-excel');
// It will be called file.xls
header('Content-Disposition: attachment;filename="'.$file_name.'.xlsx"');
$objWriter->save('php://output');	
exit();
?>