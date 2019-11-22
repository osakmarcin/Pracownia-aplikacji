<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form method="post">
  Login <input type="text" name="login" autofocus><br>
  Hasło <input type="password" name="haslo"><br>
    <input type="submit" name="button" value="zatwierdź">
</form>
  </body>
</html>
<?php
if (!empty($_POST['login'])){
  $login = $_POST['login'];
  $ilosc = strlen($login);
  echo "Dane pobrane od użytkownika: $login, ilość liter: $ilosc<br>";
  $poprawne = trim($login);
  $poprawne = substr($poprawne, 0 ,12);
  $ilosc = strlen($poprawne);
  $poprawne = strtolower($poprawne);
  $poprawne = ucfirst($poprawne);
  echo "Długość imienia po wyczyszczeniu z białych znaków: $ilosc, imię: $poprawne";
}
else{
  echo"wypelnij pole imie";
}
?>