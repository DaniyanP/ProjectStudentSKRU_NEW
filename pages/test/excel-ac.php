<?php
include '../../conn.php';
    require_once '../../phpexcel/PHPExcel/IOFactory.php';
    if(isset($_POST['upload_excel']))
    {
        
        $file_info = $_FILES["result_file"]["name"];
        $file_directory = "../../uploads/excel_mail/";
        $new_file_name = date("dmY").".". rand(000000, 999999);
        move_uploaded_file($_FILES["result_file"]["tmp_name"], $file_directory . $new_file_name);
        $file_type	= PHPExcel_IOFactory::identify($file_directory . $new_file_name);
        $objReader	= PHPExcel_IOFactory::createReader($file_type);
        $objPHPExcel = $objReader->load($file_directory . $new_file_name);
        $sheet_data	= $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);

        foreach ($sheet_data as $row)
        {
            if(!empty($row['C']))
            {
                
                $group_id  = $_POST['idd'];
                $checkemail = mysqli_query($con,'SELECT * FROM `tbl_info` WHERE email = "'.$row['C'].'" AND names = "'.$group_id.'"  ');
                if(mysqli_num_rows($checkemail) == '0')
                {
                    mysqli_query($con,'INSERT INTO `tbl_info` (names,descriptionf,email) VALUES ("'.$group_id.'","'.$row['B'].'","'.$row['C'].'") ');
                }
            }
        }
        $updatemsg = "File Successfully Imported!";
        $updatemsgtype = 1;
        echo "<script>";
      echo "alert('เพิ่มข้อมูลสำเร็จ');";
      echo "window.location ='excel.php'; ";
      echo "</script>";
    }
?>