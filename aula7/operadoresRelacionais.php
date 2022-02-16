<?php

//operadores relacionais sao:
/* 
maior que: >
menor que: <
maior ou igual: >=
menor ou igual: <=
diferente: <>
igual: ==
identico: ===
*/
/* Operador lunario
expressao ? verdadeiro : falso 

$maior = $a?$a:$b;
*/
echo "<h1>Operadores Relacionais</h1>";

//atividade 1 permitir que o usuario escolha entre multiplicacao e divisao
echo "<h2>escolha no a como 2, numeros se for 1, sera adicao, se for 2, sera multiplicacao</h2>";
      /*  $tipo= $_GET['a'];
        $b= $_GET['b'];
        $c= $_GET['c'];
        $tipo= $a<=1? $b+$c : $b*$c;
        echo "$tipo"; */

//como foi passado
$n1 = $_GET["a"];
$n2= $_GET["b"];
$tipo = $_GET["op"];
echo " Os valores passados foram $n1 e $n2</br>";
$r= ($tipo == "s") ? $n1+$n2 : $n1*$n2; 
echo "o resultado sera $r"
?>