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
        <label for="number">Informe um número:</label>
        <input type="number" name="numero">
        <input type="submit">
    </form>

    <?php
    $num = $_POST['numero'];
    echo $num;
    echo "<br>";
    if($num % 10 == 0){
        echo "Divisível por 10 (;";
        echo "<br>";
    }
    
    if($num % 5 == 0){
        echo "Divisível por 5 (;";
        echo "<br>";
    }
    
    if($num % 2 == 0){
        echo "Divisível por 2 (;";
        echo "<br>";
    }

    ?>
</body>

</html