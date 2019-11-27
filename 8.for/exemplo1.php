<?php
// For no php funciona como um contador
// que pode ser um incrementador ou descrementador
// OBS: viu um for é um contador

for ($i = 0; $i <= 100; $i++) {
    echo $i . "<br>";
}

echo "<br><br>";

for ($i = 0; $i < 1000; $i += 5) {

    if($i > 200 && $i < 800) continue; // estou dizendo para o contador não parar, um break

    if ($i === 900) break;
    echo $i . "<br>";
}
?>