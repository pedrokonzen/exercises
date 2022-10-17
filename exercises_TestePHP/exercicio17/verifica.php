<?php
$num1 = rand(1,10);
$num2 = rand(1,10);
$num3 = rand(1,10);
echo "$num1 / $num2 / $num3"; 
if($num1 < $num2 & $num1 < $num3){
    echo "<br>O menor número é $num1";
}
if($num2 < $num1 & $num2 < $num3){
    echo "<br>O menor número é $num2";
}
if($num3 < $num2 & $num3 < $num1){
    echo "<br>O menor número é $num3";
}