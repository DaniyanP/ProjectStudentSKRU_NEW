<?php session_start();?>
<?php 

if (!$_SESSION["TeacherID"]){  

	  Header("Location: ../../login_te.php"); 

}else{?>
<?php include '../../conn.php';?>
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
    <?php include '../dateth.php';?>
    <style>
        .avatar {
            vertical-align: middle;
            width: 30px;
            height: 30px;
            border-radius: 50%;
        }
    </style>

<script type="text/javascript" charset="utf-8">
       $(document).ready(function() {
    var table = $('#example').DataTable( {
        
        orderFixed: [[2, 'DESC']],

        rowGroup: {
            dataSrc: 3
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
                                <li class="breadcrumb-item"><a href="../teacher"><span
                                            class="fas fa-home"></span></a></li>
                            
                                <li class="breadcrumb-item active" aria-current="page">ข้อมูลโครงงานที่ดูแล</li>
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
                    <h1 class="h4">รายชื่อโครงงานที่ดูแล</h1>
                    
                </div>

            </div>
        </div>

        <div class="card border-light shadow-sm mb-4">
            <div class="card-body">
                <div class="table-responsive">
                <table id="example" class="display" style="width:100%">


                <thead class="thead-dark">
            <tr>
                <th>รหัสโครงงาน</th>
                <th>ชื่อโครงงาน</th>
                <!-- style="display:none;" -->
                <th style="display:none;">สาขา</th>
                <th style="display:none;">รุ่นนักศึกษา</th>
               
                <th>เพิ่มเติม</th>
              
                
                
            </tr>
        </thead>
                        
                        <tbody>
                        <?php
           include '../../conn.php';
           $id_teacher =$_SESSION["TeacherID"];
               
					$sql = "SELECT
                    project_has_adviser.pha_project_id, 
                    project.project_name, 
                    project_has_adviser.pha_teacher_id, 
                    project_has_adviser.pha_type, 
                    project.project_status, 
                    project_has_adviser.pha_key
                FROM
                    project_has_adviser
                    INNER JOIN
                    project
                    ON 
                        project_has_adviser.pha_project_id = project.project_id
                WHERE
                    project.project_status = 1 and project_has_adviser.pha_teacher_id = '$id_teacher'
                                      
                   ";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            $std_c = substr($row["pha_project_id"], 3, 2);
                            $std_m = substr($row["pha_project_id"], 2, 1);
                            $std_res = $std_c.$std_m ;

                           
                            echo '
                            <tr>    
                            
                            
                             <td>'. $row["pha_project_id"].'&nbsp;&nbsp;';  
                             
                             if ($row["pha_type"]==1) {
                                echo '<span class="badge bg-success">หลัก</span>';
                                 
                             }else if ($row["pha_type"]==2) {
                                echo '<span class="badge bg-info ">ร่วม</span>';
                             }
                           
                             echo'</td>';


                             
                             echo '<td>'. mb_substr($row["project_name"],0,80,'UTF-8').'</td>';
                             
                            
                             include '../../conn.php';  
             $sqlm = "SELECT
             major.student_major_id, 
             major.student_major_name
         FROM
             major
         WHERE
             major.student_major_id = '$std_m'";
             $resultm = $con->query($sqlm);
             if ($resultm->num_rows > 0) {

                 while($rowm = $resultm->fetch_assoc()) {
                    $m_name = $rowm["student_major_name"];
                     echo '<td style="display:none;">' . $rowm["student_major_name"].'</td>';
                     
                   
                      
                 }
             }
             
          
 

                             echo'<td style="display:none;" >'.$std_c.''.$m_name.'</td>
                             <td><a class="btn btn-warning btn-sm" type="button" href="project_adviser.php?act=show&ID=' . $row["pha_project_id"].'"><span class="fas fa-eye mr-2" herf="#"></span>เพิ่มเติม</a></td>



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
<?php }?>