<?php
    $nro1 = 100;
    $nro2 = 2.5;
    $resultadoComp = $nro2 * $nro1 < 300;
    if ($resultadoComp){
        $mensaje = "es verdadero";
    }else{
        $mensaje = "es falso";
    }
    echo $mensaje;