<?php
// Funções anonimas. Não tem nome e não retornam valor

function test($callback){
    
    $callback();
};

test(function(){ // Mesmo conceito de Promises
    echo 'terminou';
});

// Uma outra forma
$fn = function($a) {
    var_dump($a);
};

$fn("Oi");
?>