<?php

//Condiciones//

$a = 1;
$b = 18;

if ($a > $b){

    echo " <h3>Es una persona MAYOR de edad </h3>";
}

else if ($a == $b){

    echo " <h3>Es una persona que tiene 18 años de edad </h3>";

}

else {

    echo " <h3> Es una persona MENOR de edad y hay restricciones </h3> ";
}


//SWITCHES//

$dia = "sabado";

switch($dia){

    case 'sabado':
    echo " <h3>Tengo clases de Ingles</h3>";
    break;

    case 'domingo':
    echo "<h3> Voy a compartir en familia </h3>";
    break;

    case 'martes':
    echo " <h3>Tengo clases de PHP </h3>";
    break;

    default: echo "<h3> Estoy en el Trabajo </h3>";

}

//CICLOS, me permite realizar una tarea un determinado numero de veces//

//Ciclo White//
$n = 1;

while($n<=5){

    echo $n;
    $n++;
}


echo "<br>";

//Ciclo Do White//
$p = 1;

do{
    echo $p;
    $p++;
}

while($p <= 5);
echo "<br>";

//Ciclo FOR//

for($i = 0; $i <=5; $i++){

    echo $i;

}



?>