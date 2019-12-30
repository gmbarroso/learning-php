<?php
// Encapsulamento
// Significa proteger, ou controlar quem pode ver o que.
// ou seja, um atributo, ou um método, você pode modificar quem pode modificar suas instancias
// public, privat, static, protected

class OtherMutant {
    public $name = 'Ororo'; // todo mundo vê
    protected $mutantName = 'Storm'; // mesma classe ou classes extendidas vêem
    private $mutantGroup = 'X-men'; // só na mesma classe 

    public function seeMutant() {
        echo $this->name."<br/>";
        echo $this->mutantName."<br/>"; // aqui eu consigo acessar por causa do escopo dela. a variável está com protected,
        // mas a função está dentro da Classe
        echo $this->mutantGroup."<br/>";
    }
}

class SameMutantFromAbove extends OtherMutant { // extends significa que ele está trazendo tudo o que a Classe já carrega
    
    public function seeMutant() { // mesma função, mas em um escopo diferente
        echo get_class($this)."<br/>"; // Para mostrar de qual classe estão vindo esses dados

        echo $this->name."<br/>";
        echo $this->mutantName."<br/>";
        echo $this->mutantGroup."<br/>";
    }

}

$mutant = new OtherMutant();
$sameMutant = new SameMutantFromAbove();

// echo $mutant->name."<br/>";
// // echo $mutant->mutantName."<br/>"; // Dá erro pois estou tentando acessar uma variável fora da Classe que está com protected
// echo $mutant->mutantGroup."<br/>"; // Está privado. Nem mesmo os herdados conseguem acessar essa variável

$mutant->seeMutant(); // Aqui, todos serãoa cessados, pois estou acessando uma função que acessa as variáveis que estão na mesma Classe
$sameMutant->seeMutant(); // Repare que mesmo assim o dado privado não será exibido
?>