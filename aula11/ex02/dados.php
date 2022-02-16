<body>

<form method="get" action="dados2.php">

<?php
$numvars = $_GET["valor"];
$valorinicial = 1;

 $i=1;

while ($i <= $numvars ){
echo "<input type='hidden' name='numvars' value='$numvars' >"; 
    echo "valor $valorinicial: 
    <input type='number' name='numdig$valorinicial'><br>";
   
    $i ++;
    $valorinicial++;
}
?>
<input type="submit" value="mandar">
</form>

</body>