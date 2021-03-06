<?php session_start();?>

<?php 

if ($_SESSION["Teacherlevel"]=="2"){?>

<?php include '../../conn.php';
$stid = $_SESSION["TeacherID"]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <?php include '../title.php';?>

    <?php include '../../meta.php';?>

    <!-- Fontawesome -->
    <link type="text/css" href="../../vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="../../vendor/notyf/notyf.min.css" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="../../css/volt.css" rel="stylesheet">

    <!-- datatable CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowgroup/1.1.2/css/rowGroup.dataTables.min.css">
    
    <!-- นำเข้า  Javascript จาก  Jquery -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- นำเข้า  Javascript  จาก   dataTables -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js">
    </script>


    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
    <script type="text/javascript" charset="utf-8">
       $(document).ready(function() {
    var table = $('#example').DataTable( {
        
        orderFixed: [[2, 'asc']],

        rowGroup: {
            dataSrc: 2
        },

        oLanguage: {

"sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
"sZeroRecords": "ไม่พบรายการตรวจสอบไฟล์",
"sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ เร็คคอร์ด",
"sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 เร็คคอร์ด",
"sInfoFiltered": "(จากเร็คคอร์ดทั้งหมด _MAX_ เร็คคอร์ด)",
"sSearch": "ค้นหา :",
"oPaginate": {
    "sFirst": "เริ่มต้น",
    "sPrevious": "ก่อนหน้า",
    "sNext": "ถัดไป",
    "sLast": "สุดท้าย"
}
}
    } );
 
    // Change the fixed ordering when the data source is updated
    table.on( 'rowgroup-datasrc', function ( e, dt, val ) {
        table.order.fixed( {pre: [[ val, 'asc' ]]} ).draw();
    } );
 
    $('a.group-by').on( 'click', function (e) {
        e.preventDefault();
 
        table.rowGroup().dataSrc( $(this).data('column') );
    } );
} );
    </script>


   

    <?php include '../dateth.php';?>
    <!-- การลิ้ง sweetalert2 เเบบ cdn  -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>

    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
        <a class="navbar-brand mr-lg-5" href="../../index.html">
            <img class="navbar-brand-dark" src="../../assets/img/brand/light.svg" alt="Volt logo" /> <img
                class="navbar-brand-light" src="../../assets/img/brand/dark.svg" alt="Volt logo" />
        </a>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler d-md-none collapsed" type="button" data-toggle="collapse"
                data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <?php include '../menu_te.php';?>


    <main class="content">

        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                            <li class="breadcrumb-item"><a href="../subject"><span class="fas fa-home"></span></a></li>
                               <!--  <li class="breadcrumb-item"><a href="index.php">ข้อมูลอาจารย์</a></li> -->
                                
                                    <li class="breadcrumb-item active" aria-current="page">ข้อมูลโครงงาน</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Navbar links -->
                    <?php include '../navbar_te.php';?>
                </div>
            </div>
        </nav>

        <div class="py-0">

            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">ตรวจสอบไฟล์เอกสาร</h1>
                    <p class="mb-0">
                    </p>
                </div>

            </div>
        </div>

        <div class="card border-light shadow-sm mb-4">
            <div class="card-body">

            

               





            <p></p>


             
            <div class="table-responsive">
                <table id="example" class="display" style="width:100%">
                <thead class="thead-dark">
            <tr>
                <th>รหัสเอกสาร</th>
                <th>ชื่อเอกสาร</th>
                <th style="display:none;">ชื่อโครงงาน</th>
                <th>ไฟล์</th>
                <th>จัดการไฟล์</th>
              
                
                
            </tr>
        </thead>
        <tbody>

 
        <?php
                       
                        
                       $sql = "SELECT
                       filee.file_id, 
                       filee.project_id, 
                       project.project_name, 
                       file_type.file_type_name, 
                       filee.file_link, 
                       filee.file_apporve, 
                       filee.teacher_id,
                       file_type.file_detail
                   FROM
                       filee
                       INNER JOIN
                       project
                       ON 
                           filee.project_id = project.project_id
                       INNER JOIN
                       file_type
                       ON 
                           filee.file_type = file_type.file_type_id
                   WHERE
                       filee.file_apporve = 1 AND
                       filee.teacher_id = '$stid' ";
                       $result = $con->query($sql);
                       if ($result->num_rows > 0) {
   
                           while($row = $result->fetch_assoc()) {
                            
                               echo '<tr>
                <td>' . $row["file_type_name"].'</td>
                <td>' . $row["file_detail"].'</td>
                <td style="display:none;">' . $row["project_name"].'</td>
                <td><a type="button" href="' . $row["file_link"].' " target="_blank"
                class="btn btn-info btn-xs"
               >
                <span class="icon icon-sm">
                    <span class="fas fa-eye icon-dark"></span>
                </span>
                
            </a></td>
                <td>
                
                <a type="button" href="index.php?FileCF=req&ID=' . $row["file_id"].'"
                class="btn btn-success btn-xs"
               >
                <span class="icon icon-sm">
                    <span class="fa fa-check icon-dark"></span>
                </span>
                
            </a>
                
            <a type="button" href="index.php?FileDel=req&ID=' . $row["file_id"].'"
                class="btn btn-danger btn-xs"
               >
                <span class="icon icon-sm">
                    <span class="fas fa-trash-alt icon-dark"></span>
                </span>
                
            </a>
                
                
                
                </td>             
            </tr>';
                                                   

                                
							 
        }
    }
    $con->close();
    ?>


            </tbody>
    </table>

            </div>
        </div>
        </div>

        <?php

include '../../conn.php';
if (isset($_GET["FileDel"] )) {


    echo
        "<script> 
            Swal.fire({
                icon: 'warning',
                title: 'ลบไฟล์เอกสาร?',
                text: 'เเน่ใจว่าต้องการลบ!',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ใช่',
                cancelButtonText: 'ไม่!'
            }).then((result) => {
                if (result.isConfirmed) {
                    
                    location = 'index.php?CFdel=req&ID={$_GET["ID"]}'
                }else{
                    
                    location = 'index.php'
                }
            }); 
    </script>";

}


if (isset($_GET["CFdel"])) {



    $filee_id = $_GET["ID"];



  
  $sql = "DELETE FROM filee  WHERE file_id='$filee_id' ";


    
    
    



if (mysqli_query($con, $sql)) {
    echo
        "<script> 
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'ลบไฟล์เรียบร้อยแล้ว!',
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
            title: 'ลบไฟล์ไม่สำเร็จ', 
        }).then(() => {window.history.back()});
    </script>";
}
}





