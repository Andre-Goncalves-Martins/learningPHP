<?php
//Escopa global
$a = 3;
$b = 5;
$c = 10;

$estado = 'PE';

function exibeEstado(){
    //escopo local
    global $estado;//acessando variável global
    $estado = '<hr> MA';
}

echo $estado;
exibeEstado();
echo $estado;
//////////

function soma(){
    //echo $a; // se tentar fazer assim vai ter erro de varíavel não definida
    echo $GLOBALS["a"] + $GLOBALS['b'] + $GLOBALS['c'];
}
echo "<hr>";
soma();