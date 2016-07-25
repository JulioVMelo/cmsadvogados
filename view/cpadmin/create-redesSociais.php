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
        <h3>Cadastrar Nova Rede social</h3>

        <form method="post" action="../../controller/ControllerCreateRedesSociais.php">
            Nome: <input type="text" name="RedeSocialUsername">
            Link: <input type="text" name="RedeSocialLink">
            icone: <input type="text" name="RedeSocialIcone">

            <br><br>

            <input type="submit" name="send" value="Enviar">
        </form>

    </div>



</div>
</body>
</html>