if (isset($_GET["FileCF"])) {



    $filee_id = $_GET["ID"];



  
  $sql = "UPDATE filee SET

file_apporve =2  WHERE file_id='$filee_id' ";


    
    
    



if (mysqli_query($con, $sql)) {
    echo
    "<script> 
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'ยืนยันไฟล์สำเร็จ!',
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
    title: 'ยืนยันไฟล์ไม่สำเร็จ', 
}).then(() => {window.history.back()});
</script>";
}
}

mysqli_close($con);
?>

        <?php include '../footer.php';?>

    </main>

    <!-- Core -->
    <script src="../../vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../vendor/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Vendor JS -->
    <script src="../../vendor/onscreen/dist/on-screen.umd.min.js"></script>

    <!-- Slider -->
    <script src="../../vendor/nouislider/distribute/nouislider.min.js"></script>

    <!-- Jarallax -->
    <script src="../../vendor/jarallax/dist/jarallax.min.js"></script>

    <!-- Smooth scroll -->
    <script src="../../vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Count up -->
    <script src="../../vendor/countup.js/dist/countUp.umd.js"></script>

    <!-- Notyf -->
    <script src="../../vendor/notyf/notyf.min.js"></script>

    <!-- Charts -->
    <script src="../../vendor/chartist/dist/chartist.min.js"></script>
    <script src="../../vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

    <!-- Datepicker -->
    <script src="../../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

    <!-- Simplebar -->
    <script src="../../vendor/simplebar/dist/simplebar.min.js"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Volt JS -->
    <script src="../../assets/js/volt.js"></script>
    <!-- Datatable JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.1.2/js/dataTables.rowGroup.min.js"></script>
    
</body>

</html>
<?php }else{

Header("Location: ../404/404.php");

    }
    
    
    
    ?>