<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $pares = array();
    for ($i = 2; count($pares) < 10; $i += 2) {
        $pares[] = $i;
    }

    foreach ($pares as $numero) {
        print $numero . "<br>";
    }

    $datos = array(
    "nombre" => "Pedro",
    "nombre2" => "Ana",
    "edad" => 34,
    "numero" => 1);

    print_r($datos);

    $ciudades = array("Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago");

    foreach ($ciudades as $indice => $ciudad) {
    print "La ciudad con el índice " . $indice . " tiene el nombre " . $ciudad . "<br>";
    }

    $ciudades = array("MD" => "Madrid", "BCL" => "Barcelona", "LD" => "Londres", "NY" => "New York", "LA" => "Los Ángeles", "CCG" => "Chicago");

    foreach ($ciudades as $indice => $ciudad) {
    print "El índice de " . $ciudad . " es " . $indice . "<br>";
    }




     ?>






  </body>
</html>
