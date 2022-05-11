<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Administración de Actividades Complementarias</title>
</head>

<?php
$act_id = 1;
?>

<body>
    <div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="" alt="logo" width="72" height="72">
            <h2><?php echo($act_id ==0? "nueva actividad complementaria":"actualizar actividad complementaria")?></h2>
            <p class="lead">La Siguiente Informacion Sera Mostrada Al Estudiante Durante El Proceso De Seleccion De La
                Actividad</p>
        </div>
        <div class="row">
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justfify-content-between align-items-center mb-3">
                    <span class="text-primary text-center ">
                        Asi Vera La Informacion El Estudiante </span>
                </h4>
                <div class="col">
                    <div class="card  h-100 mt-3 mb-1 bg-warning text-white">
                        <div class="card-content text-center ">
                            <div class="card-header">
                                <h4 id="act_nombre">Actividad</h4>
                            </div>
                            <div class="card-body">
                                <div class="media-flex">
                                    <div class="media-body">
                                        <p class="card-text" id="act_nombre"> Nombre</p>
                                        <p class="card-text" id="act_categoria"></p>
                                        <p class="card-text" id="act_horario">Horario</p>
                                        <p class="card-text" id="act_docente">Docente responsable</p>
                                        <p class="card-text" id="act_descrip">Descripcion</p>
                                        <p class="card-text" id="act_lugar">Lugar</p>
                                        <p class="card-text" id="act_periodo">Periodo De Realización</p>
                                        <p class="card-text"id="act_cupo">Cupo</p>
                                        <p class="card-text" id="act_material">Mat. Requerida</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3 ">Descripcion</h4>
                <form class="needs-validation" method="POST" action="act_registrar.php" novalidate>
                    <input type="hidden" name="action" value="<?php echo($act_id ==0? "insertar":"actualizar")?>">
                    <input type="hidden" name="act_id" value="<?php echo $act_id ?>">
                    <div class="row g-3">
                        <div class="col">
                            <label for="nombreActividad" class="form-label">Nombre</label>
                            <input name="act_nombre" type="text" class="form-control" id="nombreActividad" onchange="copiaContenido(this,'act_nombre')" placeholder="taller de guitarra|curso mooc: Nombre del curso|XXX Congreso..." required>
                            <small class="text-muted">Indicar el nombre de la actividad, asi como aparecera en la constancia</small>
                            <div class="invalid-feedback">
                                Se requiere el nombre de la actividad 
                            </div>
                        </div>
                        <h4 class="mb-3">Categoria</h4>
                        <div class="my-3">
                            <div class="form-check">
                                <input name="act_categoria" id="academico" name="categoria" onclick = "copiaContenido (this,'act_categoria');" value="Academico" type="radio" class="form-check-input" checked required>
                                <label class="form-check-label" for="academico">Academica</label>
                            </div>
                            <div class="form-check">
                                <input name="act_categoria" id="extraesc" name="categoria" onclick = "copiaContenido (this,'act_categoria');" value="Extraescolar"type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="extraesc">Extra Escolar</label>
                            </div>
                            <div class="form-check">
                                <input name="act_categoria" id="tutoria" name="categoria" onclick = "copiaContenido (this,'act_categoria');" value="Tutoria" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="tutoria">Tutoria</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">

                        <label for="horario" class="form-label">Horario</label>
                        <input name="act_horario" type="text" class="form-control" id="horario" onchange="copiaContenido(this,'act_horario')" placeholder="9AM-12PM |Libre" required>

                        <div class="invalid-feedback">
                            Se requiere el horario de la actividad complementaria
                        </div>



                    </div>
                    <div class="col-6">

                        <label for="lugar" class="form-label">Lugar de realizacion</label>
                        <input type="text" class="form-control" id="lugar" onchange="copiaContenido(this,'act_lugar')" placeholder="Cancha fut rapido de la macro | en lina(curso mood) | auditorio ...." required>
                        <small class="text-muted"> Indicar el nombre de la activida, a si como aparecera en la constancia </small>
                        <div class="invalid-feedback">
                            Se requiere el lugar de la actividad Complementaria
                        </div>

                    </div>
                    <div class="col-12">
                        <label for="responsable" class="form-label">Profesor responsable de la actividad</label>
                        <input type="text" class="form-control" id="responsable" onchange="copiaContenido(this,'act_docente')" placeholder="el nombre del docente que genera la evidencia" required>
                        <div class="invalid-feedback">
                            Se requiere el lugar de la actividad Complementaria
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="input-group has-validation">
                            <span class="input-group-text"> Descripción</span>
                            <textarea class="form-control" id="descripcion" rows="3" required name="act_descripcion"></textarea>
                            <div class="invalid-feedback">
                                Se requiere la descripcion de la actividad complementaria
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="periodo" class="form-label">Periodo</label>
                        <input name="act_periodo" type="text" class="form-control" id="periodo" onchange="copiaContenido(this,'act_periodo')" placeholder="10 de enero de 2022 al 12 de febrero del 2022" required>
                        <div class="invalid-feedback">
                            Se requiere el lugar de la actividad Complementaria
                        </div>
                    </div>
                    <div class="col-3">
                        <label for="material" class="form-label">Cupo</label>
                        <input name="act_cupo" type="number" min="1" class="form-control" id="cupo" onchange="copiaContenido(this,'act_cupo')" placeholder="" required>
                        <div class="invalid-feedback">
                            Se requiere el indicar el cupo
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="material" class="form-label">Material Requerido</label>
                        <input name="act_material" type="text" class="form-control" id="material" onchange="copiaContenido(this,'act_material')" placeholder="" required>
                        <div class="invalid-feedback">
                            Se requiere el indicar si se requerirá material
                        </div>
                    </div>
                    <hr class="my-4">
                    <button class="W-100 btn btn-primary btn-lg" type="submit">Registar la actividad </button>
                </form>
            </div>
        </div>
    </div>
    <script>
        function copiaContenido(objeto, etiqueta)
         {
            document.getElementById(etiqueta).innerHTML = objeto.value;
            objeto.preventDefault();
            return false;
         }
    </script>
    <script src="js/form-validation.js"></script>
</body>

</html>