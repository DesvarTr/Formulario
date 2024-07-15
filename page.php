<?php

$nombre = $_POST['nombre'];

$apellido = $_POST['apellido'];
echo "Hola, $nombre $apellido!<br><br>";

$correo = $_POST['correo'];
echo "Tu correo es: $correo<br><br>";

$direccion = $_POST['direccion'];
echo "Vives en: $direccion<br><br>";

$genero = $_POST['genero'];
echo "Tu género es $genero <br><br>";

?>