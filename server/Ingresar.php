<?php
include './conexion.php';


$idC = $_POST['cedula'];
$noms = $_POST['nombres'];
$apells = $_POST['apellidos'];
$email = $_POST['correo'];
$pass = $_POST['contraseña'];
$pass2 = $_POST['contraseña2'];
$fecha = $_POST['fecha'];


$sql = "INSERT INTO registro (numid, nombres, apellidos, email, password, f_nacimiento) 
VALUES ('$idC','$noms','$apells','$email','$pass','$fecha')";

if (mysqli_query($con, $sql)) {
    header('location:../consulta.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
};
