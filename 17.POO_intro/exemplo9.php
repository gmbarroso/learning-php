<?php
// Polimorfismo - Muito usado quando usado com Herança.
// Classes herdadas com mesmo nome que tem comportamentos diferentes
abstract class Animal {
    public function falar() {
        return "Som";
    }

    public function mover() {
        return "Anda";
    }
}

class Cachorro extends Animal {
    public function falar() {
        return "Latir";
    }
}

class Gato extends Animal {
    public function falar() {
        return "Mia";
    }
}

class Passaro extends Animal {
    public function falar() {
        return "Canta";
    }

    public function mover() {
        return "Voa e ".parent::mover(); // O parent se refere a classe pai, que ai ele faz o polimorfimos E usa o método da classe pai
    }
}

$pluto = new Cachorro();
var_dump($pluto->falar())."<br>"; // Aqui ele executou o polimorfismo
var_dump($pluto->mover())."<br>";

$garfield = new Gato();
var_dump($garfield->falar())."<br>";
var_dump($garfield->mover())."<br>";

$ave = new Passaro();
var_dump($ave->falar())."<br>";
var_dump($ave->mover())."<br>";
?>