<?php
$v= array(1=>"A", 3=>"B", 6=>"C", 8=>"D");
$v[]= "E";
unset($v[8]);
print_r($v);
?>
