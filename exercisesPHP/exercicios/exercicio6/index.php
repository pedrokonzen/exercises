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
        <label for="num">Informe um número correspondente ao seu mês: </label>
        <br>
        <input type="number" name="num" min="0" max="12"> 
        <br>
        <input type="submit">  
    </form>

    <?php
    $num = $_POST['num'];

    if ($num == 1) {
        echo "Janeiro";
    }elseif ($num == 2) {
        echo "Fevereiro";
    }elseif ($num == 3) {
        echo "Março";
    }elseif ($num == 4) {
        echo "Abril";
    }elseif ($num == 5) {
        echo "Maio";
    }elseif ($num == 6) {
        echo "Junho";
    }elseif ($num == 7) {
        echo "Julho";
    }elseif ($num == 8) {
        echo "Agosto";
    }elseif ($num == 9) {
        echo "Setembro";
    }elseif ($num == 10) {
        echo "Outubro";
    }elseif ($num == 11) {
        echo "Novembro";
    }elseif ($num == 12) {
        echo "Dezembro";
    }else {
        echo "Numero nao encontrado";
    }
    
    ?>
</body>
</html>