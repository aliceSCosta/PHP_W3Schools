<?php

# Constantes definidas em php são automaticamente globais

define("join", "Hello World");

function MyTest(){
    echo join;
}

MyTest();