<?php

namespace Cliente;

class Cadastro extends \Cadastro { // buscando o Cadastro lá na raiz
    public function registrarVenda() {
        echo "Foi registrada uma venda para o cliente ".$this->getNome();
    }
}

?>