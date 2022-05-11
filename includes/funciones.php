<?php
function encabezado($titulo)
{
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <title><?php echo $titulo; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <script>
            function cargarAct() {
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                    document.getElementById("Ajax").innerHTML = this.responseText;
                }
                xhttp.open("GET", "datos_ajax.txt", true);
                xhttp.send();
            }
        </script>
    </head>
    <?php
}

function conn () {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    include "includes/system_vars.php";

    try {
        return mysqli_connect($servername, $username, $password, $dbname);
    }
    catch (mysqli_sql_exception $e)
    {
        die ("No es posible conectarse a la base de datos");
    }
}

function barraProgresoEstudiante($act_acred, $act_enproceso)
{
?>
<div class="col-10">
                <div class="progress" style="height: 18px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 
                    <?php echo ($act_acred/5)*100 ?>%">Realizadas - <?php echo ($act_acred/5)*100?>%</div>
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 
                    <?php echo ($act_enproceso/5)*100 ?>%">En Proceso - <?php echo ($act_enproceso/5)*100?>%</div>
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 
                    <?php echo ((5-$act_enproceso-$act_acred)/5)*100 ?>%">Por Realizar - <?php echo ((5-$act_enproceso-$act_acred)/5)*100?>%</div>
                </div>
</div>
<?php
}
?>