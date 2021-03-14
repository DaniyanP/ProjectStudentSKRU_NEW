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
            if(!empty($row['A']))
            {
                
                $set_password = $row['A'];
                $password = md5($set_password);
                $checkemail = mysqli_query($con,'SELECT * FROM `teacher` WHERE teacher_id = "'.$row['A'].'"  ');
                if(mysqli_num_rows($checkemail) == '0')
                {
                    mysqli_query($con,'INSERT INTO `teacher` (teacher_id,teacher_name,teacher_email,teacher_password) VALUES ("'.$row['A'].'","'.$row['B'].'","'.$row['C'].'","'.$password.'") ');
                }
            }
        }
        $updatemsg = "File Successfully Imported!";
        $updatemsgtype = 1;
        echo "<script>";
      echo "alert('เพิ่มข้อมูลสำเร็จ');";
      echo "window.location ='index.php'; ";
      echo "</script>";
    }
?>