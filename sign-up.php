<?php include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>Volt Premium Bootstrap Dashboard - Sign up page</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="ระบบนัดพบอาจารย์ที่ปรึกษาโครงงาน">
<meta name="author" content="Themesberg">
<meta name="description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
<meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, free bootstrap 5 dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
<link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://demo.themesberg.com/volt">
<meta property="og:title" content="Volt Premium Bootstrap Dashboard - Sign up page">
<meta property="og:description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
<meta property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-bootstrap-5-dashboard/volt-bootstrap-5-dashboard-preview.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://demo.themesberg.com/volt">
<meta property="twitter:title" content="Volt Premium Bootstrap Dashboard - Sign up page">
<meta property="twitter:description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
<meta property="twitter:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-bootstrap-5-dashboard/volt-bootstrap-5-dashboard-preview.jpg">

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="assets/img/favicon/site.webmanifest">
<link rel="mask-icon" href="assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<!-- Fontawesome -->
<link type="text/css" href="vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<!-- Notyf -->
<link type="text/css" href="vendor/notyf/notyf.min.css" rel="stylesheet">

<!-- Volt CSS -->
<link type="text/css" href="css/volt.css" rel="stylesheet">

<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>
    <main>

        <!-- Section -->
        <section class="d-flex align-items-center my-5 mt-lg-6 mb-lg-5">
            <div class="container">
                <p class="text-center"><a href="index.php" class="text-gray-700"><i class="fas fa-angle-left mr-2"></i>กลับสู่หน้าหลัก</a></p>
                <div class="row justify-content-center form-bg-image" data-background-lg="assets/img/illustrations/signin.svg">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="mb-4 mb-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 class="mb-0 h3">สมัครสมาชิก</h1>
                            </div>
                         
                            <form name="add_student" method="post" action="sign-up_ac.php">
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="id">รหัสนักศึกษา</label>
                                    <div class="input-group">
                                        <span class="input-group-text" ><span class="fas fa-envelope"></span></span>
                                        <input type="text" class="form-control" placeholder="594235XXX" id="id" name="id" autofocus required>
                                    </div>  
                                </div>
                                <!-- End of Form -->

                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="name">ชื่อ - นามสกุล</label>
                                    <div class="input-group">
                                        <span class="input-group-text" ><span class="fas fa-envelope"></span></span>
                                        <input type="text" class="form-control" placeholder="นายสมชาย ใจดี" id="name" name="name" required>
                                    </div>  
                                </div>
                                <!-- End of Form -->

                                 <!-- Form -->
                                 <div class="form-group mb-4">
                                    <label for="phone">เบอร์โทรศัพท์</label>
                                    <div class="input-group">
                                        <span class="input-group-text" ><span class="fas fa-envelope"></span></span>
                                        <input type="text" class="form-control" placeholder="0812345678" id="phone" name="phone" required>
                                    </div>  
                                </div>


                                <?php 
$query = "SELECT
major.student_major_id as major_id,
major.student_major_name as major_name
FROM
major
ORDER BY
major.student_major_id ASC";
$result = mysqli_query($con, $query);

?>

                                <div class="form-group mb-4">
                                    <label for="major">สาขาวิชา</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><span class="fas fa-envelope"></span></span>
                                        

                                        <select class="form-select" id="major" name="major" aria-label="Default select example" required>
                        <option selected>เลือกสาขาวิชา</option>
                       
                        <?php foreach($result as $results){?>
    <option value="<?php echo $results["major_id"];?>">
      <?php echo $results["major_name"]; ?>
      </option>
    <?php } ?>
                    </select>

                                    </div>  
                                </div>
                                <!-- End of Form -->

                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="email">อีเมลล์</label>
                                    <div class="input-group">
                                        <span class="input-group-text" ><span class="fas fa-envelope"></span></span>
                                        <input type="email" class="form-control" placeholder="594235XXX@parichat.skru.ac.th" value="@parichat.skru.ac.th" id="email"  name="email"  required>
                                    </div>  
                                </div>
                                <!-- End of Form -->

                                <div class="form-group">
                                    <!-- Form -->
                                    <div class="form-group mb-4">
                                        <label for="password">รหัสผ่าน</label>
                                        <div class="input-group">
                                            <span class="input-group-text" ><span class="fas fa-unlock-alt"></span></span>
                                            <input type="password" placeholder="กรอกรหัสผ่าน" class="form-control" id="password" name="password" required>
                                        </div>  
                                    </div>
                                    <!-- End of Form -->
                                    <!-- Form -->
                                    <!-- <div class="form-group mb-4">
                                        <label for="confirm_password">ยืนยันรหัสผ่าน</label>
                                        <div class="input-group">
                                            <span class="input-group-text" ><span class="fas fa-unlock-alt"></span></span>
                                            <input type="password" placeholder="กรอกรหัสผ่านอีกครั้ง" class="form-control" id="confirm_password"  name="confirm_password" required>
                                        </div>  
                                    </div> -->
                                    <!-- End of Form -->
                                     <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="id_project">รหัสโครงงาน </label>
                                    <div class="input-group">
                                        <span class="input-group-text" ><span class="fas fa-envelope"></span></span>
                                        <input type="text" class="form-control" placeholder="00000" id="id_project"  name="id_project" required  aria-describedby="id_project-describ" >
                                
                               
                                    </div>  
                                    <small id="id_project-describ"
                                    class="form-text text-muted">หากไม่ทราบรหัสโครงงานให้กรอก 1111</small>
                                </div>
                                <!-- End of Form -->

                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="checkbox" value="" id="terms" required>
                                        <label class="form-check-label" for="terms">
                                            ยอมรับข้อตกลง <a href="#">อ่านข้อตกลง</a>
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-block btn-primary">สมัครสมาชิก</button>
                            </form>
 <!--                            <div class="mt-3 mb-4 text-center">
                                <span class="font-weight-normal">or</span>
                            </div> -->
                            
                            <div class="d-flex justify-content-center align-items-center mt-4">
                                <span class="font-weight-normal">
                                    เป็นสมาชิกแล้ว ?
                                    <a href="login.php" class="font-weight-bold">เข้าสู่ระบบ</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
<script src=" vendor/jarallax/dist/jarallax.min.js"></script>

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

    
</body>

</html>

