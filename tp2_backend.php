<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Practico 2</h1>
    <br>
    <?php
    $a= 8;
    $b= 12;
    echo "Ejercicio 1";
    echo "<br>";
    if ($a > 0) {
      echo "El número es positivo";
      echo "<br>";
      // code...
    }elseif ($a < 0) {
      echo "El número es negativo";
      echo "<br>";
      // code...
    } else {
      echo "El número es igual a 0";
      echo "<br>";
      echo "<br>";
      // code...
    }
    echo "<br>";
    echo "Ejercicio 2";
    echo "<br>";
    if ($a > 1 & $a < 10) {
      echo "El número es mayor a 1 y menor a 10";
      echo "<br>";
      echo "<br>";
      // code...
    }

    echo "Ejercicio 3";
    echo "<br>";
    if ($b > 10 || $b < 2) {
      echo "El número cumple la condición";
      echo "<br>";
      echo "<br>";
      // code...
    }

    echo "Ejercicio 4";
    echo "<br>";
    $numero1= 30;
    $numero2= 20;
    if ($numero1 > $numero2) {
      echo $numero1 - $numero2;
      echo "<br>";
      echo $numero1 + $numero2;
      echo "<br>";
      // code...
    } elseif ($numero2 > $numero1) {
      echo $numero2 * $numero1;
      echo "<br>";
      echo $numero2 / $numero1;
      echo "<br>";
      echo $numero2 % $numero1;
      echo "<br>";
      // code...
    } else {
      echo "Los números ingresados son iguales";
      // code...
    }

     ?>



  </body>
</html>
