<?php
if (isset($_POST['signIn'])) {
	include('includes/funciones.php');
	echo "El boton fue presionado";

	$conn  = conn();
	$email = $_POST['email'];
	/*echo '<br>';
	echo $email;
	echo '<br>';*/
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pswd  = $_POST['pswd'];

	$sql = "SELECT * FROM usuarios WHERE email = '$email' LIMIT 1";
	$dataset = mysqli_query($conn, $sql) or die;
	$resultado = mysqli_fetch_assoc($dataset);

	$pwd = $resultado['password'];
	echo "Contraseña almacenada = " . $pwd;

	if (password_verify($pswd, $pwd)) {
		echo "<br>" . "contraseña coincide";
		session_start();
		$_SESSION['id'] = $resultado['id'];
		$_SESSION['activo'] = true;
		$_SESSION['email'] = $resultado['email'];
		$_SESSION['rol'] = $resultado['rol'];
		$_SESSION['nombre'] = $resultado['nombre'];
		//echo "<br> aqui tenemos que redirigir al usuario a home.php";
		//echo "<br> para redirigir necesitamos . 
		header('location: home.php');
		//echo "<br> despues de heades ('location:home.php') hacer exit(0)por seguridad,para que se detenga";
	} else {

		echo "contraseña no coincidio";
		echo "<br> aqui tenemos que rediriguir el usuario a login.php";
		echo "<br> para redirigir necesitamos     hader('location:login.php')";
	}


	if (isset($_POST['signup'])) {

		if (isset($_POST['email'])) {
			$_SESSION['error'] = "se requiere el email";
		}
		if (empty($_POST['pswd'])) {
			$_SESSION['error'] = "se requiere el password";
		}
		if (isset($_POST['pswd']) && $_POST['pswd'] !== $_POST['pswdConf']) {
			$_SESSION['error'] = "las contraseña no coincide";
		}

		include('includes/funciones.php');
		echo "el boton si fue presionado" . "<br>";

		$conn = conn();
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$pswd = $_POST['pswd'];
		$pswdConf = $_POST['pswdConf'];

		$dominio = explode('@', $email)[1];
		if (!filter_var($email, FILTER_VALIDATE_EMAIL) || $dominio != 'mistio.com') {
			echo "cuenta no es oficial";
			$error['email'] = "cuenta no institucional";
		}
		$pswd = password_hash($pswd, PASSWORD_DEFAULT);

		//revisa si ya existe el email

		$sql = "SELECT * FORM usuarios WHERE email ='$email' LIMIT 1";
		$result = mysqli_query($conn, $sql) or die;

		if (mysqli_num_rows($result) > 0) {
			$_SESSION['error'] = "Email existente,registre otro";
		}
		echo $_SESSION['error'];

		if (empty($_SESSION['error'])) {
			$sql = "INSERT INTO usuarios(email,password, nombre) values('$email' , $pswd, '' )";
			$result = mysqli_query($conn, $sql) or die;
			$nuevoid = mysqli_insert_id($conn);
			echo $nuevoid;
			if ($result) {
				echo "registro exitoso";
				//TO DO: sendo verificativo email to user
				// sendVerificacionEmail
				$_SESSION['id'] = $nuevoid;
				$_SESSION['activo'] = true;
				$_SESSION['email'] = $email;
				$_SESSION['verificado'] = false;
				$_SESSION['message'] = "you are logged in";
				$_SESSION['type'] = "alert-succes";
				$_SESSION['nombre'] = $result['nombre'];

				//header(location:index.php);
			} else {
				echo "error: No se puede registrar el usuario";
				$_SESSION["error"] = "error en base de datos: no se puede registrar el usuario";
			}
		} else {
		}
	} else {
		echo "error:no se puede registrar al usuario";
		//hader('location:includes.php');

	}
}
