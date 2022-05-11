<?php

//donde esta el head con las referencias a bootstrap???? 
//invocar el archivo de funciones 
include "includes/funciones.php";

//el archivo de funciones manejara entre otras cosas el encabezado 
//para no tener que estar repitiendo el mismo codigo una y otra vez
encabezados('Administración de actividades complementarias');

//crear variables para manejra conexion a la base de datos
$conn = conn(); //$conn sera nuestra variable manejadora de la consexion a la sesion de 
$control = "18430466"; //este valor lo recibiremos mediante metodo POST 

//recuperar datod del servidor usando procedural mysqil
$sql = "select * form estudiantes where control = '$control'";
$dataset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
$estudiante = mysqli_fetch_assoc($dataset);

//recuperar las actividades acreditadas
$sql = "SELECT nombre,historico,periodico,calif FROM historico,actividades
        where historico.idactividad = actividades.id
        and historico.control = '$control' and calif='AC'";

$dataset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));

$actividades_acreditadas = mysqli_fetch_all($dataset, MYSQLI_ASSOC);

$act_acred = mysqli_num_rows($dataset);

?>
<?php
foreach ($actividades_acreditadas as $actividades){ ?>
 <div class="col-lg">
    <div class="card text-end h-100 bg-primary text-white">
        <div class="card-content">
            <div class="card-body">
                <div class="media d-flex">
                    <div class="align-self-center">
                        <span class="material-icons" style="color:white;">&#xe7ff;</span>
                            </div>
                                <div class="media-body text-end">
                                    <h3>10</h3>
                                    <p class="card-text">Actividades de prueba</p>
                                    <div>
                                        <button type="button" class="btn btn-success">Cargar Evidencia</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
}?>

<body>
    <div class="container">
        <div class="container">
            <h4 class="col-10 text-uppercase text-center">Actividades complementarias </h4>
            <p class="display-5 text-center">Bienvenido</p>
            <p class="display-6 text-center"><?php echo $estudiante['nombre'] . ' ' . $estudiante['paterno'] . ' ' . $estudiante['materno'] ?></p>
            <div class="col-10">
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo (2 / 5) * 100; ?>%">Realizadas - 40% </div>
                    <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo (1 / 5) * 100; ?>%">Realizadas - 20% </div>
                    <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo (2 / 5) * 100; ?>%">Realizadas - 40% </div>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-10 mt-3 mb-1 text-center">
                    <h3>Actividades realizadas</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="card text-end h-100 bg-success text-white">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="card-content">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <span class="material-icons" style="color:white;">&#xea26;</span>
                                        </div>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>100</h3>
                                        <p class="card-text">Basketball</p>
                                        <div>
                                            <button type="button" class="btn btn-primary">Evidencia
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card text-end h-100 bg-success text-white">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="card-content">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <span class="material-icons" style="color:white;">&#xea31;</span>
                                        </div>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>90</h3>
                                        <p class="card-text">Volleyball</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card text-end h-100 bg-warning text-white">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="card-content">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <span class="material-icons" style="color:white;">&#xe033;</span>
                                        </div>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>N/A</h3>
                                        <p class="card-text">Pendiente</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card text-end h-100 bg-warning text-white">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="card-content">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <span class="material-icons" style="color:white;">&#xe033;</span>
                                        </div>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>N/A</h3>
                                        <p class="card-text">Pendiente</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card text-end h-100 bg-warning text-white">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="card-content">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <span class="material-icons" style="color:white;">&#xe033;</span>
                                        </div>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>N/A</h3>
                                        <p class="card-text">Pendiente</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <!--actividades en realización-->
            <div class="row">
                <!-- fila para titulo-->
                <div class="col-10 mt-3 mb-1 text-center">
                    <h3>Actividades Complementarias</h3>
                </div>
            </div>
            <div class="row">
                <!-- fila para tarjetas-->
                <div class="col-lg-2 h-100">
                    <div class="card text-end h-100 bg-primary text-white">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <span class="material-icons" style="color:white;">&#xe7ff;</span>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>10</h3>
                                        <p class="card-text">Club de Lectura</p>
                                        <div>
                                            <button type="button" class="btn btn-success">Cargar Evidencia
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <!--actividades por realizar-->
                <div class="row">
                    <!-- fila para titulo-->
                    <div class="col-10 mt-3 mb-1 text-center">
                        <h3>Actividades Complementarias</h3>
                    </div>
                </div>
                <div class="row">
                    <!-- fila para tarjetas-->
                    <div class="col-lg-4">
                        <div class="card h-100 mt-3 mb-1 bg-warning text-white">
                            <div class="card-content text-center">
                                <div class="card-header">
                                    Nombre de actividades
                                </div>
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body">
                                            <h3>Act. Extraescolares</h3>
                                            <p class="card-text">Nombre</p>
                                            <p class="card-text">Horario</p>
                                            <p class="card-text">Docente Responsable</p>
                                            <p class="card-text">Descripción</p>
                                            <p class="card-text">Lugar</p>
                                            <p class="card-text">Periodo de realización</p>
                                            <p class="card-text">Cupo</p>
                                            <p class="card-text">Mat. Requerido</p>
                                            <div>
                                                <button type="button" class="btn btn-primary">Agregra
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container" id="AjaxDemo">
        <h3>Cargar datos de la actividad</h3>
        <button type="button" onclick="cargarAct()">Cargar datos</button>
        <p id="Ajax"></p>
    </div>
    </hr>
</body>

</html>