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
        $sheet_data2	= $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);


        foreach ($sheet_data2 as $row2)
        {
            if(!empty($row2['A']))
            {
                $password  = $row2['A'];
                
                $checkemail2 = mysqli_query($con,'SELECT * FROM `project` WHERE project_id = "'.$row2['A'].'" ');
                if(mysqli_num_rows($checkemail2) == '0')
                {
                    mysqli_query($con,'INSERT INTO `project` (project_id,project_name,project_type) VALUES ("'.$row2['A'].'","'.$row2['B'].'" ,"'.$row2['C'].'" ) ');
                }
                
            }
        }

        foreach ($sheet_data as $row)
        {
            if(!empty($row['A']))
            {
                $id_room  = $_POST['id_room'];
                $checkemail = mysqli_query($con,'SELECT * FROM `subject_hash_project` WHERE sp_subject_id = "'.$id_room.'" AND sp_project_id = "'.$row['A'].'"  ');
                if(mysqli_num_rows($checkemail) == '0')
                {
                    mysqli_query($con,'INSERT INTO `subject_hash_project` (sp_subject_id,sp_project_id) VALUES ("'.$id_room.'","'.$row['A'].'") ');
                }
                
            }
        }
        $updatemsg = "File Successfully Imported!";
        $updatemsgtype = 1;
        echo "<script>";
      echo "alert('???????????????????????????????????????????????????');";
      echo "window.location = history.back(1); ";
      echo "</script>";
    }
?>