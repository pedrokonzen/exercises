<!-- Ler 3 números, os possíveis lados de um
triângulo, e imprimir a classificação de
acordo com tamanho dos lados 
ESCALENO / ISOCELES / EQUILATERO-->
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
        <label for="lado1">Medida lado 1: </label>
        <input type="number" name="lado1">
        <br>
        <label for="lado2">Medida lado2: </label>
        <input type="number" name="lado2">
        <br>
        <label for="lado3">Medida lado3: </label>
        <input type="number" name="lado3">
        <br>
        <input type="submit">
    </form>

    <?php
    $lado1 = $_POST['lado1'];
    $lado2 = $_POST['lado2'];
    $lado3 = $_POST['lado3'];

    if ($lado1 == $lado2 & $lado1 == $lado3) {
        echo "Triangulo é Equilátero.";
    }elseif ($lado1 == $lado2 | $lado1 == $lado3 | $lado2 == $lado3) {
        echo "Triangulo é Isóceles.";
    }else {
        echo "Triangulo é Escaleno.";
    }
    
    
    ?>
</body>

</html>