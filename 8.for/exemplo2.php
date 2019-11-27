<?php
// Exemplo do que não fazer
for($i=0; $i < 10; $i--) {
    // se eu estou diminuindo e partindo do zero
    // eu nunca vou chegar a 10, então isso aqui
    // ficara num loop infinito

    // if($i === -2000) break;
    echo $i;
}
?>