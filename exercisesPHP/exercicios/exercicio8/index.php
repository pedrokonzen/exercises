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
        <label for="num">Digite um número: </label>
        <input type="number" name="num">
        <br>
        <input type="submit">
    </form>

    <?php
    $n = $_POST['num'];
    for ($i=$n; $i < $n*$n; $i++) { 
        echo $i;
        echo "<br>";
    }
    
    ?>
</body>
</html>