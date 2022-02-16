<?php
$numinicio = $_GET["numcomeco"];
$numfinal = $_GET["numfinal"];
$numquanto = $_GET["numquanto"];
$numquanto = (int)$numquanto;
echo $numquanto;
$i=1;
while($i <= $numfinal){

    echo "numero$i : $numinicio<br>";
    $i++;
$numinicio= $numinicio+$numquanto;
if($numinicio <= $numfinal){

}else{
    echo "passou do valor permitido";
    break;
}
}

?>