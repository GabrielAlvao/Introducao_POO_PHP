<?php

class Conta
{
    //definir dados
    private $cliente;
    private float $saldo;
    // define um valor inicial ao atributo do objeto ao ser instanciado
    // private float $saldo = 0;
    private static $numeroDeContas = 0;
    // Construtor obriga a realizar as instancias do objeto
    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
        $this->saldo = 0;
        self::$numeroDeContas++;
    }
    public function __destruct()
    {
        self::$numeroDeContas--;
    }
    // FUNÇÕES SET
    public function sacar($valor):void
    {
        if ($valor > $this->saldo) {
            echo "Saldo Insuficiente";
            return;
        }
            $this->saldo -= $valor;
        
    }

    public function depositar($valor):void
    {
        if ($valor < 0) {
            echo "Deposito precisa ser positivo";
            return;
        }
            $this->saldo += $valor;
        
    }

    public function transferir(float $valor, Conta $contaDestino):void
    {
        if ($valor > $this-> saldo) {
            echo "Valor maior que o saldo disponível";
            return;
        }
            $this->sacar($valor);
            $contaDestino->depositar($valor);
        
    }

    // FUNÇÕES GET
    public function mostraNome(): string
    {
        return $this->cliente->getNome();
    }
    public function mostraCpf(): string
    {
        return $this->cliente->getCpf();
    }
    public function mostrarSaldo(): float
    {
        return $this->saldo;
    }
   public static function numeroContas() : int
   {
       return self::$numeroDeContas;
   }
  
}

// public defina que o acesso aos atributos será public
// this se refere ao objeto que chamou o metodo
// -> acessa os valores dos atributos ou funções do objeto instanciado
// classe é a definição objeto especifico(classe receita objeto o bolo)
// Utilizando o return vazio em uma função void(não possui retorno) faz com que pare o código no if evitando o uso do else
// private permite que só apartir da instanci conseguimos acessar os atributos 
// self se refere a própria classe
// metodo statico se mantem estatico permitindo com que, por exemplo haja uma contagem do número de contas
// metodo destrutor elimina da memoria o que não tiver uma referencia