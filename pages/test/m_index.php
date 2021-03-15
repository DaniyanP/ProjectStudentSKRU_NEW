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

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">

<?php 
$query2 = "SELECT
meet_check.meet_check_id as m_id,
meet_check.meet_check_name as m_name
FROM
meet_check
ORDER BY
meet_check.meet_check_id ASC";
$result2 = mysqli_query($con, $query2);

?>

<?php 
$query3 = "SELECT
subject_hash_project.sp_subject_id , 
subject_hash_project.sp_project_id as ss_project_id, 
project.project_name as ss_project_name
FROM
subject_hash_project
INNER JOIN
project
ON 
    subject_hash_project.sp_project_id = project.project_id

GROUP BY
subject_hash_project.sp_project_id
ORDER BY
subject_hash_project.sp_project_id ASC";
$result3 = mysqli_query($con, $query3);

?>


$(document).ready(function(){

	var rows = 1;
	$("#createRows").click(function(){
						var tr = "<tr>";
						tr = tr + "<td><input type='text' name='txtCustomerID"+rows+"' id='txtCustomerID"+rows+"' size='5'></td>";
                        tr = tr + "<td><select class='form-select' name='txtName"+rows+"' id='txtName"+rows+"'><option selected>---เลือก---</option>                        <?php foreach($result2 as $results2){?>
    <option value='<?php echo $results2["m_id"];?>'>      <?php echo $results2['m_name']; ?></option><?php } ?></td>";
    tr = tr + "<td><select class='form-select' name='txtEmail"+rows+"' id='txtEmail"+rows+"'><option selected>---เลือก---</option>                        <?php foreach($result3 as $results3){?>
    <option value='<?php echo $results3["ss_project_id"];?>'>      <?php echo $results3['ss_project_name']; ?></option><?php } ?></td>";
						/* tr = tr + "<td><input type='text' name='txtName"+rows+"' id='txtName"+rows+"' size='10'></td>"; */
						/* tr = tr + "<td><input type='text' name='txtEmail"+rows+"' id='txtEmail"+rows+"' size='15'></td>"; */
						tr = tr + "<td><input type='text' name='txtCountryCode"+rows+"' id='txtCountryCode"+rows+"' size='5'></td>";
						tr = tr + "<td><input type='text' name='txtBudget"+rows+"' id='txtBudget"+rows+"' size='5'></td>";
						tr = tr + "<td><input type='text' name='txtUsed"+rows+"' id='txtUsed"+rows+"' size='5'></td>";
						tr = tr + "</tr>";
						$('#myTable > tbody:last').append(tr);
					
						$('#hdnCount').val(rows);
						rows = rows + 1;
		});

		$("#deleteRows").click(function(){
				if ($("#myTable tr").length != 1) {
					 $("#myTable tr:last").remove();
				}
		});

		$("#clearRows").click(function(){
				rows = 1;
				$('#hdnCount').val(rows);
				$('#myTable > tbody:last').empty(); // remove all
		});

	});
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

    <?php include '../menu_stu.php';?>


    <main class="content">

        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                                <li class="breadcrumb-item"><a href="../student_index"><span class="fas fa-home"></span></a></li>
                                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Bootstrap tables</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Navbar links -->
                    <?php include '../navbar.php';?>
                </div>
            </div>
        </nav>

        <div class="py-0">

            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">หัวข้อ</h1>
                    <p class="mb-0">อธิบายหัวข้อ
                    </p>
                </div>
                
            </div>
        </div>

        <div class="card border-light shadow-sm mb-4">
            <div class="card-body">
            <center>
 <form action="m_save.php" id="frmMain" name="frmMain" method="post">
<h1>jQuery Dynamic table input</h1>

<table width="600" border="1" id="myTable">
<!-- head table -->
<thead>
  <tr>
    <td width="91"> <div align="center">CustomerID </div></td>
    <td width="300"> <div align="center">Name </div></td>
    <td width="198"> <div align="center">Email </div></td>
    <td width="97"> <div align="center">CountryCode </div></td>
    <td width="59"> <div align="center">Budget </div></td>
    <td width="71"> <div align="center">Used </div></td>
  </tr>
</thead>
<!-- body dynamic rows -->
<tbody></tbody>
</table>
<br />
<input type="button" id="createRows" value="Add">
<input type="button" id="deleteRows" value="Del">
<input type="button" id="clearRows" value="Clear">
 <center>
 <br>
 <input type="hidden" id="hdnCount" name="hdnCount">
<input type="submit" value="Submit">
 </form>
               
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


</body>

</html>
