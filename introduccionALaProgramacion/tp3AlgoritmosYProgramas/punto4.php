<?php //corregido en el inciso a no tenia php despues del <?
    //inciso a
    echo "hola mundo!";

    //inciso b
    $nombre = "Fulano"; //CORREGIDO - Original: $nombre = "Fulano" (faltaba ;)
    echo "hola ".$nombre."! \n";

    //inciso c
    $nombre = "Taltano";
    echo "hola ". $nombre . "! \n"; //CORREGIDO - Original: echo "hola ". $NOMBRE . "! \n"; (nombre =/= NOMBRE, las mayusculas importan)

    //inciso d
    $nombre = "Minguito"; //CORREGIDO - Original: nombre = "Minguito"; (Las expresiones llevan $)
    echo "hola ". $nombre ."! \n";

    //inciso e
    echo "Ingrese un numero:";
    $num1 = trim(fgets(STDIN));
    $resultado = $num1;    //AGREGADO, NO SE GUARDABA EL NUMERO ENTONCES RESULTADO NO TENIA VALORY NO SE PODIA MOSTRAR
    echo "Ingrese otro numero:";
    $num2 = trim(fgets(STDIN));
    $resultado += $num2;
    echo "el resultado es: ".$resultado."\n";