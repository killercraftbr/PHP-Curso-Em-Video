<?php
$n1 = $_GET['a'];
$n2 = $_GET['b'];
$s = $n1 + $n2;
echo "<br>valores recebidos: $n1 e $n2";
echo "<br>a soma vale ". ($n1 + $n2);
echo "<br>a divisao vale ". ($n1 /$n2);
echo "<br>a subtracao vale ".($n1 - $n2);
echo "<br>o modulo vale". ($n1%$n2)
/*

valores aritmedicos:
 -x-
 
adicao    $s= $n1 + $n2
subtracao $s = $n1 - $n2
divisao   $s = $n1 / $n2
modulo    $s = $n1 % $n2

ordem de presedencia
 -x-
parenteses
multiplicacao
divisao
modulo
soma
subtracao
*/
?>