<?php
$numero = 20;
$min = 1;
$max = 100;

$gera = rand($min,$max);

if($gera == $numero) {
	echo "Você venceu com o número: ".$numero;
} else{
	echo "Você perdeu, tente novamente.";
}