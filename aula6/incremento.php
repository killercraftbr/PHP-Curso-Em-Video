<?php
/* incrementos 
pre incremento = ++$a
pos incremento = $a++
pre decremento = --$a
pos decremento = $a--
*/
$ano = $_GET["ano"]; //essa çinha vai pegar o ano na URL
echo "<h3> mostrar qual foi o ano anterior ao ano atual</h3>";
echo "<h4>O ano Atual é $ano</h4>";
$ano = $ano --; //essa linha vai diminuir o ano
echo "<br><h4>O ano anterior é de $ano</h4>";
?>