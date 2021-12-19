<?php
include "../includes/connection.php";
include "../manage_activity.php";

$manageActivity=new ManageActivites($con);
$activityId=$_POST['activityId'];
$indata=$manageActivity->getSubActivites($activityId);
echo json_encode($indata);
?>