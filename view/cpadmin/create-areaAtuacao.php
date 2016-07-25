<!DOCTYPE html>
<html>
<head>
    <?php
    include('includes/header-title.php');
    include('includes/header-css.php');
    ?>
</head>
<body>
<div id="Body">

    <?php include("includes/header-top.php"); ?>
    <?php include("includes/header-return.php"); ?>


    <div class="index">
        <h3>Cadastrar Nova area de atuação</h3>

        <form method="post" action="../../controller/ControllerCreateAreaAtuacao.php">
            Titulo: <input type="text" name="AreaTitulo">
            Descrição: <input type="text" name="AreaDescricao">
            Categoria: <input type="text" name="AreaCategoria">

            <br><br>

            <input type="submit" name="send" value="Enviar">
        </form>

    </div>

</div>
</body>
</html>
