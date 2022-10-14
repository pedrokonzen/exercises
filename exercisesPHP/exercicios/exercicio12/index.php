<!--  Criar um algoritmos que entre com uma
palavra e imprima conforme o exemplo
◦ Palavra: sonho
◦ SONHO
◦ SONHO SONHO
◦ SONHO SONHO SONHO
◦ SONHO SONHO SONHO SONHO -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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
            <label for="texto">Digite uma palavra: </label>
            <input type="text" name="palavra">
            <input type="submit">
        </form>

    <?php
    $palavra = $_POST['palavra'];
        echo $palavra; 
        echo "<br>";
        echo $palavra . " " . $palavra;
        echo "<br>";
        echo $palavra . " " . $palavra . " " . $palavra; 
        echo "<br>";
        echo $palavra . " " . $palavra . " " . $palavra . " " . $palavra;
    
    ?>
    </body>

    </html>
</body>

</html>