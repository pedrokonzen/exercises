<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número ao Quadrado</title>
</head>

<body>
    <form action="numQuadrado.php" method="$_GET">
        <label for="num">Informe um número</label>
        <input type="num" name='num'>
        <input type="submit">
    </form>

    <?php
    $num = $_GET['num'];
    if ($num == "") {
        echo "Erro: Infromação inválida";
    } else {
        echo "Número Digitado: $num <br />";
        echo "Número ao Quadrado: ", 2 * $num;
    }
    ?>
</body>
</html>