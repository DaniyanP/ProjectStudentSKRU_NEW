
<?php  
include 'conn.php';
include 'pages/dateth.php';

 
 if(isset($_POST["com05_id"]))  
 {  
      $output = '';  
      
      $query = "SELECT
      pr.*
  FROM
      pr
  WHERE
      pr.pr_id =  '".$_POST["com05_id"]."'";  
      $result = mysqli_query($con, $query);  
      
      $output .= '  
      <div class="table-responsive">  
           <table        width="100%">';  
           while($row = mysqli_fetch_array($result))
      {  

        
                            $strDate = $row["pr_date"];
                            
       
           $output .= '  

           <tr>  
           <td  width="30%" ><label>หัวข้อ</label></td>  
           <td  >'.$row["pr_header"].'</td>  </tr>
            
                <tr>  
                     <td valign="top"  ><label>รายละเอียด</label></td>  
                     <td  > <p>'.$row["pr_content"].'  <p> </td>  
                </tr>
                
                <tr>  
                <td  ><label>วันที่ประกาศ</label></td>  
                <td >'.DateThai($strDate).'</td>  
           </tr>
                  
                  
                
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 } 
 
  
 ?>
