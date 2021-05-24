<?php session_start();?>


<!DOCTYPE html>
<html lang="en">

<head> 
<?php include 'pages/title.php';?>

<?php include 'meta.php';?>

<!-- Fontawesome -->
<link type="text/css" href="./vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<!-- Notyf -->
<link type="text/css" href="./vendor/notyf/notyf.min.css" rel="stylesheet">

<!-- Volt CSS -->
<link type="text/css" href="./css/volt.css" rel="stylesheet">

<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
  <!-- datatable CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">

<!-- นำเข้า  Javascript จาก  Jquery -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- นำเข้า  Javascript  จาก   dataTables -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js">
</script>

 
<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
<script type="text/javascript" charset="utf-8">
    $(document).ready(function () {
        $('#example').dataTable({
            "lengthChange": false,
            
        "ordering": false,
        "info":     false,

            
            "oLanguage": {
                "order": [[ 1, 'desc' ]],
                "sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
                "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
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
        });
    });
</script>




<?php include 'pages/dateth.php';?>
</head>

<body>

    <header class="header-global">
    <nav id="navbar-main" aria-label="Primary navigation" class="navbar navbar-main navbar-expand-lg navbar-theme-primary pt-4 navbar-dark">
        <div class="container position-relative">
            <div class="navbar-collapse collapse mr-auto" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="./index.php">
                                <img src="./assets/img/brand/light.svg" alt="Volt logo">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <a href="#navbar_global" class="fas fa-times" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" title="close" aria-label="Toggle navigation"></a>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                    <li class="nav-item mr-2">
                        <a href="#" class="nav-link">ระบบบันทึกการเข้าพบอาจารย์ที่ปรึกษาโครงงาน</a>
                    </li>
                   
                </ul>
            </div>


           

           
            <?php 

if (isset($_SESSION["UserID"]) || isset($_SESSION["TeacherID"])   ) {

	 if (isset($_SESSION["UserID"])) {
        echo'<div class="d-flex align-items-center ml-auto">
        <a href="pages/student_index"  class="btn btn-secondary text-dark mr-md-3"><span class="fas fa-user mr-2"></span>จัดการข้อมูล</a>
       <!--  <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/getting-started/quick-start/" target="_blank" class="btn btn-outline-soft d-none d-lg-block"><span class="fas fa-book mr-2"></span> Docs v1.2</a> -->
        <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>';
     }


     if (isset($_SESSION["TeacherID"])) {

if ($_SESSION["Teacherlevel"] == '"1"') {
    echo'<div class="d-flex align-items-center ml-auto">
    <a href="pages/teacher"  class="btn btn-secondary text-dark mr-md-3"><span class="fas fa-user mr-2"></span>จัดการข้อมูล</a>
   <!--  <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/getting-started/quick-start/" target="_blank" class="btn btn-outline-soft d-none d-lg-block"><span class="fas fa-book mr-2"></span> Docs v1.2</a> -->
    <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</div>';
 }

 if ( $_SESSION["Teacherlevel"] == "2"  ) {
    echo'<div class="d-flex align-items-center ml-auto">
    <a href="pages/teacher"  class="btn btn-secondary text-dark mr-md-3"><span class="fas fa-user mr-2"></span>จัดการข้อมูล</a>
   <!--  <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/getting-started/quick-start/" target="_blank" class="btn btn-outline-soft d-none d-lg-block"><span class="fas fa-book mr-2"></span> Docs v1.2</a> -->
    <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</div>';
} if ($_SESSION["Teacherlevel"] == "3") {
    echo'<div class="d-flex align-items-center ml-auto">
    <a href="pages/Admin"  class="btn btn-secondary text-dark mr-md-3"><span class="fas fa-user mr-2"></span>จัดการข้อมูล</a>
   <!--  <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/getting-started/quick-start/" target="_blank" class="btn btn-outline-soft d-none d-lg-block"><span class="fas fa-book mr-2"></span> Docs v1.2</a> -->
    <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</div>';
}

}




        


    
}else {
    echo' <div class="d-flex align-items-center ml-auto">
    <a href="./login.php"  class="btn btn-secondary text-dark mr-md-3"><span class="fas fa-user mr-2"></span> เข้าสู่ระบบ</a>
   <!--  <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/getting-started/quick-start/" target="_blank" class="btn btn-outline-soft d-none d-lg-block"><span class="fas fa-book mr-2"></span> Docs v1.2</a> -->
    <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</div>';
} ?>


        </div>
    </nav>
</header>
 

        <div class="preloader bg-soft flex-column justify-content-center align-items-center">
    <img class="loader-element animate__animated animate__jackInTheBox" src="./assets/img/brand/skru.png" height="60" alt="Volt logo">
</div>









        <!-- Hero -->
        <section class="section-header pb-9 pb-lg-12 bg-primary  ">
            <div class="container">
                <div class="row">


                <div class="col-12 col-xl-12 text-white">
                   <h2>ข่าวประชาสัมพันธ์</h2> 
                    <div class="card card-body bg-white border-light shadow-sm mb-4 text-black">
                    <div class="table-responsive">  
                    <table id="example" class="table table-striped table-bordered" width="100%"
                    >
                    <col style="width:5%">
                    <col style="width:90%">
                    <col style="width:5%">

                    <thead class="thead-dark">
                        <tr>
                            <th>วันที่</th>
                            <th>หัวข้อข่าว</th>
                            <th>เพิ่มเติม</th>
                            




                        </tr>
                    </thead>
                    <tbody>

                        <?php
                       include 'conn.php';
                        
					$sql = "SELECT
                    pr.pr_id, 
                    pr.pr_header, 
                    pr.pr_content, 
                    pr.pr_date
                FROM
                    pr
                ORDER BY
                    pr.pr_id DESC
                    ";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            $strDate = $row["pr_date"];
                            echo '<tr>
                                <td>'.DateThai($strDate).'</td>
                                <td>'. mb_substr($row["pr_header"],0,80,'UTF-8').'</td>
                                
                               <td>
                              
                               <input type="button" name="view" value="ดูรายละเอียด" id="'. $row["pr_id"].'" class="btn btn-info btn-sm view_datacom05" /></td>
                               
                            </tr>';
                                                   

                                
							 
						}
					}
					$con->close();
					?>


 



                    </tbody>
                    <tfoot>
                       
                    </tfoot>
                </table>



                </div>

                    </div>
                 </div>


                 
                <!--  <div class="col-12 col-xl-6">
                    <div class="card card-body bg-white border-light shadow-sm mb-4">
                        dddddddd
                    </div>
                 </div> -->



                </div>



                <div id="dataModalcom05" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                 
                     <h4 class="modal-title">รายละเอียดการเข้าพบ</h4>  
                </div>  
                <div class="modal-body" id="com05_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>  
                </div>  
           </div>  
      </div>  
 </div> 
 <script>  
  
 $(document).ready(function(){  
      $('.view_datacom05').click(function(){  
           var com05_id = $(this).attr("id");  
           $.ajax({  
                url:"select.php",  
                method:"post",  
                data:{com05_id:com05_id},  
                success:function(data){  
                     $('#com05_detail').html(data);  
                     $('#dataModalcom05').modal("show");  
                }  
           });  
      });  
 }); 
 </script>


              
        </section>
        
            </div>



     
                




             




       
    

 
 





    <!-- Core -->
<script src="vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Vendor JS -->
<script src="vendor/onscreen/dist/on-screen.umd.min.js"></script>

<!-- Slider -->
<script src="vendor/nouislider/distribute/nouislider.min.js"></script>

<!-- Jarallax -->
<script src="vendor/jarallax/dist/jarallax.min.js"></script>

<!-- Smooth scroll -->
<script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

<!-- Count up -->
<script src="vendor/countup.js/dist/countUp.umd.js"></script>

<!-- Notyf -->
<script src="vendor/notyf/notyf.min.js"></script>

<!-- Charts -->
<script src="vendor/chartist/dist/chartist.min.js"></script>
<script src="vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

<!-- Datepicker -->
<script src="vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

<!-- Simplebar -->
<script src="vendor/simplebar/dist/simplebar.min.js"></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Volt JS -->
<script src="assets/js/volt.js"></script>

<!-- Datatable JS -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  



 
 
</body>

</html>