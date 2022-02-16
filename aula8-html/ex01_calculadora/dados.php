<?php


//aqui é onde vai pegar as variaveis
$valor1= $_GET["valor"];
$valor2= $_GET["valor2"];
$op= $_GET["operacao"];

//vai armazenar o nome da variavel do operador

$verificatexo1= ($op == "soma") ? $textovalor = "soma": "none";
$verificatexo2= ($op == "subtracao") ? $textovalor = "subtracao":"none";
$verificatexo3 = ($op == "multiplicacao") ? $textovalor = "multiplicacao":"none";
$verificatexo4 = ($op =="divisao") ? $textovalor = "divisao":"none" ;

//aqui é onde vai mostrar as variaveis
echo "o valor do primeiro numero é de: $valor1<br>";
echo "o valor do segundo numero é de: $valor2<br>";
echo "o operador é: $textovalor<br>";

//aqui e onde vai verificar o primeiro numero
$verificanumero1 = ($op == "soma")? $valortt =$valor1+$valor2:"none" ;
$verificanumero2 = ($op == "subtracao")? $valortt= $valor1-$valor2:"nonee" ;
$verificanumero3 = ($op == "multiplicacao")? $valortt=$valor1*$valor2:"none" ;
$verificanumero4 = ($op == "divisao")? $valortt= $valor1/$valor2:"none" ;


//sem if e else fica mais dificil as coisas aaaaa

//aqui vai ser onde vai mostrar o valor
echo "o valor da $textovalor de $valor1 e $valor2 é de $valortt <br>"
?>
<a href=index.html>voltar</a>
