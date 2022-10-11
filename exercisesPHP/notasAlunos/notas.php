<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="notas.php" method="post">
        <label for="nota1">Informe a nota 1:</label><br>
        <input type="num" name="nota1"><br>
        <label for="nota1">Informe a nota 2:</label><br>
        <input type="num" name="nota2"><br>
        <label for="nota1">Informe a nota 3:</label><br>
        <input type="num" name="nota3"><br>
        <input type="submit">
    </form>

    <?php
    $num1 = $_POST['nota1'];
    $num2 = $_POST['nota2'];
    $num3 = $_POST['nota3'];

    echo "Nota 1: ";
    echo $num1 ;
    echo "<br>Nota 2: ";
    echo $num2;
    echo "<br>Nota 3: ";
    echo $num3;
    echo "<br>Média: ";
    echo ($num1+$num2+$num3) /3;
    ?>
</body>
</html>