<?php


/* atribuicoes e quando eu quero adicionar ele mesmo com outro numero 
sendo eles:
 -x-
 adicao ->$a += $b;
 subtracao ->$a -= $b;
 divisao ->$a /= $b;
 multiplicacao *= $b;
 modulo ->$a %= $b;
 concatenacao ->$a .= $b;
 */
$preco = $_GET["p"];
 /*$desconto = ($preco *10)/100;
 $total = $preco - $desconto;
 echo "<h1> o preco é de /$preco com desconto fica $desconto, entao vai ficar $total  </h1>"*/

 echo "<h1> o preco original é de $preco";
 $preco -=($preco *10/100);

 echo "<h2> o novo preco com  10% de desconto fica R$" . number_format($preco, 2). "</h2>" ;

?>