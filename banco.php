<?php

require_once 'src/criar-conta.php';

$primeiraConta = new Conta("40028922", "Gabriel de Albuquerque Alves");
// $primeiraConta->saldo = 200; com o private no atributo da classe faz com que essa manipulação por fora não seja possível
$primeiraConta->depositar(3000);
echo $primeiraConta->mostrarCpf();
echo $primeiraConta->mostrarNome();
echo $primeiraConta->mostrarSaldo();
// Encapsulamento protege nossa aplicação definindo permissões e obrigando a seguir os metodos,criando uma consistencia
// Abstração traz o que é necessário para o nosso sistema
?>