<?php

echo "<br>";

# As informações podem ser passadas para funções através de argumentos. Um argumento é como uma variável.

# Você pode adicionar quantos argumentos quiser, basta separá-los com uma vírgula.

function familyName($fname){
    echo "$fname Costa.<br>";
}

familyName("Alice");
familyName("Vitória");
familyName("Gustavo");

echo "<br>";


# Função com 2 argumentos

function familyName2($fname, $year){
    echo "$fname Costa nasceu em $year.<br>";
}

familyName2("Alice", "2001");
familyName2("Vitória", "2007");
familyName2("Gustavo", "2006");