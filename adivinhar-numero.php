<?php

echo '=----------Advinhe-o-Numero----------='.PHP_EOL;
echo 'Tente advinhar um numero entre 1 a 10'.PHP_EOL;

$gera = rand(1,10);

echo '........'.PHP_EOL;

echo 'Numero escolhido...'.PHP_EOL;

echo 'Voce tem apenas 3 tentativas.'.PHP_EOL;

$tentativas = 0;

while (True){

    $tentativas ++ ;

    $jogador = readline('Qual seu palpite? ').PHP_EOL;

    if ($tentativas == 3){
        echo 'Acabaram as suas tentativas.'.PHP_EOL;
        break;
    }

    if ($jogador == $gera){
        echo "Voce acertou com $tentativas tentativas!".PHP_EOL;
        break;
    }
    if ($jogador > $gera){
        echo 'Mais baixo'.PHP_EOL;
    }
 
    if ($jogador < $gera){
        echo 'Mais alto'.PHP_EOL;
    }
        
        
}