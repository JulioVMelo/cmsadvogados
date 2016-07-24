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
        <h3>Cadastrar contato</h3>


        <form method="post" action="../../controller/ControllerCreateContato.php">
            Telefone fixo: <input type="text" name="contatoTelefoneFixo">
            Telefone móvel: <input type="text" name="contatoTelefoneMovel">

            <br><br>

            <input type="submit" name="send" value="Enviar">
        </form>

    </div>



</div>
</body>
</html>
