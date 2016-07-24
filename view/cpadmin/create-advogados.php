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
        <h3>Cadastrar Novo Advogado</h3>


        <form method="post" action="../../controller/ControllerCreateAdvogados.php">
            Nome: <input type="text" name="advogadosNome">
            Oab: <input type="text" name="advogadosOab">
            Descrição: <input type="text" name="advogadosDescricao">

            <br><br>

            <input type="submit" name="send" value="Enviar">
        </form>

    </div>



</div>
</body>
</html>
