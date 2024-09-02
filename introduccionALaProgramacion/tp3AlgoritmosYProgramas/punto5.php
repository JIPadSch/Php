<?php
/*división de dos variables */
/*......numA,......numB,
 ......result1,......result2*/
$numA = 22;
$numB = 8;
$result1 = $numA/$numB;
$result2 = (int)($numA/$numB); //Se utiliza el (int) para solo tomar la parte entera del resultado
echo $result1. "\n";
echo $result2. "\n";
?>