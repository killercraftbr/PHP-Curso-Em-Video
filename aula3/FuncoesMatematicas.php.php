<?php
$a= -2;
$v1 = $_GET['x'];
$v2 = $_GET['y'];
echo "<h2>Valores recebidos: $v1 e $v2</h2>";
echo "o valor absoluto de $a e ". abs($a);
echo "<br>o valor de $v1<sup>$v2</sup> e ".pow($v1, $v2);
echo "<br>A raiz de $v1 é ". sqrt($v1);
echo "<br> O valor aredondado de $v2 é ".round($v2); /*ceil sempre aredonda pra cima e floor sempre aredonda pra baixo */
echo "<br> a parte inteira de $v2 é de ".intval($v2);
echo "<br> o valor de $v1 em moeda é de R$" .number_format($v1,2,",",);
?>