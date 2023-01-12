<?php


function fatorial($numero)
{

$resultado = 1;

foreach (range(1, $numero) as $number){
        $resultado = $resultado * $number;
    }

echo $resultado;

}

fatorial(5);