<html>

<head>
    <title>Administración de Actividades Complementarias</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="" alt="logo" width="72" height="72">
            <h2>Nueva Actividad Complementaria</h2>
            <p class="lead">La Siguiente Informacion Sera Mostrada Al Estudiante Durante El Proceso De Seleccion De La
                Actividad</p>
        </div>
        <div class="row">
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justfify-content-between align-items-center mb-3">
                    <span class="text-primary text-center ">
                        Asi Vera La Informacion El Estudiante
                    </span>
                </h4>
                <div class="col">
                    <div class="card  h-100 mt-3 mb-1 bg-warning text-white">
                        <div class="card-content text-center ">
                            <div class="card-header">
                                Nombre de actividades
                            </div>
                            <div class="card-body">
                                <div class="media-flex">
                                    <div class="media-body">
                                        <h3>Act. Extraescolares</h3>
                                        <p class="card-text"> Nombre</p>
                                        <p class="card-text">Horario</p>
                                        <p class="card-text">Docente responsable</p>
                                        <p class="card-text">Descripcion</p>
                                        <p class="card-text">Lugar</p>
                                        <p class="card-text">Periodo De Realizacion</p>
                                        <p class="card-text">Cupo</p>
                                        <p class="card-text">Mat. Requerida</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3 ">Descripcion</h4>
                <form class="needs-validation" novalidate>
                    <div class="row g-3">
                        <div class="col">
                            <label for="nombreActividad" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombreActividad" placeholder="taller de guitarra|curso mooc: Nombre del curso|XXX Congreso..." required>
                            <small class="text-muted">Indicar el nombre de la actividad, asi como aparecera en la constancia</small>
                            <div class="invalid-feedback">
                                SE REQUIERE EL NOMBRE DE LA ACTIVIDAD
                            </div>
                        </div>
                        <h4 class="mb-3">Categoria</h4>
                        <div class="my-3">
                            <div class="form-check">
                                <input id="academico" name="categoria" type="radio" class="form-check-input" Checked required>
                                <label class="form-check-label" for="academico">Academica</label>
                            </div>
                            <div class="form-check">
                                <input id="extraesc" name="categoria" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="extraesc">Extra Escolar</label>
                            </div>
                            <div class="form-check">
                                <input id="tutoria" name="categoria" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="tutoria">Tutoria</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/form-validation.js"></script>
</body>

</html>