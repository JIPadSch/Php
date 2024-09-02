<?php
    $esMayor; //boolean
    $edad; //int
    $nombre; $mensaje; //String

    echo "Ingrese su nombre \n";
    $nombre = trim(fgets(STDIN));
    echo "Ingrese su edad \n";
    $edad = trim(fgets(STDIN));

    $esMayor = $edad >= 18;
    if( $esMayor ) {
        $mensaje = $nombre." es mayor de edad";
    }else{
        $mensaje = $nombre." es menor de edad";
    }
    echo $mensaje;