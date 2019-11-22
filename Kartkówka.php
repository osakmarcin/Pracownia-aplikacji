<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="imie" autofocus autocomplete="off"><br><br>
      <input type="submit" name="przycisk" value="Zatwierdź">


    </form>
<?php
if(!empty($_POST['imie'])){
$imie = $_POST['imie'];
$ilosc = strlen($imie);

echo "Dane pobrane od użytkownika:$nazwisko, ilość liter: $ilosc <br>";

//sanityzacja kodu
//usówanie białych znakówa
$poprawne= trim($nazwisko);
$ilosc= strlen($poprawne);

//ograniczenie do 10 znaków substr
$poprawne = substr($poprawne, 0, 10);

//zamiana na małe litery(strtolower)
$poprawne= strtolower($poprawne);


//zamiana pierwszej litery na dużą
$poprawne= ucfirst($poprawne);
echo "Długośc imienia po wyczyszczeniu białych znaków: $ilosc, imie:
$poprawne<br>";



}else{
  echo" Wypełnij pole imię!";
}

 ?>

  </body>
</html>
