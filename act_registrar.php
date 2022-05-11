<?php
include "includes/funciones.php";
$conn = conn();

$id =  $_POST['act_id'];
$nombre =  $_POST['act_nombre'];
$categoria =  $_POST['act_categoria'];
$horario =  $_POST['act_horario'];
$lugar =  $_POST['act_lugar'];
$docente =  $_POST['act_docente'];
$descripcion =  $_POST['act_descripcion'];
$periodo =  $_POST['act_periodo'];
$cupo =  $_POST['act_cupo'];
$mat_req =  $_POST['mat_req'];

/*
echo "<pre>";
print_r($_POST);
echo "/pre";
*/
if($_POST['accion'] == "insertar")
{
	$sql = "INSERT INTO actividades(nombre, categoria, horario, docente, descripcion, lugar, periodo, cupo, mat_req) VALUES ('$nombre','$categoria','$horario','$docente','$descrip','$lugar','$periodo','$cupo','$mat_req')";
}
else
{
	$sql = "UPDATE actividades SET nombre='$nombre', categoria='$categoria', horario='$horario', docente='$docente', descripcion='$descrip', lugar='$lugar', periodo='$periodo', cupo='$cupo', mat_req='mat_req' WHERE id = $id";
}

mysqli_query($conn, $sql)  or die("database error:" . mysqli_error($conn));


?>