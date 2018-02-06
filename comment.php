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
    echo  '<form class="form" action="comment.php" method="POST">'.
          '<textarea id="comment1" placeholder="add comment.." name="comment" rows="4" cols="80"></textarea>'.
          '<input id="button" type="submit" value="Reageer">'."</form>"."<hr></div>";
    ?>
  </div>

  </div>

</body>
</html>
