<?php

class Cliente
{
    private string $cpf;
    private string $nome;
    private Endereco $endereco;

    public function __construct(string $cpf, string $nome, Endereco $endereco)
    {
        $this->cpf = $cpf;
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->endereco = $endereco;
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
   public function getEndereco(): Endereco
   {
       return $this->endereco;
   }
}