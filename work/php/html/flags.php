<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Flags</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="poop.png">
</head>

<div class="topnav" id="myTopnav">
    <?php require "../view/header.php" ?>

</div>
<div class="tooltip" id="poop">
    <img src="../img/poop_big.png" id="poopheader" onclick="dissapear()"></img>
    <span class="tooltiptext">I am moveable!</span>
</div>
<div class="main">
    <button onclick="showFlag('swedenFlag')">Sweden</button>
    <button onclick="showFlag('yugoFlag')">Yugoslavia</button>
    <button onclick="showFlag('barbadosFlag')">Barbados</button>
    <div id="flag">
        <div class="sweden" id="swedenFlag" onclick="showFlag('swedenFlag')"></div>
        <div class="yugoslavia" id="yugoFlag" onclick="showFlag('yugoFlag')"></div>
        <div class="barbados" id="barbadosFlag" onclick="showFlag('barbadosFlag')"></div>
    </div>


    <div> <?php require "../view/footer.php" ?></div>
</div>


<script type="text/javascript" src="../js/poop.js"></script>
<script type="text/javascript" src="../js/flags.js"></script>



</html>