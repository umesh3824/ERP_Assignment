<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "erp";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}


/* Some Constant Variables*/
$returnData = array("status"=>"false", "message"=>" ", "data"=>[]);
$types=['jpg','png','jpeg','gif'];
?>