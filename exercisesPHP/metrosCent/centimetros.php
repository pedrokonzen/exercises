<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="centimetros.php" method="post">
        <label for="num"> Informe a medida (em metros)</label>
        <input type="num" name="medida">
        <input type="submit">
    </form>

    <?php
    $num = $_POST['medida'];
    $cem = 100;
    if ($num == "") {
    echo "Erro: Infromação inválida";
    } else {
        echo $num;
        echo " metros em centrímetros são: ";
        echo $num * $cem;
        echo " centimetros";
    }
    ?>
</body>

</html>