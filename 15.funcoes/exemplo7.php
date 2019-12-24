<?php
// PHP é uma linguagem fraca na tipagem de valores
function soma(int ...$valores) { // spread operator, traz tudo o que tem naquela variável
    // com o int na frente eu estou dizendo que o valor da minha variável será um inteiro
    return array_sum($valores); // soma tudo o que tem dentro do array
};

echo soma(2);
echo "<br>";
echo soma(2, 2);
echo "<br>";
echo soma(34, 31);
echo "<br>";
echo soma(1.5, 3.2); // vai ignorar que é float
echo "<br>";

function outraSoma(float ...$valores):float { // com os : depois da função, eu estou dizendo que tipo de dado que eu quero na saída,
    // no resultado daquela função
    return array_sum($valores);
};

echo var_dump(soma(2, 2));
echo "<br>";
echo soma(34, 31);
echo "<br>";
echo soma(1.5, 3.2);
echo "<br>";
?>