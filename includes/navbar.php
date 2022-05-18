<!-- action para redirigir a la página después presionar el boton de tipo "submit" -->
<form action="includes/busqueda.php" method="POST">
    <!-- ambos inputs deben tener un atributo "name" para ser reconocidos y cargar los datos a la siguiente página. -->
    <input type="text" name="cadena" placeholder="escriba lo que quiera buscar" required>
    <input type="submit" name="buscar">
</form>
