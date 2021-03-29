<!-- การลิ้ง sweetalert2 เเบบ cdn  -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<!-- edit -->
<?php
 include '../../conn.php';
            if (isset($_POST["SubmitEditCom05"])) {
   

   
    
$com05_id  = $_POST['com05_id'];
$appoint_id  = $_POST['appoint_id'];
$project_id  = $_POST['project_id'];
$comment_teacher  = $_POST['comment_teacher'];
$comment_assign  = $_POST['comment_assign'];

$score  = $_POST['score'];
$meet_check  = $_POST['meet_check'];
$teacher_id  = $_POST['teacher_id'];



$sqleditcom05 ="UPDATE com05 SET

comment_teacher ='$comment_teacher',
comment_assign ='$comment_assign',
score ='$score',
meet_check ='$meet_check'
    
    
    
    
          WHERE com05.com05_id='$com05_id'";

    if (mysqli_query($con, $sqleditcom05)) {
        echo
            "<script> 
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'ข้อมูลการเข้าพบ COM-05 เรียบร้อยแล้ว!',
                    showConfirmButton: false,
                    timer: 2000
                }).then(()=> location = 'index.php')
            </script>";
        //header('Location: index.php');
    } else {
        echo
            "<script> 
            Swal.fire({
                icon: 'error',
                title: 'แก้ไขการเข้าพบไม่สำเร็จ', 
            }).then(()=> location = 'index.php')
        </script>";
    }
  
   
}






mysqli_close($con);
    ?>







<!-- DEL -->

index.php?RejectAppoint=req&ID=
<?php
include '../../conn.php';
if (isset($_GET["deleteR"] )) {
        echo
            "<script> 
                Swal.fire({
                    icon: 'warning',
                    title: 'ยกเลิกการนัดพบ?',
                    text: 'ท่านเเน่ใจว่า ยกเลิกการนัดพบ!',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'ใช่',
                    cancelButtonText: 'ไม่!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        location = 'index.php?deleteR2=req&ID={$_GET["ID"]}'
                    }else{
                        location = 'index.php'
                    }
                }); 
        </script>";
}


if (isset($_GET["deleteR2"])) {
   

  
    $sql288 = "UPDATE appoint SET

    appoint_status = 3
    
    
    
          WHERE appoint_id={$_GET["ID"]}";

    if (mysqli_query($con, $sql288)) {
        echo
            "<script> 
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'ข้อมูลการเข้าพบ COM-05 เรียบร้อยแล้ว!',
                    showConfirmButton: false,
                    timer: 2000
                }).then(()=> location = 'index.php')
            </script>";
        //header('Location: index.php');
    } else {
        echo
            "<script> 
            Swal.fire({
                icon: 'error',
                title: 'ยกเลิกการนัดพบไม่สำเร็จ', 
            }).then(()=> location = 'index.php')
        </script>";
    }
  
   
}



mysqli_close($con);
    ?>