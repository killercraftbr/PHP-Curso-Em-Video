<?php
$txt ="este e um exemplo de string gigante que...";
$res= wordwrap($txt, 1, "<br/>\n");
echo($res);
?>