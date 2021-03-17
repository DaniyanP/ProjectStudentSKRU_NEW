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
					$_POST["txtTeacherID$i"] != "" &&
					$_POST["txtAdviserStatus$i"] != "" )
			{
				$check = "select * from project_has_adviser  where pha_project_id = '".$_POST["txtProjectID$i"]."' and pha_teacher_id = '".$_POST["txtTeacherID$i"]."' ";
            $result1 = mysqli_query($con, $check)  or die(mysql_error());
              
              if($result1->num_rows > 0)   		
              {
     
                   
       
              }else{
          
      
                $sql = "INSERT INTO project_has_adviser (pha_project_id, pha_teacher_id, pha_type) 
                VALUES ('".$_POST["txtProjectID$i"]."','".$_POST["txtTeacherID$i"]."','".$_POST["txtAdviserStatus$i"]."')";
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