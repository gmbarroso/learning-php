<?php
// Intro para POO

// Classe
// Pensar classe como se fosse uma ciaxa que contêm coisas dentro que
// eu crio para que se torne acessível através de outras partes do meu código
// O que importa em uma classe é o que está dentro dela.
// Encontro variáveis e funções que ganham recursos a mais, onde eu escolho quem acessa e quem não acessa elas
// Variáveis = atributos - o que eu preciso armazenar
// Funções = métodos - o que eu preciso executar

// Para usar esses atributos e métodos eu preciso criar uma instancia (objetvo)
// uma instancia é quando eu preciso usar essa classe
// Eu crio um objeto quando eu precio instanciar uma classe. E através desse objeto eu acesso tudo o que essa classe tem
// resumindo, um objeto é uma variável que tira uma ópia de uma classe
// Objeto é uma variável que representa uma classe - uma instancia

// a estrutura de uma classe
class Pessoa {
    // deifnindo atributos e métodos da minha classe.
    public $nome; // atributo

    public function falar(){ // método

        // Na linha 21 eu tenho uma variável que está dentro da classe, mas está fora do método falar
        // para usar ela, então eu uso o $nome direto. Só que, para fazer referencia a esse atributo, dentro de um método
        // eu uso o $this->variável - serve para referenciar
        return "Meu nome é ".$this->nome; // $this é uma variável que já existe
    }
}

$guilherme = new Pessoa();
$guilherme->nome = "Guilherme Barroso";

echo $guilherme->falar();

?>