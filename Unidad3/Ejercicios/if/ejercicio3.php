<?php
/**
 * Ejercicio 3
 * Carga fecha de nacimiento en variables y calcula la edad.
 */

$fechaNac = "10/09/2001";

$fechaNac = explode("/",$fechaNac);

$edad =(date("md", date("U", mktime(0, 0, 0, $fechaNac[0], $fechaNac[1], $fechaNac[2]))) > date("md")
? ((date("Y") - $fechaNac[2]) - 1)
: (date("Y") - $fechaNac[2]));
echo "Tienes: " . $edad . " años";
echo '<br>';
echo '<a href="https://github.com/RaulPantoja/DesarrolloWebServidor/blob/main/Unidad3/Ejercicios/ejercicio3.php">GitHub</a>';
?>