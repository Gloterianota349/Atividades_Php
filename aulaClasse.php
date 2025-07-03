<?php

require "Carros.php";
require "Animais.php";

// OBJETOS (INSTÂNCIA DE UMA CLASSE)
$carro = new Carro();
$carro2 = new Carro();

//USO DA HERANÇA
$carroEletrico = new CarroEletrico();

$carroEletrico->cor = "Cinza";
$carroEletrico->marca = "BYD";
$carroEletrico->modelo = "Seal";
$carroEletrico->autonomia = "372km";

//POLIMORFISMO
$gato = new Gato();
emitirSom($gato);
echo "<hr>";

// ATRIBUTOS ESPECÍFICOS DE CADA OBJETO
$carro->cor = "Preto";
$carro->marca = "Chevrolet";
$carro->modelo = "Opalla";

// NOVOS ATRIBUTOS ESPECÍFICOS PARA UM NOVO OBJETO
$carro2->cor = "Branco";
$carro2->marca = "Ford";
$carro2->modelo = "Ranger";

echo "Cor: " . $carro->cor . "<br>Marca: " . $carro->marca ."<br>Modelo: " . $carro->modelo;
echo "<hr>" . "Cor: " . $carro2->cor . "<br>Marca: " . $carro2->marca ."<br>Modelo: " . $carro2->modelo;

echo "<hr>" . "Cor: " . $carroEletrico->cor . "<br>Marca: " . $carroEletrico->marca ."<br>Modelo: " . $carroEletrico->modelo . "<br>Autonomia: " . $carroEletrico->autonomia;

?>