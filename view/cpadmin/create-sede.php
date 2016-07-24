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
        <h3>Cadastrar Sede</h3>


        <form method="post" action="../../controller/ControllerCreateSede.php">
            Rua: <input type="text" name="SedeRua"><br><br>
            Bairro: <input type="text" name="SedeBairro"><br><br>
            Complemento: <input type="text" name="SedeComplemento"><br><br>
            Número: <input type="number" name="SedeNumero"><br><br>
            CEP: <input type="text" name="SedeCep"><br><br>
            Mapa: <input type="text" name="SedeMapa"><br><br>
            Imagem: <input type="text" name="SedeImagem"><br><br>

            <br><br>

            <input type="submit" name="send" value="Enviar">
        </form>
    </div>



</div>
</body>
</html>
