<?php
$servername = 'localhost';
$username = "root";
$password = "root";
$dbname = "obrasInconclusas";
$conn = new mysqli($servername, $username, $password, $dbname);
/* cambiar el conjunto de caracteres a utf8 */
if (!$conn->set_charset("utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", $conn->error);
    exit();
} else {
    printf("Conjunto de caracteres actual: %s\n", $conn->character_set_name());
}
if (mysqli_connect_error()) {
    die('Error de Conexión (' . mysqli_connect_errno() . ') '
. mysqli_connect_error());
}