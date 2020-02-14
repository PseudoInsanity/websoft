<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Me</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="poop.png">
</head>

<body>
    <div class="topnav" id="myTopnav">
        <?php require "../view/header.php" ?>

    </div>
    <div class="tooltip" id="poop">
        <img src="../img/poop_big.png" id="poopheader" onclick="dissapear()"></img>
        <span class="tooltiptext">I am moveable!</span>
    </div>
    <div class="main">
        <h1>My report page in the course Software Development for the Web</h1>

        <p><img src="../img/me.jpg" width="500" alt="Me on an image"></p>

        <p>My name is Edmir Suljic, born i Örebro in 1996. I moved to Malmö in 1999 and have been there ever since. I
            graduated from Malmö Borgarskola in 2015 and took a break for 2 years where I worked a bit.</p>

        <p>I have always been interested in computers (like everyone else in here I suppose), but did not even consider
            studying programming until late 2016 when my friend who is a programmer suggested it.</p>

        <p>My hobbies mostly include music. I play guitar, have been for 7 years. I suppose it would be my main passion
            but unfortunately it does not always pay the bills so programming it is.</p>

        <p>I do like to try new things all the time, but sticking to it might be the biggest challenge. Maybe it's a
            generational thing.</p>
    </div>

    <div> <?php require "../view/footer.php" ?></div>

</body>
<script type="text/javascript" src="../js/main.js"></script>

<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>
<script type="text/javascript" src="../js/poop.js"></script>

</html>