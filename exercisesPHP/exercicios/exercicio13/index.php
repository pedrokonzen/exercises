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
        <label for="num">Informe um numero</label>
        <input type="number" name="num">
        <input type="submit" >
    </form>

    <?php
    $n = $_POST['num'];

    if ($n == 0) {
        echo "Programa encerrado";
    }else{
        if ($n < 200 & $n > 100) {
            echo "O número está entre 100 e 200.";
        }
    }
    
    ?>
</body>
</html>