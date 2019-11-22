<?php

 $text0 = <<< T
    Zsł -
    Zespół
    Szkół
    Łączności
T;

  echo "Przed wywołaniem funkcji nl2br: <br> $text0",'<br>';
  echo "<br> Po wywołaniu funkcji nl2br: <br>"; echo nl2br($text0),'<br><hr>';

#####################################################

// zamaiana na małe litery

  $text1 = 'jaNUsZ';

  echo strtolower($text1),'<br>'; // janusz

  echo strtoupper($text1),'<br>'; // JANUSZ

####################################################

  $text2 = 'rAZ dWA trzy';

  echo ucfirst($text2), '<br>'; // pierwsza duża litera
  echo ucwords($text2), '<br>'; // wszystkie pierwsze litery duże

####################################################

 ?>
