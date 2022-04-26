<?php

require_once 'src/criar-conta.php';
require_once 'src/Endereco.php';
require_once 'src/Cliente.php';
$endereco = new Endereco('sbc', 'centro', 'sao pedro', '131');
$cliente = new Cliente("50946687811", "Gabriel de Albuquerque Alves", $endereco);
$primeiraConta = new Conta($cliente);
// $primeiraConta->saldo = 200; com o private no atributo da classe faz com que essa manipulação por fora não seja possível
$primeiraConta->depositar(3000);
echo $primeiraConta->mostraCpf();
echo $primeiraConta->mostraNome();
echo $primeiraConta->mostrarSaldo();
var_dump($cliente);
// Encapsulamento protege no;ssa aplicação definindo permissões e obrigando a seguir os metodos,criando uma consistencia
// Abstração traz o que é necessário para o nosso sistema

echo Conta::numeroContas();
var_dump($primeiraConta);
?>