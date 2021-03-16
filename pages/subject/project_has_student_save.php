<html>

<head>
<?php include '../title.php';?>
</head>

<body>
    <?php
	ini_set('display_errors', 1);
	error_reporting(~0);

    include '../../conn.php';

	for ($i = 1; $i<= (int)$_POST["hdnCount"]; $i++){
		if(isset($_POST["txtProjectID$i"]))
		{
			if( 
					$_POST["txtProjectID$i"] != "" &&
					$_POST["txtstuID$i"] != ""  )
			{
				$check = "select * from project_has_student where phs_project_id = '".$_POST["txtProjectID$i"]."' and phs_student_id = '".$_POST["txtstuID$i"]."' ";
            $result1 = mysqli_query($con, $check)  or die(mysql_error());
              
              if($result1->num_rows > 0)   		
              {
     
                   
       
              }else{
          
      
                $sql = "INSERT INTO project_has_student (phs_project_id, phs_student_id) 
                VALUES ('".$_POST["txtProjectID$i"]."','".$_POST["txtstuID$i"]."')";
            $query = mysqli_query($con,$sql);
       
       
      }
			}

            


		}
	}

	
	mysqli_close($con);
   $linkID =  $_POST["class_id1"];
   echo "<script>";
    echo "window.location ='project.php?act=show&ID=$linkID'; ";
    echo "</script>";
?>
</body>

</html>