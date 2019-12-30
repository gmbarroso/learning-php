<?php
// Interface
// Para que serve? PAra organizar o seu próprio código.
// Interface Define padrões. Métodos votados para um assunto específico.
interface Veiculo { // definindo uma interface com seus métodos
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($velocidade);
}

class Civic implements Veiculo {

    public function acelerar($velocidade) {
        echo "O veículo acelerou até ".$velocidade." km/h";
    }

    public function frenar($velocidade) {
        echo "O veículo frenou até ".$velocidade." km/h";
    }

    public function trocarMarcha($marcha) {
        echo "O veículo engatou a marcha ".$marcha;
    }
}

$carro = new Civic();

$carro->trocarMarcha(1);

// Uma classe pode trabalhar com diversas interfaces
?>