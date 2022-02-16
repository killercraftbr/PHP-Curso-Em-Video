<?php
function soma(){
    $p= func_get_args();
    $tot = func_num_args();
    $s=0;
    for($i=0;$i<$tot;$i++){
        $s += $p[$i];

    }
    return $s;
}

$res=soma(4,5,6,7,7,7,7,7,7,7,8);
echo $res;

?>