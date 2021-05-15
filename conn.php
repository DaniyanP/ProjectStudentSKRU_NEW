

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectstudenv3";
$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
date_default_timezone_set("Asia/Bangkok");
?>