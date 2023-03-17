<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();

$primeiraConta->depositar(1000);
$primeiraConta->sacar(300); //isso é ok

var_dump($primeiraConta);