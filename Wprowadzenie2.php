<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Logowanie </title>
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

      <form method="get">

        <input type="text" name="name" placeholder="Imię" autofocus><br><br>
        <input type="text" name="surname" placeholder="Nazwisko"><br><br>
        <input type="text" name="age" placeholder="Wiek"><br><br>
        <input type="submit" name="button" value="Zatwierdź"><br><br>

      </form>

    <?php

    if(isset($_GET['button'])) {

      if(!empty($_GET['name']) && !empty($_GET['surname']) && !empty($_GET['age'])) {

        $imie = $_GET['name'];
        $nazwisko = $_GET['surname'];
        $wiek = $_GET['age'];

        echo "Imię: $imie <br> Nazwisko: $nazwisko <br> Wiek: $wiek";

      }

    }



    ?>


    </div>
  </body>
</html>
