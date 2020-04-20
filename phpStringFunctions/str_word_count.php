<?php

//conta a quantidade de palavras em uma string
    $txt = "Hello World!";
    $esp = " ";

    echo $txt . $esp;
    echo str_word_count($txt) . " Palavras";