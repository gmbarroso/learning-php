<?php

// Herança - é quando uma classe herda os métodos e atributos de uma classe pai
// Uma classe poder ser usada para vários segmentos.
class MutantClass {
    private $mutant;

    public function getMutant() {
        return $this->mutant;
    }

    public function setMutant($value) {
        $this->mutant = $value;
    }
}

class Xmen extends MutantClass {
    public function validateMutant():bool {
        $xDna = $this->getMutant();

        return true;
    }
}

$newMutant = new Xmen();
$newMutant->setMutant("Cyclops");

var_dump($newMutant->validateMutant());

echo "<br/>";

echo $newMutant->getMutant();

?>