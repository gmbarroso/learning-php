<?
// variaveis arrays super globais
// são aquelas que podem ser acessadas de qualquer lugar do seu código.
$nome = (int)$_GET["a"]; // a variavel nome é um array super global, acessivel de qualquer lugar do código
// no endereço do browser: localhost/variaveis/exemplo4.php?a=123&b=456
// toda informação que vir sempre por GET ou por POST sempre será uma string
// Coloco o (int) na frente para esse dado já vir convertido
// url - uniform resource location
// var_dump($nome);

// como pegar ip do suuário
$ip = $_SERVER["REMOTE_ADDR"]; // $_SERVER pega informações do ambiente
$ip = $_SERVER["SCRIPT_NAME"];
echo $ip;
?>