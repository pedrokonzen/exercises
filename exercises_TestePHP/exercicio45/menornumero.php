<?php
if(isset($_POST['botao'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
}
if($num1 < $num2 & $num1 < $num3){
    echo "<br>O menor número é $num1";
}
if($num2 < $num1 & $num2 < $num3){
    echo "<br>O menor número é $num2";
}
if($num3 < $num2 & $num3 < $num1){
    echo "<br>O menor número é $num3";
}

?>
<a href="menornumero.html">Voltar a pagina inicial</a>