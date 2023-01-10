<?php

echo '___Jokenpo-PHP___'.PHP_EOL;
echo'....................'.PHP_EOL;

$jogador = readline('Escolha: pedra, papel ou tesoura: ');


switch ($jogador) {
    case 'pedra':
    case 'papel':
    case 'tesoura':
        echo "Voce escolheu $jogador".PHP_EOL;
        break;
    default:
        $jogador = readline('ERRO. Escolha uma opção valida: ').PHP_EOL;
}

$gera = rand(1,3);

if($gera == 1){
    echo 'O computador escolheu pedra'.PHP_EOL;
}
if($gera == 2){
    echo 'O computador escolheu papel'.PHP_EOL;
}
if($gera == 3){
    echo 'O computador escolheu tesoura'.PHP_EOL;
}


$comparador = $jogador. $gera;


while(true){

    //empatou

    if($comparador == 'pedra'. 1){
        echo 'Empate!';
        break;
    }

    if($comparador == 'papel'. 2){
        echo 'Empate!';
        break;
    }

    if($comparador == 'tesoura'. 3){
        echo 'Empate!';
        break;
    }

    //perdeu

    if($comparador == 'pedra'. 2){
        echo 'Voce perdeu!';
        break;
    }

    if($comparador == 'papel'. 3){
        echo 'Voce perdeu!';
        break;
    }

    if($comparador == 'tesoura'. 1){
        echo 'Voce perdeu!';
        break;
    }

    //ganhou

    if($comparador == 'pedra'. 3){
        echo 'Voce ganhou!';
        break;
    }

    if($comparador == 'papel'. 1){
        echo 'Voce ganhou!';
        break;
    }

    if($comparador == 'tesoura'. 2){
        echo 'Voce ganhou!';
        break;
    }

}
