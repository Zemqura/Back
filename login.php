<?php
$usuario= $_POST ["usuario"];
$contrasenia= $_POST ["pass"];

$ck_usuario= "admin";
$ck_pass= 1234;


if ($usuario == $ck_usuario && $contrasenia == $ck_pass ) {
header ("location: https://www.youtube.com/watch?v=mCdA4bJAGGk");
  // code...
} else {
header ("location: https://www.youtube.com/watch?v=3uUnrfiAzuw");
  // code...
}


 ?>
