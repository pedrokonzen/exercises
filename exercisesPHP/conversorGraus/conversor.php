<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="conversor.php" method="post">
        <label for="celsius">Informe a temperatura em Graus Celsius</label>
        <input type="num" name="celsius">
        <input type="submit">
    </form>

    <?php
    
    $graus = $_POST['celsius'];
    echo "Temperatura em Graus Celsius: ";
    echo $graus;
    echo "<br>Temperatura em Graus Kelvin: ";
    echo $graus+273;
    ?>
</body>
</html>