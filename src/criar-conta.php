<?php

class Conta
{
    //definir dados
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;
    // define um valor inicial ao atributo do objeto ao ser instanciado
    // private float $saldo = 0;
    
    // Construtor obriga a realizar as instancias do objeto
    public function __construct(string $cpfTitular,string $nomeTitular)
    {
        $this->nomeTitular = $nomeTitular;
        $this->cpfTitular = $cpfTitular;
        $this->saldo = 0;
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
    public function mostrarSaldo(): float
    {
        return $this->saldo;
    }

    public function mostrarNome(): string
    {
        return $this->nomeTitular;
    }

    public function mostrarCpf(): string
    {
        return $this->cpfTitular;
    }
   
}

// public defina que o acesso aos atributos será public
// this se refere ao objeto que chamou o metodo
// -> acessa os valores dos atributos ou funções do objeto instanciado
// classe é a definição objeto especifico(classe receita objeto o bolo)
// Utilizando o return vazio em uma função void(não possui retorno) faz com que pare o código no if evitando o uso do else
// private permite que só apartir da instanci conseguimos acessar os atributos 
