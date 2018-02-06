<!DOCTYPE html>
<?php include("database.php") ?>
<head>
<title></title>
<link rel="stylesheet" href="blog.css">
<script src="filter.js"></script>
</head>
<body>

  <div class="categorieen">
    <h2 class="header2">Zoek op categorie</h2>
  <ul class="ul">
    <li><button id="allbtn">All</button></li>
    <li><button id="fcbtn">FC Groningen</button></li>
    <li><button id="cryptobtn">Cryptovaluta</button></li>
    <li><button id="trumpbtn">Trump</button></li>
  </ul>
  <form class="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <h2 class="header2"> Zoek op blogger </h2>
    <input id="blogger" type="text" name="blogger" required><br><br>
    <input id="button" type="submit" name= "button2" value="Search">
  </form>

  <div class="bericht" id="all">
  <?php
  //when search function used show specific data
  if (isset($_POST['button2'])) {
            $name = $_POST['blogger'];


  // use data from the database and show it
  $sql= "SELECT * FROM list WHERE user = '$name' ORDER BY timestamp DESC;";
  $result= mysqli_query($connection,$sql);
  while($row= mysqli_fetch_assoc($result))
  {
  echo "<br>"."<b>".$row["user"]."</b>"." "."<span>".$row["timestamp"].
  "</span>"."<br>"."<br>"."&nbsp;&nbsp;".$row["message"]."<hr>";
  }
}
else{

  // use data from the database and show it
  $sql= "SELECT * FROM list ORDER BY timestamp DESC;";
  $result= mysqli_query($connection,$sql);
  while($row= mysqli_fetch_assoc($result))
  {
  echo "<div class='category_".$row['categorie']."'><br>"."<b>".$row["user"]."</b>"." "."<span>".$row["timestamp"].
  "</span>"."<br>"."<br>"."&nbsp;&nbsp;".$row["message"]."<br>"."<br>".
  '<form class="form" action="comment.php" method="POST">'.
  '<input id="button" type="submit" value="Reageer">'."</form>"."<hr></div>";
  }
}

  ?>
  </div>
  </div>

</body>
</html>
