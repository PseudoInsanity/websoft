<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Reports</title>
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


        <header>
            <h1>A report from the course Software Development for the Web</h1>
        </header>

        <section>
            <h2>S01</h2>
            <a href="../s01/reflection.html">Reflection from s01</a>
        </section>

        <section>
            <h2>S02</h2>
            <p>I have very little experience with HTML, CSS and Javascript. CSS the least</p>

            <p>HTML provides the <i>static</i> skeleton of the webpage, structurally how it should look like. CSS
                provides the visual represantion and Javascript gives you the possibility to make a website dynamic,
                meaning it executes code in the browser.</p>

            <p>The browser gets information from the web server using the HTTP protocol. This makes it possible to store
                websites on a server and allows the user to retrieve this information remotely and view it locally.</p>

            <p>TIL how to properly use css and how to add structure your html document</p>
        </section>

        <section>
            <h2>S03</h2>
            <p>Here is the <a href="schools.html">link</a> for the list of schools.</p>
        </section>

        <section>
            <h2>S04</h2>
            <p>Here is the text for this section.</p>
        </section>

        <section>
            <h2>S05</h2>
            <p>Here is the text for this section.</p>
        </section>

        <section>
            <h2>S06</h2>
            <p>Here is the text for this section.</p>
        </section>

        <section>
            <h2>S07</h2>
            <p>Here is the text for this section.</p>
        </section>

        <section>
            <h2>S08</h2>
            <p>Here is the text for this section.</p>
        </section>

        <section>
            <h2>S09</h2>
            <p>Here is the text for this section.</p>
        </section>

        <section>
            <h2>S10</h2>
            <p>Here is the text for this section.</p>
        </section>

      <div> <?php require "../view/footer.php" ?></div>
    </div>



    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../js/poop.js"></script>

</body>

</html>