<?php

spl_autoload_register(function($nameClass){
    var_dump($nameClass);

    $dirClass = "class"; // qual pasta o arquivo se encontra
    $filename = str_replace("\\", "/", $dirClass.DIRECTORY_SEPARATOR.$nameClass.".php");

    if (file_exists($filename)) {
        require_once($filename);
    }
})

?>