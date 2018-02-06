<!DOCTYPE html>
<?php include("database.php") ?>
<head>
<title></title>
<link rel="stylesheet" href="blog.css">
<script type="text/javascript" src=""></script>
</head>
<body>

  <div class="categorieen">
    <h2 class="header2">Zoek op categorie</h2>
  <ul class="ul">
    <li><a href="all.php">All</a></li>
    <li><a href="fcgroningen.php">FC Groningen</a></li>
    <li><a href="cryptovaluta.php">Cryptovaluta</a></li>
    <li><a href="trump.php">Trump</a></li>
  </ul>
  <form class="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <h2 class="header2"> Zoek op blogger </h2>
    <input id="blogger" type="text" name="blogger" required><br><br>
    <input id="button" type="submit" name= "button2" value="Search">
  </form>

  <div class="bericht" id="trump">
    <?php
    if (isset($_POST['button2'])) {
              $name = $_POST['blogger'];

    // use data from the database and show it
    $sql= "SELECT * FROM list WHERE user = '$name' AND categorie = 'trump'
    ORDER BY timestamp DESC;";
    $result= mysqli_query($connection,$sql);
    while($row= mysqli_fetch_assoc($result))
    {
    echo "<br>"."<b>".$row["user"]."</b>"." "."<span>".$row["timestamp"].
    "</span>"."<br>"."<br>"."&nbsp;&nbsp;".$row["message"]."<hr>";
    }
  }
  else{

    $sql= "SELECT * FROM list WHERE categorie= 'trump'
    ORDER BY timestamp DESC;";
    $result= mysqli_query($connection,$sql);
    while($row= mysqli_fetch_assoc($result))
    {
    echo "<br>"."<b>".$row["user"]."</b>"." "."<span>".$row["timestamp"].
    "</span>"."<br>"."<br>"."&nbsp;&nbsp;".$row["message"]."<hr>";
    }
  }
    ?>
  </div>

  </div>

</body>
</html>
