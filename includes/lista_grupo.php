<?php 

$sql = "SELECT distinct periodo FROM grupos WHERE status = 'Activo' ORDER BY periodo DESC";

$dataset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$lista_periodos = mysqli_fetch_all($dataset, MYSQLI_ASSOC);

$numperiodo = 0;

?>

<div class="container col-10">
	<?php foreach ($lista_periodos as $periodo) {
		$lperiodo = $periodo['periodo'];
	?>

	<div id="accordion">
		<div class="card">
			<div class="card-header">
				<a class="collapsed btn" data-bs-toggle="collapse" href="#collapse<?php echo $numperiodo ?>"><?php echo "Periodo: ". $lperiodo; ?> </a>
			</div>
			<div id="collapse<?php echo $numperiodo ?>" class="collapse" data-bs-parent="#accordion">
				<div class="card-body">
					<?php
					$sql = "SELECT grupos.id AS idGrupo, grupos.periodo, nombre, docente FROM grupos, actividades WHERE actividades.id = grupos.idactividad AND grupos.periodo = '$lperiodo' AND status = 'ACTIVO'";
					$dataset = mysqli_query($conn, $sql) or die("database error: " . mysqli_error($conn));
					$lista_actividades = mysqli_fetch_all($dataset, MYSQLI_ASSOC);
					?>

					<table class="table table-hover">
						<thead>
							<tr>
								<th>Periodo</th>
								<th>Nombre actividad</th>
								<th>Categoria</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach($lista_actividades as $actividad){ ?>
								<tr>
									<td><?php echo $actividad['periodo'] ?></td>
									<td><?php echo $actividad['nombre'] ?></td>
									<td><?php echo $actividad['docente'] ?></td>
									<td>
										<form method="POST" action="grupo.php">
                                        <input type="hidden" name="idGrupo" value="<?php echo $actividad ['idGrupo']?>">
											<button type="submit" class="btn btn-success">Ver Alumnos</button>
										</form>
									</td>
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<?php
	$numperiodo++;
	}
	?>
</div>