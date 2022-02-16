<?php

#se botar 0, ela conta a palavra
#se botar 1, ela cria um array 
#se botar 2, ela vai criar uma array, mantendo o posicionamento de cada palavra em cada string

$frase ="eu vou estudar php";
$cont =str_word_count($frase,0);
echo $cont;


?>