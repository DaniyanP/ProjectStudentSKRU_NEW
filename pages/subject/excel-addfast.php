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
        
        $sheet_data_addstudent1	= $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
        $sheet_data_addstudent1_room	= $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
        $sheet_data_addproject	= $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
        $sheet_data_student_pj	= $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
        $sheet_data_adviser_stu	= $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);

        foreach ($sheet_data_addstudent1 as $row2)
        {
            if(!empty($row2['G']))
            {
                $password  = $row2['G'];
                $setpassword = md5($password);
                $check = mysqli_query($con,'SELECT * FROM `student` WHERE student_id = "'.$row2['G'].'" ');
                if(mysqli_num_rows($check) == '0')
                {
                    mysqli_query($con,'INSERT INTO `student` (student_id,student_name,student_major,student_password,student_email,student_title,student_lastname) VALUES
                     ("'.$row2['G'].'","'.$row2['I'].'" ,"'.$row2['C'].'","'.$setpassword.'","'.$row2['G'].'@parichat.skru.ac.th","'.$row2['H'].'" ,"'.$row2['J'].'" ) ');
                }
                
            }

            if($row2['K'] != 0)
            {
                $password  = $row2['G'];
                $setpassword = md5($password);
                $check = mysqli_query($con,'SELECT * FROM `student` WHERE student_id = "'.$row2['K'].'" ');
                if(mysqli_num_rows($check) == '0')
                {
                    mysqli_query($con,'INSERT INTO `student` (student_id,student_name,student_major,student_password,student_email,student_title,student_lastname) VALUES
                     ("'.$row2['K'].'","'.$row2['M'].'" ,"'.$row2['C'].'","'.$setpassword.'","'.$row2['K'].'@parichat.skru.ac.th","'.$row2['L'].'" ,"'.$row2['N'].'" ) ');
                }
                
            }
        }

        foreach ($sheet_data_addstudent1_room as $row)
        {
            if(!empty($row['G']))
            {
                
                $check = mysqli_query($con,'SELECT * FROM `subject_hash_student` WHERE ss_subject_id = "'.$row['B'].'" AND ss_student_id = "'.$row['G'].'"  ');
                if(mysqli_num_rows($check) == '0')
                {
                    mysqli_query($con,'INSERT INTO `subject_hash_student` (ss_subject_id,ss_student_id) VALUES ("'.$row['B'].'","'.$row['G'].'") ');
                }
                
            }

            if($row2['K'] != 0)
            {
                
                $check = mysqli_query($con,'SELECT * FROM `subject_hash_student` WHERE ss_subject_id = "'.$row['B'].'" AND ss_student_id = "'.$row['K'].'"  ');
                if(mysqli_num_rows($check) == '0')
                {
                    mysqli_query($con,'INSERT INTO `subject_hash_student` (ss_subject_id,ss_student_id) VALUES ("'.$row['B'].'","'.$row['K'].'") ');
                }
                
            }
        }

        foreach ($sheet_data_addproject as $row3)
        {
            if(!empty($row3['D']))
            {
                 
                
                $check = mysqli_query($con,'SELECT * FROM `project` WHERE project_id = "'.$row3['D'].'" ');
                if(mysqli_num_rows($check) == '0')
                {
                    mysqli_query($con,'INSERT INTO `project` (project_id,project_name,project_type) VALUES ("'.$row3['D'].'","'.$row3['E'].'" ,"'.$row3['F'].'" ) ');
                }
                
            }


            if(!empty($row3['D']))
            {
               
                $check = mysqli_query($con,'SELECT * FROM `subject_hash_project` WHERE sp_subject_id = "'.$row3['B'].'" AND sp_project_id = "'.$row3['D'].'"  ');
                if(mysqli_num_rows($check) == '0')
                {
                    mysqli_query($con,'INSERT INTO `subject_hash_project` (sp_subject_id,sp_project_id) VALUES ("'.$row3['B'].'","'.$row3['D'].'") ');
                }
                
            }
        }


        foreach ($sheet_data_student_pj as $row4)
        {
            if(!empty($row4['G']))
            {
                 
                
                $check = mysqli_query($con,'SELECT * FROM `project_has_student` WHERE phs_project_id = "'.$row4['D'].'" AND phs_student_id = "'.$row4['G'].'"  ');
                if(mysqli_num_rows($check) == '0')
                {
                    mysqli_query($con,'INSERT INTO `project_has_student` (phs_project_id,phs_student_id) VALUES ("'.$row4['D'].'","'.$row4['G'].'") ');
                }
                
            }
            if($row4['K'] != 0)
            {
                 
                
                $check = mysqli_query($con,'SELECT * FROM `project_has_student` WHERE phs_project_id = "'.$row4['D'].'" AND phs_student_id = "'.$row4['K'].'"  ');
                if(mysqli_num_rows($check) == '0')
                {
                    mysqli_query($con,'INSERT INTO `project_has_student` (phs_project_id,phs_student_id) VALUES ("'.$row4['D'].'","'.$row4['K'].'") ');
                }
                
            }

        }



        foreach ($sheet_data_adviser_stu as $row5)
        {
            if(!empty($row5['O']))
            {
                 
                
                $check = mysqli_query($con,'SELECT * FROM `project_has_adviser` WHERE pha_project_id = "'.$row5['D'].'" AND pha_teacher_id = "'.$row5['O'].'"  ');
                if(mysqli_num_rows($check) == '0')
                {
                    mysqli_query($con,'INSERT INTO `project_has_adviser` (pha_project_id,pha_teacher_id,pha_type) VALUES ("'.$row5['D'].'","'.$row5['O'].'","1") ');
                }
                
            }

            if(!empty($row5['P']))
            {
                 
                
                $check = mysqli_query($con,'SELECT * FROM `project_has_adviser` WHERE pha_project_id = "'.$row5['D'].'" AND pha_teacher_id = "'.$row5['P'].'"  ');
                if(mysqli_num_rows($check) == '0')
                {
                    mysqli_query($con,'INSERT INTO `project_has_adviser` (pha_project_id,pha_teacher_id,pha_type) VALUES ("'.$row5['D'].'","'.$row5['P'].'","2") ');
                }
                
            }

        }




        $updatemsg = "File Successfully Imported!";
        $updatemsgtype = 1;
        echo "<script>";
 
      echo "window.location = history.back(1); ";
      echo "</script>";
    }
?>