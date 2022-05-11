<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark py-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="menu.php"> Tecnológico de Monterrey</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
        <span class="navbar-toggler-icon"> </span>
      </button>

      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown">Carreras</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="ITIC.php"> Ingeniería en Tecnologías de la Información y Comunicaciones</a></li>
              <li><a class="dropdown-item" href="ISC.php"> Ingeniería en Sistemas Computacionales</a></li>
              <li><a class="dropdown-item" href="IGE.php"> Ingeniería en Gestión Empresarial</a></li>
              <li><a class="dropdown-item" href="II.php"> Ingeniería Industrial</a></li>
            </ul>
          </li>
        </ul>

        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown">Docente</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="tic.php">Ingeniería en Tecnologías de la Información y Comunicaciones</a></li>
              <li><a class="dropdown-item" href="sistemas.php">Ingeniería en Sistemas Computacionales</a></li>
              <li><a class="dropdown-item" href="gestion.php">Ingeniería en Gestión Empresarial</a></li>
              <li><a class="dropdown-item" href="industrial.php">Ingeniería Industrial</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="materias.php">Plan de estudio</a></li>
          <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
          <li class="nav-item"><a class="nav-link" href="registrarse.php">Registro de alumnos</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div>

    <form action="userAuth.php">

      <div>

        <label for="email" class="">email</label>
        <input type="email" class="" id="inputemail" aria-describedby="ayudaemail">
        <div id="ayudaemail"> nunca compartiremos el email con nadie</div>

      </div>

      <div>
        <label for="Password" class="">Password</label>
        <input type="password" class="" id="inputpassowrd">


      </div>

      <button type="submit" class=""> submit</button>

    </form>

  </div>

</body>

</html>