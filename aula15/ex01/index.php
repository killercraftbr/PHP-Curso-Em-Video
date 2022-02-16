<?php

function teste(&$x){

    $x+= 2;
    echo "o valor de x é $x";
}
$a= 3;
teste($a);
echo "<p>o valor de A é $a</p>";
?>