
<?php session_start();?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Project</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="ระบบนัดพบอาจารย์ที่ปรึกษาโครงงาน">
<meta name="author" content="Themesberg">
<meta name="description" content="เป็นระบบที่นักศึกษาสามารถนัดพบอาจารย์ที่ปรึกษาโครงงานได้ง่ายๆและสามารถติดตามและประวัติการนัดพบได้">
<meta name="keywords" content="ระบบนัดพบอาจารย์ที่ปรึกษา, SKRU, เทคโนโลยีสารสนเทศสงขลา, มรภสงขลา, นัดพบอาจารย์skru, คณะวิทยาศาสตร์และเทคโนโลยีสารสนเทศ มหาวิทยาลัยราชภัฏสงขลา, มหาวิทยาลัยราชภัฏสงขลา" />
<link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://demo.themesberg.com/volt">
<meta property="og:title" content="ระบบนัดพบอาจารย์ที่ปรึกษาโครงงาน">
<meta property="og:description" content="เป็นระบบที่นักศึกษาสามารถนัดพบอาจารย์ที่ปรึกษาโครงงานได้ง่ายๆและสามารถติดตามและประวัติการนัดพบได้">
<meta property="og:image" content="https://i.ibb.co/ssKYzqR/xxs.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://demo.themesberg.com/volt">
<meta property="twitter:title" content="ระบบนัดพบอาจารย์ที่ปรึกษาโครงงาน">
<meta property="twitter:description" content="เป็นระบบที่นักศึกษาสามารถนัดพบอาจารย์ที่ปรึกษาโครงงานได้ง่ายๆและสามารถติดตามและประวัติการนัดพบได้">
<meta property="twitter:image" content="https://i.ibb.co/ssKYzqR/xxs.jpg">

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="assets/img/favicon/site.webmanifest">
<link rel="mask-icon" href="assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">




  <!-- Favicons -->
  <link href="cssn/img/favicon.png" rel="icon">
  <link href="cssn/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  <!-- Libraries CSS Files -->
  <link href="cssn/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="cssn/lib/animate/animate.min.css" rel="stylesheet">
  <link href="cssn/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="cssn/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="cssn/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="cssn/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="cssn/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->

  <?php include 'pages/dateth.php';?>
</head>

<body id="body">

  <!--==========================
    Top Bar
  ============================-->
 

  <!--==========================
    Header
  ============================-->

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#body"><a href="#body" class="scrollto"></a> <b> ระบบบันทึกการเข้าพบอาจารย์ที่ปรึกษาโครงงาน </b> </a></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll d-flex" style="--bs-scroll-height: 100px;">
        
        
      </ul>
      <form class="d-flex">
      <ul class="nav-menu">
          <li class="menu-active"><a href="#body">หน้าแรก</a></li>
      
          <li><a href="#services">ข่าวประชาสัมพันธ์</a></li>
          
          
          



          <?php 

if (isset($_SESSION["UserID"]) || isset($_SESSION["TeacherID"])   ) {

	 if (isset($_SESSION["UserID"])) {
        echo'<li><a href="pages/student_index">จัดการข้อมูล</a></li>';
    }
    if (isset($_SESSION["TeacherID"])) {

        if ($_SESSION["Teacherlevel"] == '"1"') {
            echo'<li><a href="pages/teacher">จัดการข้อมูล</a></li>';
        }
       
        if ( $_SESSION["Teacherlevel"] == "2"  ) {
            echo'<li><a href="pages/teacher">จัดการข้อมูล</a></li>';
        } if ($_SESSION["Teacherlevel"] == "3") {
            echo'<li><a href="pages/Admin">จัดการข้อมูล</a></li>';
        }
        
        }
        
        
        
        
                
        
        
            
        }else {
            echo'<li><a href="./login.php">เข้าสู่ระบบ</a></li>';
        } ?>


        </ul>
      </form>
    </div>
  </div>
</nav>




  

  <!--==========================
    Intro Section
  ============================-->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="cssn/img/intro-carousel/NewProject.jpg" class="d-block w-100  " alt="...">
    </div>
    <div class="carousel-item">
      <img src="cssn/img/intro-carousel/NewProject1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="cssn/img/intro-carousel/NewProject2.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  <main id="main">

    <!--==========================
      About Section
    ============================-->


    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>ข่าวประชาสัมพันธ์</h2>
          <!-- <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p> -->
        </div>

        <div class="row">



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
LIMIT 6
                    ";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {
                            $strDate = $row["pr_date"];
                            echo '
          <div class="col-lg-12">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-bullhorn"></i></div>
              <h4 class="title"><a href="">'. $row["pr_header"].'</a></h4>
              <p class="description">'. $row["pr_content"].'</p>
              <p><b>ประกาศเมื่อ :</b> '.DateThai($strDate).'</p>
              </div>
          </div>';
                                                   

                                
							 
        }
    }
    $con->close();
    ?>

       
        </div>

      </div>
    </section><!-- #services -->

 
   <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  </main>

  <!--==========================
    Footer
  ============================-->
 



  <!-- JavaScript Libraries -->
  <script src="cssn/lib/jquery/jquery.min.js"></script>
  <script src="cssn/lib/jquery/jquery-migrate.min.js"></script>
  <script src="cssn/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="cssn/lib/easing/easing.min.js"></script>
  <script src="cssn/lib/superfish/hoverIntent.js"></script>
  <script src="cssn/lib/superfish/superfish.min.js"></script>
  <script src="cssn/lib/wow/wow.min.js"></script>
  <script src="cssn//owlcarousel/owl.carousel.min.js"></script>
  <script src="cssn/lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="cssn/lib/sticky/sticky.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="cssn/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="cssn/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>
</html>
