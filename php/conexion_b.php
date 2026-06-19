<?php

    $conexion = mysqli_connect("localhost", "root", "", "chat_bot___imp_movicel");

    if($conexion){
        echo 'Conectado exitosamente a la base de datos';
    }else{
        echo 'No se pudo conectar a la base de datos';
    }
?>