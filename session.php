<?php
session_start();
if(!isset($_SESSION['Email'])){
    header("location: login.php");
}
?>