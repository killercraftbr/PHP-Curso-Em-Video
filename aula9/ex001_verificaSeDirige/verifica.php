<?php
$ano = $_GET["ano"];
$nome = $_GET["nome"];
$idade = ((int)date("Y")) - ((int)$ano);

//verificar se pode dirigir ou nao

    #maior q 18 e menor que 65
if($idade >=18 && $idade <=65){
    $dirigir = "true"; 
    $votar = "true";  
echo "1"  ;  }

    #maior q 16 e menor que 18
    if($idade >=16 && $idade <=18){
 $votar = "opcional";
 $dirigir="false";
echo "2";}

    #maior q 65
    if( $idade >=65 ){
  $votar = "opcional";
  $dirigir="true";
  echo "3"; 
}
if($idade <16){ $dirigir = "false";
      $votar = "false";
    echo '4';}



//mostrar pro usuario

if($votar == "true" && $dirigir == "true"){
 echo "$nome que nasceu em $ano, com a idade de $idade<br>
 tem direito de votar e dirigir";
}
elseif($votar == "opcional" && $dirigir == "false"){
    echo "$nome que nasceu em $ano, com a idade de $idade<br>
    tem direito de votar como opcional e nao pode dirigir";
   }
   elseif($votar == "opcional" && $dirigir == "true"){
    echo "$nome que nasceu em $ano, com a idade de $idade<br>
    tem direito de votar como opcional, e pode dirigir";
   }
   elseif($votar == "false" && $dirigir == "false"){
    echo "$nome que nasceu em $ano, com a idade de $idade<br>
    nao tem direito de votar , e nem de dirigir";
   }

?>
