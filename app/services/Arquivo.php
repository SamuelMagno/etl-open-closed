<?php 

namespace App\Services;

class Arquivo 
{
    private $dados = [];

    public function setDados(string $nome, string $cpf, string $email) {
        array_push($this->dados, ['nome' => $nome, 'cpf' => $cpf, 'email' => $email]);
    }

    public function getDados() {
        return $this->dados;
    }
}