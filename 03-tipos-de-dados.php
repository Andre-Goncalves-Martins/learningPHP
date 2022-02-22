<?php
// tipos primitivos
$nome = 'Opa'; //string
$nome = 12.3;//float
$nome = 12;  //int
$nome = '12.3';//string
$nome = true;//boolean
var_dump($nome);
if(is_string($nome)):
    echo "É uma string";
elseif(is_int($nome)):
    echo "É um inteiro";
elseif(is_float($nome)):
    echo "É um float";
else:
    echo "Nem é int, nem float e nem string";
endif;
echo "<hr>";

//array
$jogos = array("GTA","Dragonball","Naruto Shippuden","Mortal Kombat");
var_dump($jogos);

if(is_array($jogos)):
    echo "É array";
else:
    echo "Não é um array";
endif;
echo "<hr>";

//object
class Cliente {
    public $nome;
    public function atribuiNome($nome){
        $this->$nome = $nome;
    }
 }

$cliente = new Cliente();
$cliente->atribuiNome("José");
var_dump($cliente);

if(is_object($cliente)):
    echo "É um objeto";
else:
    echo "Não é um objeto";
endif;
echo "<hr>";

//nulo
$nada = NULL;
var_dump($nada);


?>