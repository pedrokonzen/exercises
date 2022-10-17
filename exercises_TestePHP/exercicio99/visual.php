<?php
function cabecalho($titulo){
?>
<html>
    <head>
        <title><?php echo $titulo; ?></title>
    </head>
    <body>
        <a href="cadastro.html">Cadastro</a>
        <a href="proximas.php">Próximas Provas</a>
        <a href="anteriores.php">Provas anteriores</a>
        <h1><?php echo $titulo;?></h1>
<?php
}
function rodape(){
?>
    </body>
</html>
<?php
}
?>