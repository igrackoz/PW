<?php

if (isset($_POST['buscar'])) {
    
    $nombre = $_POST['cadena'];

    include "includes/funciones.php";
    $conn = conn();

    $sql = "SELECT * FROM actividades";
    $dataset = mysqli_query($conn,$sql) or die("database error: " . mysqli_error($conn));
    $actividad = mysqli_fetch_all($dataset, MYSQLI_ASSOC);

    foreach ($actividad as $busqueda) {

        $identificar = $busqueda['nombre'];
        $pos = strpos($identificar, $nombre);  

        if ($pos !== false) {
            
            echo $busqueda['nombre'];
            echo "<br>";
        }
    }
}

?>