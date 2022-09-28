<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php

$usuario = false;
$admin = true;

if($usuario == true){
    echo "<ul>
    <li>Pagina1</li>
    <li>Pagina2</li></ul>";
}else{
    echo "<ul>
    <li>Pagina1</li>
    <li>Pagina2</li>
    <li>Pagina3</li>
    <li>Pagina4</li></ul> ";
   
}
echo '<a href="https://github.com/RaulPantoja/DesarrolloWebServidor/blob/main/Unidad3/Ejercicios/ejercicio5.php">GitHub</a>';
    ?>
</body>
</html>