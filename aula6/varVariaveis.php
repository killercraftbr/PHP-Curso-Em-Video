<?php
//resumidamente, vc vai ter uma variavel com o conteudo da variavel anterior
$x = 'abc';
$$x= 'def';
echo "<h1>valores referenciais</h1>";
echo "o conteudo da variavel é $x";
echo "<br>o conteudo da  variavel ABC e $abc"

?>