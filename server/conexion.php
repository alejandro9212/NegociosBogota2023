<?php

//creamos la conexion a la base de datos entonces creamos variables para los valores 

$servername = "localhost:3308";
$database = "negociobg";
$username = "root";
$password = "";

$con = mysqli_connect($servername, $username, $password, $database,);

if (!$con) {
    die("Conection failed: " . mysqli_connect_errno());
} else {

    // mysqli_close($con);
}
