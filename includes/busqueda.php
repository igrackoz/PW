<?php

// verifica si el boton submit llamado "cadena" (name="cadena") fue presionado. Si lo fué, entrará en el IF.
if (isset($_POST['buscar'])) {
    
    // guardar el valor introducido en el input llamado "cadena" del form.
    $nombre = $_POST['cadena'];

    //conectar la base de datos
    include "funciones.php";
    $conn = conn();

    // consultar la tabla de la clumna que queremos buscar
    $sql = "SELECT * FROM actividades";
    $dataset = mysqli_query($conn,$sql) or die("database error: " . mysqli_error($conn));
    $actividad = mysqli_fetch_all($dataset, MYSQLI_ASSOC);

    foreach ($actividad as $busqueda) {

        // cada ciclo la variable "$identificar" irá buscando en la tabla "actividades" el valor de la columna "nombre" en la fila del ciclo actual
        $identificar = $busqueda['nombre'];
        //guardar un valor booleano que diga si se encontró lo que se busco dentro del dato.
        $pos = strpos($identificar, $nombre);  

        // verificar si fue la busqueda fue correcta. Si lo fué entrará en el IF.
        if ($pos !== false) {
            
            // imprime el valor extraido de la consulta que haya concordado con la busqueda
            echo $busqueda['nombre'];
            // hace un salto de linea.
            echo "<br>";
        }
    }
}

?>