<?php

require_once 'src/criar-conta.php';
require_once 'src/Cliente.php';

$primeiraConta = new Conta(new Cliente("50946687811", "Gabriel de Albuquerque Alves"));
// $primeiraConta->saldo = 200; com o private no atributo da classe faz com que essa manipulação por fora não seja possível
$primeiraConta->depositar(3000);
echo $primeiraConta->mostraCpf();
echo $primeiraConta->mostraNome();
echo $primeiraConta->mostrarSaldo();
// Encapsulamento protege nossa aplicação definindo permissões e obrigando a seguir os metodos,criando uma consistencia
// Abstração traz o que é necessário para o nosso sistema

echo Conta::numeroContas();
var_dump($primeiraConta);
?>