<?php

$num= $_GET["num"];
$ttprimo=0;


echo "<h2>numero escolhido:$num</h2><br>";
for($i=1;$i<10;$i++){

if($num % $i==0){
    echo "é divisivel por $i<br>";
$ttprimo++;
}

};
echo "o tanto de numeros primos foi de $ttprimo<br>";
if($ttprimo>2){
echo "nao é primo";
}
else if($ttprimo<=2){
    echo "é primo";
};
?>