<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ejercicio 4</title>
</head>
<body>
    <h1>
      <?php 
      /**
       * Ejercicio 4
       * Modifica la página inicial realizada, incluyendo una imagen de cabecera en función de la estación del
       * año en la que nos encontremos y un color de fondo en función de la hora del día.
       * @author Raul Pantoja
       */
    $invierno = false;
    $verano = false;
    $otoño = true;
    if($invierno == true){
      echo '<h1 style="background-color:blue">';
    }else if($verano == true){
      echo '<h1 style="background-color:aqua">';
    }else if($otoño == true){
      echo '<h1 style="background-color:orange">';
    }else{
      echo '<h1 style="background-color:green">';
    }

    echo '<a href="https://github.com/RaulPantoja/DesarrolloWebServidor/blob/main/Unidad3/Ejercicios/ejercicio4.php">GitHub</a>';
    ?></h1>
</body>
</html>  