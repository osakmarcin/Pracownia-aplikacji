<?php
session_start();
require_once('./connect/connect.php')
$connect=mysqli_connect("localhost","root","","komis");
$id=$_GET['id'];

$sql = "DELETE FROM `user` WHERE `user`.`id` = '$id'";

if($result=mysqli_query($connect, $sql)){
$_SESSION['result']="Użytkownik został usunięty";
  header('location:./index.php');
}
 ?>
