<?php

namespace src;

class Arquivo
{
    private $dados = [];

    public function lerArquivoCSV(string $caminho)
    {
        $handle = fopen($caminho, 'r');
        while (($linha = fgetcsv($handle, 100, ';')) !== false) {
            $this->setDados($linha[0], $linha[1], $linha[2]);
        }
    }

    public function getDados(): array 
    {
        return $this->dados;
    }

    private function setDados(string $nome, string $cpf, string $email): void
    {
        array_push($this->dados, [
            'nome' => iconv('iso-8859-1', 'utf-8', $nome),
            'cpf' => $cpf,
            'email' => $email
        ]);
    }
}
