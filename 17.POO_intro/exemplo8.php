<?php
// Classe Abstrata
interface Veiculo {
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($velocidade);
}

abstract class Automovel implements Veiculo { // qyualquer automovel implementa a classe veiculo
    // mas temos que dizr que automovel que é

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

class Escort extends Automovel {
    public function empurrar() {

    }
}

$carro = new Automovel();
$carro->acelerar(200);
?>