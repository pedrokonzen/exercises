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
        <label for="num">Informe um numero: </label>
        <input type="number" name="num">
        <input type="submit">
    </form>

    <?php
    $num = $_POST['num'];

    for ($i=0; $i <= 10; $i++) { 
        echo $i . " x " . $num . "<br>" . $i * $num;
        echo "<br>";
    }

?>
</body>
</html>