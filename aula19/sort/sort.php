<?php
$v = array("3","1","2","4","5","7","9","6"); 
echo "sem o sort<br>";
print_r($v);
#ordena os indices e os valores
sort($v);

#colinha

#rsort($v); funciona como reverso
#asort() = ele vai mexer com os itens, mantendo os indices;
#arsort($v); funciona como reverso mantendo os indices
#ksort(); ele vai mudar os indices somente
#krsort(); ele vai mudar os indices somente de forma reversa
#funciona com letras tmbm
print_r($v);
?>