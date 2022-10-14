<?php
$chico = 150;
$juca = 110;
$resposta = 0;

for ($juca=110; $juca < $chico  ; $juca++) { 
    $chico +2;
    $juca +3;
    $resposta += 1;
}
echo $resposta . " anos";
?>