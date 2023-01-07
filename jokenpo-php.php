<?php

echo '___Jokenpo-PHP___'.PHP_EOL;
echo'....................'.PHP_EOL;

$jogador = readline('Escolha: pedra, papel ou tesoura: ');


switch ($jogador) {
    case 'pedra':
    case 'papel':
    case 'tesoura':
        echo "Voce escolheu $jogador";
        break;
    default:
        $jogador = readline('ERRO. Escolha uma opção valida: ');
}

