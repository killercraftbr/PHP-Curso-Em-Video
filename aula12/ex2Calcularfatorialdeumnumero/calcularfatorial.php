<?php
$n= $_GET["n"];
$resultado = 1 ;
echo "$n!= ";
do{
    echo "$n.";
    $resultado*=$n; 
    $n--;

}while($n>=1);
echo "=$resultado";
?>