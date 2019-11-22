<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

     <style>
     #container
     {
       width:1000px; height:700px; color:#009900; background-color:#000000; text-align:center; margin:auto;
     }
     </style>

  <div id="container">
  <p> Witaj na stronie! </p>

  <?php
  //typ integer
  $calkowita = 10;
  $hex = 0xA;
  $oct = 021;
  $bin = 0b1011;

  echo "Liczba dziesiętna: $hex <br>"; // wypisał 10
  echo "Liczba ósemkowa: $oct <br>"; // wypisał 17
  echo "Liczba binarna: $bin <br><hr>"; // wypisał 11

  //typ zmiennoprzecinkowy
  // double , float
  $x = 3.5;
  echo "$x <br><hr>"; // wypisze 3.5

###########################################################

  //typ string
 $imie = 'Błażej';
 $surname = 'Błażyński';

 //echo phpinfo();
 $text = <<< ETYKIETA
  heredoc <br>
  Masz na imie: $imie <br>
  Nazwisko: $surname <hr>
ETYKIETA;

echo $text;

###########################################################

  $text1 = <<< E
  nowdoc <br>
  Masz na imie: $imie <br>
  Nazwisko: $surname <hr>
E;

echo $text1;

#########################################################

  $text2 = 'Poznań';
  echo "Zmienna o nazwie \$text2 ma wartość $text2."; // aby pozwolić podać w tekscie nazwe zmiennej piszemy \$

  ?>
</div>
  </body>
</html>
