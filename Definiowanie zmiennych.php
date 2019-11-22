<?php
    echo "Zaczynamy :) <hr>";
      echo $_SERVER['SCRIPT_NAME'];       //
      echo $_SERVER['SCRIPT_PROTOCOL'];   //
      echo $_SERVER['DOCUMENT_ROOT'];     //

      $localFile = $_SERVER['DOCUMENT_ROOT'].$SERVER['SCRIPT_NAME'];

      echo '<br>';
      echo '<br>';

      $localFile = $_SERVER['DOCUMENT_ROOT'];
      $localFile .= $_SERVER['SCRIPT_NAME'];

      echo '<br>',$localFile;

##########################################################################

    define('NAME','Janusz');
    echo '<br>',NAME; //Janusz

    define('SURNAME','Anna');
    echo  '<br>',SURNAME; //Anna

##########################################################################
    //stałe predefiniowane

    echo '<br>';
    echo PHP_VERSION; // 5.6.14
    echo '<br>';
    echo gettype(PHP_VERSION); //string
    echo '<br>';

    if (PHP_VERSION > 5.6) {
      echo 'Nowa wersja PHP';
    }
    else {
      echo 'Stara wersja PHP';
    }

    echo PHP_OS, '<br>'; //WINNT
    echo _LINE_, '<br>'; //38
    echo _FILE_, '<br>';
    echo _DIR_, '<br>';





?>
