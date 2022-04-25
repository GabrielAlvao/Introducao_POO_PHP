<?php

class Cliente
{
    private $cpf;
    private $nome;

    public function __construct(string $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNome($nome);
        $this->nome = $nome;
    }
    public function getCpf(): string
    {
        return $this->cpf;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    private function validaNome(string $nomeTitular)
    {
    if (strlen($nomeTitular) < 5) {
        echo "Nome precisa ter mais de 5 caracteres";
        exit();
    }
   }
}