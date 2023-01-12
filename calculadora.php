<?php


$num1 = readline('Escolha o primeiro numero: ');
$operador = readline('Escolha o operador: ');
$num2 = readline('Escolha o segundo numero: ');

$resultado = $num1. $operador. $num2;


switch ($operador) {
    case '*':
        echo "Resultado: $resultado = ". $num1 * $num2;
        break;
    case '+':
        echo "Resultado: $resultado = ". $num1 + $num2;
        break;
    case '-':
        echo "Resultado: $resultado = ". $num1 - $num2;
        break;
    case '/':
        echo "Resultado: $resultado = ". $num1 / $num2;
        break;
    default:
        echo 'ERRO. Escolha uma opção valida.';
        break;
}


