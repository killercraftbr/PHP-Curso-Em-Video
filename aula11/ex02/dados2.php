<?php
$i = 1;
$j= 1;
//$teste = $_GET['numdig1'];

$valor2 = $_GET['numvars'];
while($i <=$valor2){
$v ="numdig".$i;
$url = "numdig".$i;
$$v = $_GET[$url];
//echo $teste;
$i++;
}
while($j <=$valor2){
    $v= "numdig".$j;
    echo "Valor $j: " . $$v."<br>";
    $j++;
}

?>