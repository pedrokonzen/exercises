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
        <label for="num1">Digite o primeiro número: </label>
        <input type="number" name="num1"><br>

        <label for="num2">Digite o segundo número: </label>
        <input type="number" name="num2"><br>
        
        <input type="submit">
    </form>
    <?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $num1 + $num2;
    
    echo "Número 1: ";
    echo $num1;
    echo "<br>";

    echo "Número 2: ";
    echo $num2;
    echo "<br>";

    // echo "Número 3: ";
    // echo $num3;
    // echo "<br>";
    
    if ($num3 > 20){
        echo $num3 +8;
    }else{
        echo "Número 3: ";
        echo $num3 -5;
    }
    ?>
</body>
</html>