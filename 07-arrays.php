<?php
// Arrays numéricos
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
echo $valor."<hr>";

//Arrays associativos
$pessoa = array("nome"=>"Jurandi","idade"=>35,"altura"=>1.76);

echo 'Altura: '.$pessoa['altura']." metros<br>";//acesso pelo indice
foreach($pessoa as $indice => $valor){//pegando valor do indice e do valor do array
    echo $indice.': '.$valor."<br>";
}
echo "<hr>";
// Arrays multidimencionais
$carros = [
    "honda"=>["civic","crv","hrv"],
    "fiat"=>["toro","strada","palio"],
    "ford"=>["fusion","f-350","fiesta"]
];
echo "Carros da Honda:<br>";
foreach($carros["honda"] as $v){
    echo $v."<br>";
}
echo "Carros da Fiat:<br>";
foreach($carros["fiat"] as $v){
    echo $v."<br>";
}
echo "Carros da Ford:<br>";
foreach($carros["ford"] as $v){
    echo $v."<br>";
}