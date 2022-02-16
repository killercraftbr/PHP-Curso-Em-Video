<?php
$semana = $_GET['semana'];

switch ($semana){
    case "segunda-feira":
        case "terca-feira":
        case "quarta-feira":
        case "quinta-feira":
        case "sexta-feira":
        $texto = "vc devera ir a escola hj pois é $semana";
        break;
 case "sabado":
    case "domingo":
        $texto=" vc nao precisa ir a escola hj pois é $semana";
        break;
}
echo $texto;
?>