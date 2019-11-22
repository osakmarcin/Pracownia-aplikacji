<?php
  // potęga

  $potega = 2 ** 10; //1024
  echo $potega, '<hr>';

  //operatory bitowe: & | ~ ^ << >>

  $x = 0b1010;
  $x = $x >> 1; //101 //5

  echo $x, '<br>';

  $x = $x << 2; //101 //20

  echo $x,'<br><hr>';

####################################################

  $x = 1;
  $y = 1.0;
  echo gettype($x),'<br>';  //integer
  echo gettype($y),'<br>';  //double


  if ($x == $y)
    echo "Liczby równe<br>"; //=
  else
    echo "Liczby różne<br>";

  if ($x === $y) // sprawdzanie typu
    echo "Typy zmiennych identyczne<br>";
  else
    echo "Typy zmiennych różne<br>"; //=

  echo '<hr/>';
######################################################

  //<=> od wersji 7.
  $x1 = 10;
  $y1 = 100;
  $wynik1 = $x1 <=> $y1; // jeżeli wartość po prawej jest większa to = -1 , po lewej = 1 , równe = 0
  echo $wynik1;

  echo '<hr/>';

######################################################
  //ZADANKO

  $x2 = 2;
  echo $x2++, ', '; //2
  echo ++$x2, ', '; //4
  echo $x2, ', ';   //4
  $y2 = $x2++;
  echo $y2, ', ';   //4
  $y2 = ++$x2;
  echo $y2, ', ';   //6
  echo ++$y2; //7

  echo '<hr/>';

  #####################################################

  //operatory rzutowania
  //bool, int, float, string, array, object, unset

  $text3 = '123ssd';

  $x3 = (int)$text3;
  echo $x3,'<br>'; //123

  $x6 = (float)$text3;
  echo $x6,'<br>'; //123
  echo gettype($x6); // double

  echo '<br/>';

  $text4 = -1;
  $x4 = (bool)$text4;
  echo $x4, '<br>'; // 1

  $x5 = (unset)$text4;
  echo $x5;
  echo gettype($x5); //NULL

  //rozmiar typu integer
  echo '<hr/>';

  echo PHP_INT_SIZE; // 8

  echo '<hr/>';

  // @ operator ignorowania błędów

  $w;
  echo @$w;
  echo @gettype($w); //NULL

  echo '<br/>';

  $text5 = 'ZSŁ';
  $text6 = "123";
  echo is_string($text5); // true = 1
  echo is_bool($text5);   // reszta false
  echo is_float($text5);
  echo is_int($text5);
  echo is_null($text5);

  echo '<br/>';
  ###############################################

  //zmienne superglobalne

  //$_GET, $_POST, $_COOKIE, $_FILES, $_SESSION, $_SERVER

  echo $_SERVER['SERVER_PORT']; // 80

  // uzupełnić od kogoś!



 ?>
