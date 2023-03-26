<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta('123.456.789-10', 'Vinicius Dias');
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarNomeTitular().PHP_EOL;
echo $primeiraConta->recuperarCpfTitular().PHP_EOL;
echo $primeiraConta->recuperarSaldo().PHP_EOL;

$segundaConta = new Conta('098.765.432-11', 'Patricia');
var_dump($segundaConta);

new Conta('123', 'lsahdlidh'); 

echo Conta::recuperarNumeroDeContas();



// \ ENTENDENDO O METODO DESTRUTOR E FUNÇÃO UNSET() /

// unset() -> esta função tem como objetivo desvincular uma variavel como o endereço de um objeto, sendo assim é possivel trocar as referencias dos objetos, assim como no exemplo:
// OBS: Caso um objeto perca totalmente as suas referencias, o php o apaga automaticamente da memoria (metodo destrutor), assim como um coletor de lixo.
// OBS2: O metodo destrutor é AUTOMATICO, ou seja, a função dele craida na class é apenas usada como um aproveitador do instante onde o objeto é apagado para a aplicação de novas funcionalidades

// $conta = new Conta('123.456.789-10', 'Vinicius Dias');
// $nova = $conta;
// unset($conta);