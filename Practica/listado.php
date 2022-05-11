<!doctype html>
<html lang="en">
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
            <h2>Relación de elementos en una tabla</h2>
            <p class="lead">Lista de elementos, con acciones para modificar, eliminar</p>
            <table class="table table-hover">                <!-- table-striped table-hover-->
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Carrera</th>
                        <th scope="col">Modificar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Filiberto</td>
                        <td>Torres</td>
                        <td>IE</td>
                        <td>
                            <a href="actividad_nueva.php" class="link-primary">
                                <div class="align-self-center">
                                    <span class="material-icons" style="color:green;">&#xe745;</span>
                                </div>
                            </a>
                        </td>
                        <td>
                            <div class="align-self-center">
                                <span class="material-icons" style="color:red;">&#xe92b;</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Hilda Patricia</td>
                        <td>Beltrán</td>
                        <td>ISC</td>
                        <td>
                            <a class="btn btn-primary" href="actividad_nueva.php" role="button">Modificar</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="actividad_nueva.php" role="button">Eliminar</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Guadalupe</td>
                        <td>Uribe</td>
                        <td>L.I.</td>
                        <td>
                            <a class="btn btn-primary" href="actividad_nueva.php" role="button">
                                <div class="align-self-center">
                                    <span class="material-icons" style="color:white;">&#xe745;</span>
                                </div>
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="actividad_nueva.php" role="button">
                                <div class="align-self-center">
                                    <span class="material-icons" style="color:white;">&#xe92b;</span>
                                </div>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Jesús</td>
                        <td>Zertuche</td>
                        <td>I.Q.</td>
                        <td>
                            <form method='post' action='actividad_nueva.php'>
                                <input type='hidden' name='idalumno' value='idalumno'>
                                <input type='submit' value="Modificar" class="btn-primary">
                            </form>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="actividad_nueva.php" role="button">
                                <div class="align-self-center">
                                    <span class="material-icons" style="color:white;">&#xe92b;</span>
                                </div>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>