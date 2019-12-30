<?php
// getters and setters
// pegar atributos de uma classe e atribuir valores a ela
// um atributo ou método criado como publico ou privado torna-se possível de enxerga-lo de
// qualquer lugar do seu código ou não.

class Mutant {

    private $name;
    private $mutantName;
    private $mutantGroup;

    public function getName() {
        return $this->name;
    }

    public function setName($value) {
        print_r($value."<br>"); // o equivalente ao console.log no php é o print_r ou var_dump
        var_dump($value."<br>");
        return $this->name = $value;
    }

    public function getMutantName() {
        return $this->mutantName;
    }

    public function setMutantName($value) {
        return $this->mutantName = $value;
    }

    public function getMutantGroup() {
        return $this->mutantGroup;
    }

    public function setMutantGroup($value) {
        return $this->mutantGroup = $value;
    }

    public function showMutant() {
        return array(
            "name"=>$this->getName(),
            "mutantName"=>$this->getMutantName(),
            "mutantGroup"=>$this->getMutantGroup()
        );
    }
}

$cyclops = new Mutant();
$cyclops->setName('Scott Summers');
$cyclops->setMutantName('Cyclops');
$cyclops->setMutantGroup('X-men');

print_r($cyclops->showMutant());
var_dump($cyclops->showMutant());
?>