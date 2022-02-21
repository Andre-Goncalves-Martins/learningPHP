<?php
//Meus dados
$nome = "André Gonçalves Martins";
$idade = 23;
$altura = 1.73;

echo "Meu nome é $nome, tenho $idade anos de idade e $altura m de altura <br>";
echo "<br>";
// Alterando os dados
$nome = "José da Silva";
$idade = 49;
$altura = 1.65;

echo "Meu nome é $nome, tenho $idade anos de idade e $altura m de altura";

/*Nomes inválidos para variáveis
$12354nome
$carro@!#
$meu pe
*/

// Variável da variável
echo "<hr>";

$bebida = "refri";

$$bebida = "Coca-Cola";

echo "$refri";

$destino = "cidade";

$$destino = "Salgueiro";
echo"<br> $cidade"
?>