<?php 

namespace App\Services;

class LeitorTxt extends Arquivo 
{
    public function lerArquivo(string $caminho) {
        $handle = fopen($caminho, 'r');

        while(! feof($handle)) {
            $linha = fgets($handle);
            $nome = substr($linha, 11, 30);
            $cpf = substr($linha, 0, 11);
            $email = substr($linha,41, 30);
            $this->setDados($nome, $cpf, $email);
        }
        fclose($handle);

        return $this->getDados();
    }
}