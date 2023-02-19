<?php

function obtenerServicios() {
    try{
        
        // Importar una conexión
        require "databases.php";
        $db->set_charset("utf8");

        // Escribir código SqL
        $sql = "SELECT * FROM servicios;";

        $consulta = mysqli_query($db, $sql);
        
        // Arreglo Vacio
        $servicios = [];

        $i = 0;

        // Obtener resultados
        while( $row = mysqli_fetch_assoc($consulta)){
            $servicios[$i]["id"] = $row["id"];
            $servicios[$i]["nombre"] = $row["nombre"];
            $servicios[$i]["precio"] = $row["precio"];

            $i++;
        }

         echo "<pre>";
         var_dump( ( $servicios) );
         echo "</pre>";


    } catch(\Throwable $th){
        //throw $th;

        var_dump($th);
    }
}

obtenerServicios();