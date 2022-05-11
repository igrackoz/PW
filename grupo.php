<?php

include "includes/funciones.php";
encabezado("Registrar Calificaciones");
$conn = conn();
$idgrupo = 1;

$sql = "SELECT docentes.nombre as doc_nombre, concat(estudiantes.nombre, ' ', estudiantes.paterno, ' ', estudiantes.materno) as est_nombre, periodo, idgrupo, det_grupo.control, calif FROM docentes, GRUPOS, det_grupo, estudiantes WHERE det_grupo.idgrupo = grupos.id AND docentes.id = grupos.iddocente AND estudiantes.control = DET_GRUPO.control AND grupos.id = 1";

$dataset = mysqli_query($conn, $sql) or die("database error." . mysqli_error($conn));
$detalle_grupo = mysqli_fetch_all($dataset, MYSQLI_ASSOC);
$alumnos_inscritos = mysqli_num_rows($dataset);
?>

<body>
	<div class="container col">
		<h4 class="text-uppercase text-center">Actividades Complementarias</h4>
		<p class="display-5 text-center">Bienvenido</p>
		<p class="display-6 text-center">
			<?php echo $detalle_grupo[0]['doc_nombre'] ?>
			<?php
				/*
				echo "<pre>";
					print($detalle_grupo);
				echo "</pre>";
				*/
			?>
		</p>
	</div>
	<div class="container">
		<form method="POST" action="registrar_calif.php">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Control</th>
						<th>Nombre</th>
						<th>Calif</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach($detalle_grupo as $alumno)
						{?>
							<tr>
								<td><?php echo $alumno['control'] ?></td>
								<td><?php echo $alumno['est_nombre'] ?></td>
								<td>
									<input type="hidden" name="numcontrol[]" value="<?php echo $alumno['control']?>">
									<div class="form-group">
										<select class="form-control" id="sel1" name="calif[]">
											<option <?php echo ($alumno ['calif'] =="AC") ? "selected" : " "?>> AC </option>
											<option <?php echo ($alumno ['calif'] =="AC") ? "selected" : " "?>> NA</option>
											<option <?php echo ($alumno ['calif'] =="AC") ? "selected" : " "?>> NP</option>
										</select>
									</div>
								</td>
							</tr>
						<?php } 
					?>
				</tbody>
			</table>
			<div class="container text-center">
				<button type="submit" class="btn btn-primary">Registrar Calificaciones</button>
			</div>
		</form>
	</div>

	<?php
		mysqli_data_seek($dataset, 0);
	?>

	<div class="container">
		<form method="POST" action="registrar_calif.php">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Control</th>
						<th>Nombre</th>
						<th>Calif</th>
					</tr>
				</thead>
				<tbody>
					<?php
						while($actividad = mysqli_fetch_assoc($dataset))
						{?>
							<tr>
								<td><?php echo $actividad['control'] ?></td>
								<td><?php echo $actividad['est_nombre'] ?></td>
								<td>
									<input type="hidden" name="numcontrol[]" value="<?php echo $actividad['control']?>">
									<div class="form-group">
										<select class="form-control" id="sel1" name="calif[]" value= "<?php echo $alumno['calif']?>">
											<option>AC</option>
											<option>NA</option>
											<option selected>NP</option>
										</select>
									</div>
								</td>
							</tr>
						 <?php 
						 }
					?>
				</tbody>
			</table>
			<div class="container text-center">
				<button type="submit" class="btn btn-primary">Registrar Calificaciones</button>
			</div>
		</form>
	</div>


</body>