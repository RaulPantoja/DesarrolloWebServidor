<?php
/**
 * Ejercicio 3 de php
 * Tablas de multiplicar del 1 al 10. Aplicar estilos en filas/columnas
 * @author Raul Pantoja
 */

$n=10;
$m=10;
//@include 'C:\xampp\htdocs\dwes\Unidad3\ejercicios\bucles\ejercicio3.css';

echo '<link rel="stylesheet" href="ejercicio3.css" type="text/css">';
echo "<table class='tabla'>";
for ($x=0; $x <= $m; $x++) { 
    echo "<td class='td'>",$x,"</td>";
}
for ($i=1; $i <= $n; $i++) {
    echo "<tr>";
    echo "<td class='td'>",$i,"</td>";
    for ($x=1; $x <= $m; $x++) { 
        echo "<td class='td'>",$i*$x,"</h3>";
    }
    echo "</tr>";
}
echo "</table>";
echo '<a href="https://github.com/RaulPantoja/DesarrolloWebServidor/blob/main/Unidad3/Ejercicios/ejercicio5.php"target="_blank"
>GitHub</a>';
?>



