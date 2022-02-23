<?php
//arrays
$perifericos = array(1=>"mouse","headset","mousepad");//retire o "1=>" e verifique as mudanças na saída
print_r($perifericos);
echo "<hr>";
echo $perifericos[1];
echo "<hr>";
//adicionando no array
$perifericos[] = "teclado";
$perifericos[8] = "microfone";//perceba que podemos escolher o índice quisermos na hora de adicionar
print_r($perifericos);
echo "<hr>";
//Alterando valor no array
$perifericos[8] = "webcam";
echo "$perifericos[8] <br>";
print_r($perifericos);
echo "<hr>";
// Outra forma de declarar o array
$motos = ["CG-150","Ninja","CB-300","Tornado"];
print_r($motos);
echo "<hr>";
//Para contar arrays
echo 'O comprimento do arrays do periféricos é '.count($perifericos);
echo "<hr>";

// Iteração
foreach ($motos as $valor){
    echo $valor."<br>";
}