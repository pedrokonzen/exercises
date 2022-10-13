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
        <label for="nome">Digite o nome: </label>
        <input type="text" name="nome">
        <br>
        <label for="sexo">Selecione o sexo: </label> <br>
        <input type="radio" name="sexo" value="1">Masculino <br>
        <input type="radio" name="sexo" value="2">Feminino 
        <br>
        <label for="idade">Informe a idade: </label>
        <input type="number" name="idade">
        <br>
        <input type="submit">
    </form>

    <?php
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $idade = $_POST['idade'];

    if($sexo == "2" & $idade < 25){
        echo $nome;
        echo "<br>";
        echo "ACEITA";
    }else{
        echo $nome;
        echo "<br>";
        echo "NÃO ACEITA";
    }
    
    ?>

</body>
</html>