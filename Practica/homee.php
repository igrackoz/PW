<!DOCTYPE html>
<html lang="en">
<!-- https://getbootstrap.com/docs/5.0/layout/grid/ -->

<head>
    <title>Administración de Actividades Complementarias</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<!--
***



***
-->
    <div class="container">
        <!--global-->
        <div class="container"><!-- titulo y progress bar global -->
            <h4 class="col-10 text-uppercase text-center">Actividades Complementarias</h4>
            <div class="col-10">
                <div class="progress" style="height: 18px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 40%">Realizadas - 40%</div>
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 20%">En proceso - 20%</div>
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%">Por realizar - 40%</div>
                </div>
            </div>
        </div>
        <div>
        <div class="container">     <!--actividades realizadas-->
            <div class="row">            <!-- fila para titulo-->
                <div class="col-10 mt-3 mb-1 text-center">
                    <h3>Realizadas</h3>
                </div>
            </div>
            <div class="row">            <!-- fila para tarjetas-->
                <div class="col-sm-2">
                    <div class="card text-end h-100 bg-success text-white">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <span class="material-icons" style="color:white;">&#xe7ff;</span>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>10</h3>
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
                <div class="col-md-2">
                    <div class="card text-end h-100">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <span class="material-icons" style="color:green;">&#xe80c;</span>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>8</h3>
                                        <p class="card-text">Club de lectura</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card text-end h-100">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <span class="material-icons" style="color:green;">&#xe53f;</span>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>NA</h3>
                                        <p class="card-text">Pendiente</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card text-end h-100">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <span class="material-icons" style="color:green;">&#xea70;</span>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>NA</h3>
                                        <p class="card-text">Pendiente</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card text-end h-100">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <span class="material-icons" style="color:green;">&#xea70;</span>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>NA</h3>
                                        <p class="card-text">Pendiente</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-1">            <!-- fila para progress-->
                <div class="col-10">
                    <div class="progress" style="height: 18px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 40%">Realizadas - 40%</div>
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%">Por realizar - 60%</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">     <!--actividades en realización-->
            <div class="row">                <!-- fila para titulo-->
                <div class="col-10 mt-3 mb-1 text-center">
                    <h3>Actividades Complementarias</h3>
                </div>
            </div>
            <div class="row">                <!-- fila para tarjetas-->
                <div class="col-lg-2">
                    <div class="card text-end h-100">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <span class="material-icons" style="color:green;">&#xe7ff;</span>
                                    </div>
                                    <div class="media-body text-end">
                                        <h3>10</h3>
                                        <p class="card-text">Volleyball</p>
                                        <div>
                                            <button type="button" class="btn btn-primary">Cargar Evidencia
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            </div>
        </div>

        </div>
    </div>
</body>

</html>