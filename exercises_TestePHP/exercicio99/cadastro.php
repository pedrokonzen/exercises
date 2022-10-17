<?php
include_once("arquivos/visual.php");
cabecalho("Cadastro");
?>
<form action="cadastro.php" method="POST">
    Data: <input type="date" name="data"><br>
    Disciplina: <input type="text" name="disciplina"><br>
    Conteúdo: <textarea name="conteudo"></textarea><br>
    <input type="submit" name="botao" value="Enviar">
</form>
<?php
rodape();
?>