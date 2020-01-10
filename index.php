<?php

session_start();

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Baza uprawnienia</title>
    <link rel="stylesheet" href="css.css">
  </head>
  <body>
<h1>Tabela - user</h1>

  <?php
//$connect = mysqli_connect("localhost","root","","komis");
$connect = mysqli_connect("localhost","janusz","zaq1@WSX","komis");
mysqli_set_charset($connect, "utf8");

$sql = "SELECT id,name,surname,birthday FROM `user`";
$result = mysqli_query($connect, $sql);
mysqli_close($connect);
if (isset($SESSION['result'])) {
  echo $_SESSION['result'];
  unset( $_SESSION['result']);
}

echo<<<TABLE
<table>
  <tr>
    <th>Imię</th>
    <th>Nazwisko</th>
    <th>Data urodzenia</th>
    <th>Usuń użytkownika</th>
  </tr>


TABLE;

while($row = mysqli_fetch_assoc($result)){
  echo <<<ROW
  <tr>
    <td>$row[name]</td>
    <td>$row[surname]</td>
    <td>$row[birthday]</td>
    <td><a href="./delete_user.php?id=$row[id]">Usuń</a></td>
  </tr>
  ROW;
}


  ?>

</table>
<h1>Dodaj użytkownika</h1>
<form action="./script/add_user.php" method="post">
  <input type="text" name="name" placeholder="Janusz"><br><br>
  <input type="text" name="surname" placeholder="Nowak"><br><br>
  <input type="date" name="birthday"><br><br>
  <input type="submit" name="button" value="Zatwierdź">

</form>
<?php



 ?>


  </body>
</html>
