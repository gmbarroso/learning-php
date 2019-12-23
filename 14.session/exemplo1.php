<?php
// Diferenças entre variáveis locais e variáveis de sessão
// Variáveis locais só funcionam nas páginas onde foram criados ou onde elas são chamadas pelo include ou require
// Variáveis de sessão se assemelham as variáveis super globais, são enxergadas de qualquer lugar do nosso código
// enquanto o usuário estiver online. No caso da Bionexo, utilizamos o REDIS.
// Uma sessão se inicia quando um usuário se conecta. Uma sessão entre um usuário e o servidor. (Google.com)
// Uma sessão dura um tempo
// Uma sessão pode ser mtada a qualquer momento

// No php por padrão, uma sessão não se inicia automaticamente. Isso pode ser mudado

// session_start(); // Aqui eu digo para o meu código que uma seção está sendo iniciada
require_once("config.php");

$_SESSION["nome"] = "Guilherme" // declarando uma variável global a ser iniciada quando uma seção for iniciada

?>