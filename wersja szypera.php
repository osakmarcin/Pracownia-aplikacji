<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sklep papierniczy</title>
  </head>
  <body>

    <?php

//skrypt1
$connect = new mysqli("localhost","root","","sklep");
mysqli_set_charset($connect,"utf8");

$sql = "SELECT `nazwa` From `towary` WHERE `promocja`=1";
$result = mysqli_query($connect, $sql);

echo"<ul>";
while ($row= mysqli_fetch_assoc($result)) {
  echo"<li>".$row['nazwa']."</li>";

}
  echo"</ul>";

     ?>

<form  method="post">
  <select name="towar">

  <?php
$sql = "SELECT `nazwa` from  `towary`";

$result = mysqli_query($connect ,$sql);
while($row = mysqli_fetch_assoc($result)) {
  echo"<option value=\"$row[nazwa]\">$row[nazwa]</option>";
}

    ?>

      </select>
      <input type="submit" name="button" value="Zatwierdź">
</form>

<?php
//skrypt2
if (isset($_POST["towar"])) {
  $towar=$_POST["towar"];
  //echo"$towar";
  $sql = "SELECT `cena` from `towary` WHERE `nazwa`='$towar'";

  $result = mysqli_query( $connect, $sql);
  $row = mysqli_fetch_assoc($result);

  echo round($row["cena"]*0.85,2);


}








mysqli_close($connect);
 ?>
  </body>
</html>
