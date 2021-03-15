

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectstudenv3";
//projectstudenv2
// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
date_default_timezone_set("Asia/Bangkok");
?>