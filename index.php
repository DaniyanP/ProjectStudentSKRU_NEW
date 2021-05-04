<!--

=========================================================
* Volt - Bootstrap 5 Admin Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2020 Themesberg (https://www.themesberg.com)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
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
                            <a href="./index.html">
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
            <div class="d-flex align-items-center ml-auto">
                <a href="./login.php"  class="btn btn-secondary text-dark mr-md-3"><span class="fas fa-download mr-2"></span> เข้าสู่ระบบ</a>
               <!--  <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/getting-started/quick-start/" target="_blank" class="btn btn-outline-soft d-none d-lg-block"><span class="fas fa-book mr-2"></span> Docs v1.2</a> -->
                <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>
</header>
    <main>

        <div class="preloader bg-soft flex-column justify-content-center align-items-center">
    <img class="loader-element animate__animated animate__jackInTheBox" src="./assets/img/brand/light.svg" height="60" alt="Volt logo">
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
                    <col style="width:95%">
                    

                    <thead class="thead-dark">
                        <tr>
                            <th>วันที่</th>
                            <th>หัวข้อข่าว</th>
                            




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
            </div>
            <figure class="position-absolute bottom-0 left-0 w-70 d-none d-md-block mb-n2"><svg class="fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4"><path d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z"></path></svg></figure>       
        </section>
        
       
    </main>
    

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

</body>

</html>