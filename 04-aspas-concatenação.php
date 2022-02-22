<?php

$teste = 'Arlindo';
/* Para o PHP aspas simples são literais, tudo que está entre elas é considerado texto
Então se eu tentar exibir uma variável entre aspas simples não exibirá seu conteudo
exibirá o caracter literal que você digitou. Exemplo: */
echo 'Meu nome é $teste';//aspas simples
echo '<hr>';
echo "Meu nome é $teste";//aspas duplas
echo '<hr>';
echo 'Meu nome é '.$teste.' tenho 33 anos';//concatenação