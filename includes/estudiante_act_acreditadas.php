<div class="row">
    <?php
    foreach ($actividades_acreditadas as $actividad) { ?>
        <!-- fila para tarjetas-->
        <div class="col-sm-2">
            <div class="card text-end h-100 bg-success text-white">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="align-self-center">
                                <span class="material-icons" style="color:white;">&#xea26;</span>
                            </div>
                            <div class="media-body text-end">
                                <h3><?php echo $actividad['calif'] ?></h3>
                                <p class="card-text"><?php echo $actividad['periodo'] ?></p>
                                <p class="card-text"><?php echo $actividad['nombre'] ?></p>
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
    <?php
    }

    for ($pend = $act_acred + 1; $pend <= 5; $pend++) { ?>
        <div class="col-lg-2">
            <div class="card text-end h-100 bg-warning text-white">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="align-self-center">
                                <span class="material-icons" style="color:white;">&#xe53f;</span>
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
    <?php
    } ?>
</div>