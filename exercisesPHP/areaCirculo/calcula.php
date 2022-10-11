<html>

<head>
    <title>Curso PHP Progressivo</title>
</head>

<body>
    <form action='calcula.php' method='$_GET'>
        Informe o raio da circunferência: <input type="text" name="num"><br>
        <input type="submit">
    </form>

    <?php
    // Pegando o valor digitado
    // pelo usuário
    $raio = $_GET['num'];
    

    if ($raio == "") {
        echo "Erro: Você deve informar um número" ;
    } else {
        echo "Raio: $raio<br />";
        echo "Perímetro: ", 2 * M_PI * $raio, "<br />";
        echo "Área: ", M_PI * $raio * $raio, "<br />";
    }

    ?>
</body>

</html>