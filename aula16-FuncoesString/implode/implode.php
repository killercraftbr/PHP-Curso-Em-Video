<?php
#resumidamente ela coloca algo depois de cada vetor de texto :)
$vetor[0]="curso";
$vetor[1]="em";
$vetor[2]="video";
$texto = implode("##",$vetor);#pode usar tmbm o join
print ($texto);
?>