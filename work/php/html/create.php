<!DOCTYPE html>

<?php
require "../src/config.php";
require "../src/service.php";
?>


<head>
    <meta charset="utf-8">
    <title>Create</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="poop.png">
</head>


<body>
    <div class="topnav" id="myTopnav">
        <?php require "../view/header.php" ?>
    </div>


    <form>
        <p>
            <h1>Add some types of instrument!</h1>
            <label>Name:
                <input type="text" name="search" value="<?= $search ?>">
            </label>
            <label>Type:
                <input type="text" name="search" value="<?= $search ?>">
            </label>
        </p>
    </form>
</body>