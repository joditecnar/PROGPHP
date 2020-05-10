<?php
//funciones sin parametros//

//saludo es el nombre de la funcion a ejecutar, dentro de los () se colocan los parametros, dentro de los { } se declara la tarea a ejecutar// 
function saludo() {
    
    echo " <h3>Bienvenidos a la programacion con PHP </h3>";
}

//despues de declarada la funcion, se ejecuta la funcion aparte// 

saludo();

echo "<br>";

//funciones con parametros//

function despedida($adios) {
    
    echo $adios;
}



despedida(" <h3> Nos vemos Pronto en una nueva sesion <h3>");

//funciones con retorno//

function retorno($retornar) {
    
    return $retornar;
}



echo retorno (" <h3> Retornaremos pronto a clases, por el momento todos en casa<h3>");

//estas funciones son muy utilizadas en programacion orientada a objeto//

?>