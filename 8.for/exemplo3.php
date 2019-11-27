<?php
// exemplo de como utilizar um for dinamico com html
echo "<select>";

for ($i = date("Y"); $i >= date("Y") - 100; $i--) {
    echo "<option value='{$i}'> {$i} </option>";
}

echo "</select>"
?>