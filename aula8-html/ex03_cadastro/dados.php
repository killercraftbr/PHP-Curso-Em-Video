<?php
//isset e tipo se foi configurado
$nome = isset($_GET['nome'])? $_GET['nome']:"[Nao informado]";
$ano = isset($_GET["ano"])? $_GET["ano"]:"[Data nao informada]";
$sexo = isset($_GET['sexo'])? $_GET["sexo"]:"[Sem sexo]";
$idade = ((int)date('Y') - (int)$ano);

echo "$nome<br>";
echo  "$idade<br>";
echo  "$sexo<br>";
echo "$ano<br>";
echo "$nome é $sexo, e tem $idade anos, e nasceu em $ano"
?>