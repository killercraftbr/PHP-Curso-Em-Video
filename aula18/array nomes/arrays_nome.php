<?php
$v= array(
    "nome" =>"jose",
    "idade"=> "19",
    "peso" => "120kg"
);
$v["come"]= true;
print_r($v);

foreach($v as $k => $c){
    echo "o campo $k possui o conteudo $c <br>";
}
?>