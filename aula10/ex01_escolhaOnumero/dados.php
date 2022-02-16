
<?php
//pegar as variaveis
$operacao = isset($_GET["operacao"])? $_GET["operacao"]: $operacao="dobro";
$valor1 =isset($_GET['numero'])? $_GET["numero"]: $valor1="1";

//

switch ($operacao){
    case "dobro":
        $valortt= $valor1 * $valor1;
        break;
    case "cubo":
        $valortt= $valor1 * $valor1 * $valor1;
        break;
        case "raiz":
            $valortt= sqrt($valor1);
}
 echo $valortt
?>