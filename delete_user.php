<?php

$connect=mysqli_connect("localhost","root","","komis");
$id=$_GET[`id`];

$sql = "DELETE FROM `user` WHERE `user`.`id` = '$id'";

if($result=mysqli_query($connect, $sql)){
  echo"Usunięto użytkownika";
}else{
  echo"Usunieto użytkownika;
}
 ?>
