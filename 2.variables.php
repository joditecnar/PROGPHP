<?php

//variable numerica
$numero = 5 ;

echo " <h2> Esta es una variable numerica: $numero </h2> ";


echo "<br><br>";

//variable tipo string o de texto

$palabra = "Unitecnar";

echo " <h2>Esta es una variable de tipo texto: $palabra </h2>";

echo "<br><br>";

//variable tipo Boleana

$boleana = true;
echo "<h2>Esta es una variable boleana verdadera: $boleana</h2>";

echo "<br><br>";

$boleana = false;
echo " <h2>Esta es una variable boleana falsa: $boleana</h2>";

echo "<br><br>";

//variable de tipo arreglo

$personas = array ("genero", "identificacion", "apellido", "nombre", "RH");
echo "<h2> Esta es una variable de tipo arreglo: $personas[1]</h2>";

echo "<br><br>";

//variable de tipo arreglo con propiedades

$carros = array ("carro1"=>"Mazda", "carro2"=>"Toyota", "carro3"=>"Volvo", "carro4"=>"Nissan");
echo "<h2> Esta es una variable de tipo arreglo con propiedades: $carros[carro4]</h2>";

echo "<br><br>";

//variable de tipo objeto

$frutas = (object) ["fruta1"=>"pera","fruta2"=>"manzana"];
echo " <h2>Esta es una variable de tipo objecto: $frutas->fruta1 </h2>";

echo "<br><br>";



?>