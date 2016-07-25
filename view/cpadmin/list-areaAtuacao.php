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
        <h3>Listagem de Áreas de atuação</h3>

        <?php
        require_once '../../controller/ControllerReadAreaAtuacao.php';
        ?>

    </div>



</div>
</body>
</html>
