<?php
  session_start();
  if($_SESSION['loggedin'] == FALSE){
    header("location:index.php");
    die();
 }
?>