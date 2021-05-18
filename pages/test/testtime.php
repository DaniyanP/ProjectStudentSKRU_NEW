<?php 
include '../../conn.php';
$sqlc = "SELECT
appoint.appoint_date_start, 
appoint.appoint_date_end, 
appoint.teacher_id, 
appoint.appoint_status, 
appoint.appoint_id, 
DATE(appoint.appoint_date_start) AS datest,
TIME(appoint.appoint_date_start) AS datest1
FROM
appoint
WHERE
appoint.teacher_id = 6401 AND
DATE(appoint.appoint_date_start) = '2021-05-24' AND
 
(
    appoint.appoint_status = 1 OR
    appoint.appoint_status = 2 OR
    appoint.appoint_status = 4 OR
    appoint.appoint_status = 5 OR
    appoint.appoint_status = 6 
   
)AND  (
(appoint_date_start BETWEEN '2021-05-24 16:34:00' AND '2021-05-24 17:34:00') 
OR (appoint_date_end BETWEEN '2021-05-24 16:34:00' AND '2021-05-24 17:34:00')OR 
('2021-05-24 16:34:00' BETWEEN appoint_date_start  AND appoint_date_end)
OR 
('2021-05-24 17:34:00' BETWEEN  appoint_date_start  AND appoint_date_end ))
";
$resultc = $con->query($sqlc);
					if ($resultc->num_rows > 0) {
                        echo "ไม่ว่าง";
                        
                    }else {
                        echo "ว่าง";
                    }




?>