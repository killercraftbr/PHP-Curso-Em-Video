<body>
<?php
$n= $_GET["n"];
$x= 1;
echo "<h1>tabuada do $n</h1>";
do{
echo "$x x $n=";
$resultado=$x*$n ;
echo "$resultado<br>";
$x++;
}while($x<=10);

?>
<a href="index.html">voltar</a>
</body>