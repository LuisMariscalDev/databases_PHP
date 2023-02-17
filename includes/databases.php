<?php

$db = mysqli_connect("localhost", "root", "luis", "appsalon");

if(!$db){
    echo "No hay conexion a la base de datos";
    exit;
} 

// echo "Conectado a la base de datos";