<?php
include "includes/funciones.php";
encabezado('Administracion de actividades complementarias');
session_start();

$nombre = $_SESSION['nombre'];
$email = $_SESSION['email'];
$rol = $_SESSION['rol'];
//print_r($_SESSION);
//echo "(".$_SESSION['rol'] .")";

$conn = conn(); //con sera  nuestra variable manejadora de la conexion a la sesion 
mysqli_set_charset($conn, "utf8");

$control = "18430399";

//? Recuperar las actividades acreditadas
$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$dataset = mysqli_query($conn, $sql) or die("database error." . mysqli_error($conn));
$estudiantes = mysqli_fetch_assoc($dataset);

$sql = "SELECT nombre,historico.periodo,calif FROM historico,actividades WHERE historico.idactividad = actividades.id AND historico.control = '$control' AND calif='AC'";
$dataset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
$actividades_acreditadas = mysqli_fetch_all($dataset, MYSQLI_ASSOC);
$act_acred = mysqli_num_rows($dataset);
$act_enproceso = 1;
?>

<body>

    <?php include "includes/navbar.php"; ?>

    <div class="container">
        <!--global-->
        <div class="container">
            <!-- titulo y progress bar global -->
            <h4 class="col-500 text-uppercase text-center">Actividades Complementarias</h4>
            <p class="display-5 text-center">Bienvenido</p>
            <p class="display-6 text-center"><?= $estudiantes['nombre'] ?></p>
            <p class="display-6 text-center"><?= $_SESSION['rol']  ?></p>
            <?php if ($rol == "estudiante") {
                barraProgresoEstudiante($act_acred, $act_enproceso);
            }

            if ($rol === "administrador") { ?>
                
                <div class="card text-center mt-3 col-10">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary btn-lg"><i class="bi bi-plus-lg"></i></button>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <div>
            <div class="container col-12">
                <!--actividades realizadas-->
                <div class="row">
                    <!-- fila para titulo-->
                    <div class="col-10 mt-3 mb-1 text-center">
                        <h3>Realizadas</h3>
                    </div>
                </div>

                <?php
                if ($rol == "estudiante") {
                    include "includes/estudiante_act_acreditadas.php";
                } else {
                    include "includes/lista_grupo.php";
                }
                ?>

                <div class="container"> <!--actividades en realización-->
                    <div class="row">
                        <!-- fila para titulo-->
                        <div class="col-10 mt-3 mb-1 text-center">
                            <h3>Actividades Complementarias</h3>
                        </div>
                    </div>
                    <div class="row"> <!-- fila para tarjetas-->
                            <div class="col-lg-3 mt-3">
                                <div class="card h-100 mt-3 mb-1">
                                    <div class="card-content">
                                        <div class="card-header">
                                            Nombre de la Actividad
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
                                                    <p class="card-text">Periodo de Realización</p>
                                                    <p class="card-text">Cupo</p>
                                                    <p class="card-text">Mat. Requerido</p>
                                                    <div>
                                                        <div>
                                                            <button type="button" class="btn btn-primary">Agregar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mt-3">
                            <div class="card h-100 mt-3 mb-1">
                                <div class="card-content">
                                    <div class="card-header">
                                        Nombre de la Actividad
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
                                                <p class="card-text">Periodo de Realización</p>
                                                <p class="card-text">Cupo</p>
                                                <p class="card-text">Mat. Requerido</p>
                                                <div>
                                                    <div>
                                                        <button type="button" class="btn btn-primary">Agregar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mt-3">
                            <div class="card h-100 mt-3 mb-1">
                                <div class="card-content">
                                    <div class="card-header">
                                        Nombre de la Actividad
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
                                                <p class="card-text">Periodo de Realización</p>
                                                <p class="card-text">Cupo</p>
                                                <p class="card-text">Mat. Requerido</p>
                                                <div>
                                                    <div>
                                                        <button type="button" class="btn btn-primary">Agregar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mt-3">
                            <div class="card h-100 mt-3 mb-1">
                                <div class="card-content">
                                    <div class="card-header">
                                        Nombre de la Actividad
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
                                                <p class="card-text">Periodo de Realización</p>
                                                <p class="card-text">Cupo</p>
                                                <p class="card-text">Mat. Requerido</p>
                                                <div>
                                                    <div>
                                                        <button type="button" class="btn btn-primary">Agregar</button>
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
                <div class="container my-4" id="AjaxDemo">
                    <h3>Cargar los datos de la Actividad</h3>
                    <button class="btn btn-dark" type="button" onclick="cargarAct()">Cargar Datos</button>
                    <p id="Ajax"></p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>