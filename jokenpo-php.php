<?php

echo '___Jokenpo-PHP___'.PHP_EOL;
echo'....................'.PHP_EOL;

$jogador = readline('Escolha: pedra, papel ou tesoura: ');


/*if($jogador == 'pedra' || $jogador == 'papel' || $jogador == 'tesoura'){
    echo "O jogador escolheu $jogador.".PHP_EOL;
}

if($jogador != 'pedra' || $jogador != 'papel' || $jogador != 'tesoura'){
    echo 'ERRO. Escola uma opção válida.' .PHP_EOL;
    }*/

while($jogador != 'pedra' or $jogador != 'papel' or $jogador != 'tesoura'){
     $jogador = readline('ERRO. Escolha uma opção válida: ').PHP_EOL;


     if($jogador == 'pedra' or $jogador == 'papel' or $jogador == 'tesoura')
        echo "voce escolheu $jogador";
    }