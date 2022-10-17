<?php
$num = rand(1,30);
if($num % 3 == 0){
    echo "$num é multiplo de 3<br>"; 
}
if($num % 2 == 0){
    echo "$num é multiplo de 2 <br>";
}
if($num % 7 == 0){
    echo "$num é multiplo de 7 <br>";
}