<?php
include "includes/funciones.php";
$conn = conn();
$arreglo_estudiantes = $_POST['numcontrol'];
$arreglo_calificaciones = $_POST['calif'];

try {
    for($i= 0; $i < count($_POST["numcontrol"]); $i++) {
        $sql = "UPDATE det_grupo set calif = '$arreglo_calificaciones[$i]' WHERE control = $arreglo_estudiantes[$i]";
        mysqli_query($conn, $sql) or die(mysqli_error($conn));
    }
} catch (mysqli_sql_exception $exception) {
   throw $exception;
}

// Redericcionar a pagina home
header("location: home.php");