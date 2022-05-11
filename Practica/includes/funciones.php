<?php
function encabezados($titulo)
{
    ?>
<!doctype html>
<html>

<head>
    <title><?php echo $titulo ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.mon.js"></script>
</head>
<?php
}
function conn()
{
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    include "system_vars.php";

    try {
        return mysqli_connect($servername, $username, $password, $dbname);
    } catch (mysqli_sql_exception $e) {
        //$e is the exeption, you can use it as you wish 
        die("No es posible conectarse a la base de datos");
    }
}


?>