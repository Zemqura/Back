<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    print "<p>Ejercicio 1</p>\n";
    for ($i=1; $i <=100 ; $i++) {
      print "<p>$i</p>\n";
      // code...
    }
    print "<p>Ejercicio 2</p>\n";
    for ($i=100; $i >= 1; $i--) {
      print "<p>$i</p>\n";
      // code...
    }

    print "<p>Ejercicio 3</p>\n";
    for ($i=2; $i <= 100; $i+= 2) {
      print "<p>$i</p>\n";
      // code...
    }

    print "<p>Ejercicio 4</p>\n";
    for ($i=1; $i <= 100; $i+= 2) {
      print "<p>$i</p>\n";
      // code...
    }

    print "<p>Ejercicio 5</p>\n";
    $suma=0;
    for ($i = 1; $i <= 20; $i++) {
    $suma += $i;
    print "<p>$suma</p>\n";
      // code...
    }


    print "<p>Ejercicio 6</p>\n";
    $suma = 0;
    $i = 2;

    while ($i <= 20) {
    $suma += $i;
    print "<p>$suma</p>\n";
    $i += 2;
    }







     ?>







  </body>
</html>
