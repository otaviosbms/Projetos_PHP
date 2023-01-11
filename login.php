<?php


while(True){

    $user = readline('Escolha o seu Usuario: ');

    $pasw = readline('Escolha a sua senha: ');

    $tamanhopasw = strlen($pasw);

    if($pasw == $user){
        echo 'ATENÇÃO. A sua senha não pode ser igual o usuario.'.PHP_EOL;
    }elseif($tamanhopasw < 10){
        echo 'ATENÇÃO.A sua senha deve ter mais que 10 caracteres.'.PHP_EOL;
    }else{
        echo 'Cadastrado com sucesso'.PHP_EOL;
    }

}