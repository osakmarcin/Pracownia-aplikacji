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
      width:1000px; height:1500px; color:#FFFFFF; background-color:#000000; text-align:center; margin:auto;
    }
    body
    {
      background-color:#FFFFFF;
    }
    </style>

    <div id="container">

      <?php

        $lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        echo $lorem,'<hr>';

// podwijanie lorem ipsum
        $col = wordwrap($lorem, 15, '<br>');
        echo $col,'<hr>';

// czyszczemie zawartości bufora
//        ob_clean();

// usuwanie białych znaków
        $name = 'Kasia';
        $name1 = 'Konrad';

        echo 'Długość zmiennej $name: ',strlen($name),'<br>';
        echo 'Długość zmiennej $name1: ',strlen($name1),'<br>';

        echo strlen(ltrim($name1));
        echo strlen(rtrim($name1));
        echo strlen(trim($name1));
        echo '<hr>';

// przeszukiwanie ciągu znaków
        $address = 'Poznań, ul.Przełajowa 5,tel. (61) 445-35-20';
        $search = strstr($address, 'tel.'); // stristr ignoruje wielkość liter
        echo $search, '<br>';  //tel. (61) 445-35-20
        echo '<hr>';

        $mail = strstr('zsl@gmail.com','@');
        echo $mail, '<br>'; //@gmail.com
        echo '<hr>';

##############################################################################

      $ciag1 = 'a';
      $ciag2 = 'b';

      echo strcmp($ciag1,$ciag2); // -1
      echo strcmp('d','a'); // 1
      echo strcmp('d','d'); // 0
      echo strcmp('aac','aa'); // 1
      echo '<hr>';

//pozycja
      echo strpos('abcdedg','bc'); // 1
      echo strpos('abcdabcd','ab'); // 0
      echo '<hr>';

      $text1 = 'abcd';
      $text2 = 'a';

      if (strpos($text1,$text2 == false)) {
        echo "Ciąg $text2 nie został znaleziony w ciągu $text1",'<hr>';
      }
      else {
        echo "Ciąg $text2 został znaleziony w ciągu $text1",'<hr>';
      }

// przetwarzanie ciągu znaków
      $replace = str_replace('zsl','zsk','Technikum informatyczne - zsl'); // (co, na co, w czym)
      echo $replace, '<br>';
      echo '<hr>';

//substr
      $surname = substr('Janusz Kowalski', 3); // po przecinku ilość znaków
      echo $surname, '<br>'; // usz Kowalski

      $surname = substr('Janusz Kowalski', -3);
      echo $surname, '<br>'; // ski

      $surname = substr('Janusz Kowalski', -8);
      echo $surname, '<br>'; // Kowalski

      $surname = substr('Janusz Kowalski', 7, 5);
      echo $surname, '<br>'; // Kowal
      echo '<hr>';

##########################################################################

// zamiana polskich znaków
      $login = 'żółć i gęś';
      $censore = array('ą','ę','ś','ż','ź','ć','ó','ń','ł');
      $replace = array('a','e','s','z','z','c','o','n','l');

      $newlogin = str_replace($censore, $replace, $login);
      echo $newlogin, '<hr>';

/*
      Napisz apke cenzorującą zdanie podane przez użytkownika,
      Użytkownik podaje dane w formularzu
      Zamień słowo: zsk, zse, zsł na ciąg '**####**'
      Wyświetl dane:
      - Dane bez poprawy
      - Dane z poprawą

      echo <<< FORM
      <form method="post">
        <input type="text" name="dane" placeholder="Wpisz zdanie: "><br><br>
        <input submit="dane" value="Zatwierdź">
      </form>
FORM;

      if (inset($_POST['dane'])) {
        $data = $_POST['dane'];
        echo $data;
      }
*/
/*
      $censore = array('zsk','zse','zsł');
      $replace = '**###**';
      $correct = str_replace($censore, $replace, $data);

      echo "Dane bez poprawy: $data <br>";
      echo "Dane po poprawie: $correct <br>";
*/

       ?>

     </div>
  </body>
</html>
