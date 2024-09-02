<?php
    //ACTIVIDAD: Realizar la implementación en PHP de los ejercicios diseñados en el TP N° 2.

    //Punto 1.a
    //Calcula y muestra la suma de los tres numeros dados
    $a; $b; $c; $resultado; //int
    echo "Ingrese un numero:\n";
    $a = trim(fgets(STDIN));
    echo "Ingrese un numero:\n";
    $b = trim(fgets(STDIN));
    echo "Ingrese un numero:\n";
    $c = trim(fgets(STDIN));
    $resultado = $a+$b+$c;
    echo "El resultado es: ".$resultado;

    //Punto 1.b
    //Calcula y muestra el cuadrado de un nro dado
    $unNro; $cuadrado; //int
    echo "Ingrese un numero:\n";
    $unNro = trim(fgets(STDIN));
    $cuadrado = $unNro * $unNro;
    echo "El cuadrado de ".$unNro." es: ".$cuadrado;

    //Punto 1.c
    //Calcula y muestra la ganancia de un empleado con la cantidad de hrs dadas y el valor de las hrs
    $nombre; //String
    $horasTrab; $valorHora; $ganancia; //real
    echo "Ingrese empleado:\n";
    $nombre = trim(fgets(STDIN));
    echo "Ingrese las horas trabajadas:\n";
    $horasTrab = trim(fgets(STDIN));
    echo "Ingrese el valor de las horas:\n";
    $horasTrab = trim(fgets(STDIN));
    $ganacia = $horasTrab * $valorHora;
    echo $nombre." obtuvo $".$ganancia;

    //Punto 2
    //Se ingresan 3 notas y se obtiene un promedio
    $nota1; $nota2; $nota3; //int
    $promedio; //real
    echo "Ingrese una nota:\n";
    $nota1 = trim(fgets(STDIN));
    echo "Ingrese una nota:\n";
    $nota2 = trim(fgets(STDIN));
    echo "Ingrese una nota:\n";
    $nota3 = trim(fgets(STDIN));
    $promedio = ($nota1+$nota2+$nota3) / 3;
    echo "El promedio de las 3 notas es: ".$promedio;

    //Punto 3