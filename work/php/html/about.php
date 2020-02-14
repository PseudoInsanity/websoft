<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="poop.png">
</head>



<body>
    <div class="topnav" id="myTopnav">
        <?php require "../view/header.php"?>

    </div>
    <div class="tooltip" id="poop">
        <img src="../img/poop_big.png" id="poopheader" onclick="dissapear()"></img>
        <span class="tooltiptext">I am moveable!</span>
    </div>
    <div class="main aboutextra">
        
        <h1>About me</h1>

        <p>My name is Edmir, and I am 23 years young. I'm not sure what to write about myself. I play guitar, games and
            take commands from the government (my girlfriend)</p>


        <p>Here is a link to the course
            <a href="https://github.com/Webbprogrammering/websoft">repo</a>
        </p>

    </div>

    <div> <?php require "../view/footer.php" ?></div>

    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../js/poop.js"></script>

</body>

</html>