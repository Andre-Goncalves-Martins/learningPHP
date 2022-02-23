<?php

define("NOME","Joao Doria");
// Após definir uma vez o valor ele não pode ser mais mudado
echo NOME;

function exibeNome(){
    echo "<hr>";
    echo NOME.' é o nome dentro da constante NOME';
    echo "<hr>";
}

exibeNome();

//lista como contante
define("TIMES",['Flamengo','Botafogo','São Paulo']);

echo TIMES[0];