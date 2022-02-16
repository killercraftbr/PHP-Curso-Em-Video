<?php
// o que vc fazer na variavle a, vai acontecer na variavel b, se colocar um & nela
echo "<h1>valores referenciais</h1>";
$a = 3;
$b = &$a;
$b += 5;
echo "a= $a<br>";
echo "b= $b";

?>