<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login ');
}else {
  header('location:home ');
}
?>