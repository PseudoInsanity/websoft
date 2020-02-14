<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <title>Schools</title>
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
    <h1 class="school-h1">Schools in Skåne</h1>
    <div class="dropdown">
      <button class="dropbtn">Municipality</button>
      <div class="dropdown-content">
        <a onclick="updateTable('rnopu')">Malmö</a>
        <a onclick="updateTable('po3mu')">Lund</a>
        <a onclick="updateTable('nvsti')">Kristianstad</a>
      </div>
    </div>
    <div class="TextContainer">
      <table id="SchoolTable" class="steelBlueCols">
        <tbody id="school_table"></tbody>
      </table>
    </div>
  </div>

  <div> <?php require "../view/footer.php" ?></div>

</body>
<script type="text/javascript" src="../js/table.js"></script>
<script type="text/javascript" src="../js/poop.js"></script>