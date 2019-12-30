<?php
// Método Mágico ou Método Construtor
// Método Construtor é um método normal, só que ele é executado automaticamente quando
// é instanciado pela classe. Ou seja, quando há um new Classe, ele executado automaticamente 
// os métodos mágicos que estão lá dentro
// A regra, para que ele seja um método construtor, é que esse método tenha exatamente o mesmo nome da classe

// todo método mágico começa com dois underlines __
// Essa de o método ter o mesmo nome da classe, está caindo em desuso.
// agora, para usar um método mágico, deve-se usar um __construct

class newMutante {
     private $name;
     private $mutantName;
     private $mutantGroup;

     public function __construct($value1, $value2, $value3) {
         $this->name = $value1;
         $this->mutantName = $value2;
         $this->mutantGroup = $value3;
         $this->powers = "Adamantium Claws"; // inserindo um valor
     }

     public function __destruct() {
        var_dump("Limpando variáveis");
     }

}

$wolverine = new newMutante("Logan", "Wolverine", "X-men");

var_dump($wolverine);

unset($wolverine); // Caso queira limpar todas as variáveis quando o código terminar de executar
?>