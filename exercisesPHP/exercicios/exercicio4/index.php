<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="num1">Número 1: </label>
        <input type="number" name="num1">
        <br>
        <label for="num2">Número 2: </label>
        <input type="number" name="num2">
        <br>
        <label for="num3">Número 3: </label>
        <input type="number" name="num3">
        <br>
        <input type="submit">
    </form>

    <?php

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    if ($num1 > $num2 & $num1 > $num3 & $num2 > $num3) {
        echo $num3;
        echo "<br>"; 
        echo $num2; 
        echo "<br>";
        echo $num1;
        echo "<br>";
    }elseif ($num1 < $num2 & $num1 > $num3 & $num2 > $num3) {
        echo $num3;
        echo "<br>"; 
        echo $num1; 
        echo "<br>";
        echo $num2;
        echo "<br>";
    }elseif ($num1 < $num2 & $num1 < $num3 & $num2 > $num3) {
        echo $num1;
        echo "<br>"; 
        echo $num3; 
        echo "<br>";
        echo $num2;
        echo "<br>";
    }elseif ($num1 < $num2 & $num1 < $num3 & $num2 < $num3) {
        echo $num1;
        echo "<br>"; 
        echo $num2; 
        echo "<br>";
        echo $num3;
        echo "<br>";
    }elseif ($num1 > $num2 & $num1 < $num3 & $num2 < $num3) {
        echo $num2;
        echo "<br>"; 
        echo $num1; 
        echo "<br>";
        echo $num3;
        echo "<br>";
    }elseif ($num1 > $num2 & $num1 > $num3 & $num2 < $num3) {
        echo $num2;
        echo "<br>"; 
        echo $num3; 
        echo "<br>";
        echo $num1;
        echo "<br>";
    }
    ?>
</body>
</html>