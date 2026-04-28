<!DOCTYPE html>
<html>
<body>
    <h1>Ejercicio 1</h1>
    <?php 
    $cliente = array(
        "Nombre" => "Sergio", 
        "Apellido" => "Perales", 
        "Edad" => 20, 
        "Ciudad" => "Barcelona"
        );
    

    $counter = 1;
    foreach ($cliente as $value){
        echo "Dato ". $counter . "º: " . $value . "<br>";
    $counter++;
    }   
    ?>


    <h1>Ejercicio 2</h1>
    <?php 
    $cliente = array(
        "Nombre" => "Sergio", 
        "Apellido" => "Perales", 
        "Edad" => 20, 
        "Ciudad" => "Barcelona"
        );
    

    foreach ($cliente as $key => $value){
        echo "$key: $value <br>";
    }
    ?>


    <h1>Ejercicio 3</h1>
    <?php 
    $cliente = array(
        "Nombre" => "Sergio", 
        "Apellido" => "Perales", 
        "Edad" => 20, 
        "Ciudad" => "Barcelona"
        );
    
    $cliente["Edad"] = 24;

    $counter = 1;
    foreach ($cliente as $value){
        echo "Dato ". $counter . "º: " . $value . "<br>";
    $counter++;
    }
    ?>


    <h1>Ejercicio 4</h1>
    <?php 
    $cliente = array(
        "Nombre" => "Sergio", 
        "Apellido" => "Perales", 
        "Edad" => 20
        );

    var_dump($cliente);
    ?>


    <h1>Ejercicio 5</h1>
    <?php
    $letters = "a,b,c,d,e,f";
    
    $letras = explode(",", $letters);
    rsort($letras);

    $counter = 6;
    foreach ($letras as $value){
        echo "Letter ". $counter . "º: " . $value . "<br>";
    $counter--;
    }
    ?>


    <h1>Ejercicio 6</h1>
    <?php
    $alumnos = array(
        "Miguel" => 5, 
        "Luis" => 7, 
        "Marta" => 10, 
        "Isabel" => 8, 
        "Aitor" => 4, 
        "Pepe" => 1
        );

    arsort($alumnos);
    
    echo "Notas de los estudiantes: ";
    foreach ($alumnos as $nombre => $nota){
        echo " $nombre: $nota";
    }
    ?>


    <h1>Ejercicio 7</h1>
    <?php
    $alumnos = array(
        "Miguel" => 5, 
        "Luis" => 7, 
        "Marta" => 10, 
        "Isabel" => 8, 
        "Aitor" => 4, 
        "Pepe" => 1
        );


    $notas = array_values($alumnos);
    $total_notas = array_sum($notas);
    $cantidad_notas = count($notas);

    $media_notas = $total_notas / $cantidad_notas;

    echo "Media de las notas: " . round($media_notas, 2);

    echo "<br>";

    echo "Alumnos por encima de la media: " . "<br>";

    foreach ($alumnos as $nombre => $nota){
        if ($nota > $media_notas) {
            echo $nombre . "<br>";
        }
    }
    ?>


    <h1>Ejercicio 8</h1>
    <?php
    $alumnos = array(
        "Miguel" => 5, 
        "Luis" => 7, 
        "Marta" => 10, 
        "Isabel" => 8, 
        "Aitor" => 4, 
        "Pepe" => 1
        );

    //$notas = array_values($alumnos);

    //$nota_max = max($notas);
    //$mejor_alumno = array_search($nota_max, $alumnos);

    $nota_max = 0;
    $mejor_alumno = "";

    foreach ($alumnos as $nombre => $nota){
        if ($nota > $nota_max) {
            $nota_max = $nota;
            $mejor_alumno = $nombre;
        }
    }
            
    echo "La nota más alta es " . $nota_max . " y el mejor alumno es " . $mejor_alumno;
    ?>

    //Comentario merge branch 1

</body>
</html>








    