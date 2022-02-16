<?php
$media1 = $_GET['valor1'];
$media2 = $_GET['valor2'];
$situacao = ($media1+ $media2)/2;

if($situacao <5){
 echo "retido";
}
if($situacao >=5 && $situacao <= 7 ){
echo "recuperacao";
}
if($situacao >=7){
    echo "passou de ano";
    }
?>