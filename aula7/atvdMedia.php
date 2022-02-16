<?php
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$n3 = $_GET['n3'];
$n4 = $_GET['n4'];

echo "as  notas sao: $n1, $n2, $n3, $n4</br>";
$media = ($n1+$n2+$n3+$n4)/4;
echo "a media e de: $media</br>";

echo "o aluno foi ".(($media >= 5) ? "aprovado": "reprovado");



//if ($media > 7) {
//echo "o aluno foi aprovado";
//}
//else{
//echo "o aluno foi reprovado";
//}

?>