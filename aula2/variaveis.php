

<?php
$idade = 18;
$salario = 1825.54;
$nome = 'Jose';
$casado = false ;
?>
<style>
h3{
    color: #000000 ;
}
</style>
<head>
<h1>aula de variaves no php</h1>

</head>
<body>
<h2> concatenação </h2>

<h3><?php
/* este codigo mostra a concatenacao... */
 echo " ola, $nome!  vc tem  $idade anos "?></h3>
<h2> concatenação com pontos </h2>

<h3><?php
/* este codigo mostra a concatenacao com pontos !(fica mais dificil)... */
echo  'ola '. $nome.'! '.  'vc tem '.  $idade. 'anos!' ?></h3>

</body>