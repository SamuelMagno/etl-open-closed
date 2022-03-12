<?php

namespace App\Services;

use App\Services\Arquivo;

class Leitor 
{
    private $diretorio;
    private $arquivo;

    public function getDiretorio(): string {
        return $this->diretorio;
    }

    public function getArquivo(): string {
        return $this->arquivo;
    }

    public function setDiretorio(string $diretorio) {
        $this->diretorio = $diretorio;
    }

    public function setArquivo(string $arquivo) {
        $this->arquivo = $arquivo;
    }

    public function lerArquivo() {
        $caminho = $this->getDiretorio() . '/' . $this->getArquivo();

        $ext = explode('.', $this->getArquivo());

        if($ext[1] == 'csv') {
            $leitor = new LeitorCsv();
            $leitor->lerArquivo($caminho);
        }else {
            $leitor = new LeitorTxt();
            $leitor->lerArquivo($caminho);
        }
        return $leitor->getDados();
    }
}