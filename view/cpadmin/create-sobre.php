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
        <h3>Cadastrar na sessão Sobre</h3>


        <form method="post" action="../../controller/ControllerCreateSobre.php">
            Titulo: <input type="text" name="sobreTitulo">
            Descrição: <input type="text" name="sobreDescricao">

            <br><br>

            <input type="submit" name="send" value="Enviar">
        </form>

    </div>



</div>
</body>
</html>
