<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Trabajo Practico 2</title>
  </head>
  <body>
<?php
echo "Hola Mundo";
echo "<br />";
echo "<br />";
$saludo= "Hola Mundo";
echo $saludo;
echo "<br />" . "<br />";

$var_1= 600;
$var_2= 200;

$suma= $var_1+$var_2;
$resta= $var_1-$var_2;
$multi= $var_1*$var_2;
$divi= $var_1/$var_2;

echo "600+200= " . $suma;
echo "<br />" . "<br />";
echo "600-200= " . $resta;
echo "<br />" . "<br />";
echo "600X200= " . $multi;
echo "<br />" . "<br />";
echo "600/200= " . $divi;
echo "<br />" . "<br />";
/*kjhkjkjh*/

$ce_var= 20;
$form_fa= ($ce_var * 9/5) + 32;
echo "20° celcius son: " .  $form_fa;
echo "° fahrenheit";
echo "<br />" . "<br />";

$lado_var1= 18;
$lado_var2= 12;
$rect_per= ($lado_var1*2)+($lado_var2*2);
$rect_area= $lado_var1* $lado_var2;
echo "El perimetro del rectangulo es: " . $rect_per;
echo "<br />";
echo "El area del rectangulo es: " . $rect_area;
echo "<br />" . "<br />";


$circ_rad= 30;
$radio_var= pow($circ_rad, 2);
$circ_area= pi() * $radio_var;
$circ_per= 2.0*M_PI*$circ_rad;

echo "El area es: " . $circ_area;
echo "<br />";
echo "El perimetro del circulo es: " . $circ_per;

?>

  </body>
</html>
