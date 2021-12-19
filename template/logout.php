<?php 
session_start();
session_unset($_SESSION['userId']);
unset($_SESSION['userId']);
session_destroy();
header("Location:../");

?>