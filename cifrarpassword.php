<?php
include "includes/funciones.php";
$conn = conn();

$pwd = password_hash('12345',PASSWORD_DEFAULT);

$query = "update usuarios SET password = '$pwd' where id = 2";

echo $query;
$sql = $conn->prepare($query);
$result = $sql->execute();
echo $result;

$sql->close();
