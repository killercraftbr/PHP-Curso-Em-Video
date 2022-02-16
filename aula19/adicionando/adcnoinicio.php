<?php
$v = array("a","j","m","x","k");
#adicionou o 7
array_unshift($v,7);
#adicionou no array o 8
array_unshift($v,8);
#removeu no array o 8 kkkkkkkk esse 8 foi disfeito
array_shift($v);
print_r($v)
?>