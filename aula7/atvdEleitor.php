<?php

$ano = $_GET['ano'];
$anoAtual= 2022;
echo "vc nasceu em $ano</br>";
$idade= $anoAtual - $ano;
echo "sua idade é de $idade anos";
$verificaUsuario =($idade >=16  && $idade >=65 || $idade <=16)? "opcional":"obrigatorio";
echo "<br>voce tem o direito de votar como $verificaUsuario"
?>
