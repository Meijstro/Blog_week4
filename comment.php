<!DOCTYPE html>
<?php include("database.php") ?>
<head>
<title></title>
<link rel="stylesheet" href="blog.css">
<script src= "jquery-3.3.1.min.js"></script>
<script>
shortcuts = {
    "cg": "CodeGorilla",
    "CG": "CodeGorilla",
    "gn": "Groningen",
    "GN": "Groningen",
    "mvg": "Met vriendelijke groet",
    "MVG": "Met vriendelijke groet"


}

window.onload = function () {
    var ta = document.getElementById("bericht");
    var timer = 0;
    var re = new RegExp("\\b(" + Object.keys(shortcuts).join("|") + ")\\b", "g");

    update = function () {
        ta.value = ta.value.replace(re, function ($0, $1) {
            return shortcuts[$1.toLowerCase()];
        });
    }

    ta.onkeydown = function () {
        clearTimeout(timer);
        timer = setTimeout(update, 200);

    }
}
</script>
</head>
<body>
<div class="categorieen">
  <ul class="ul">
    <li><a href="all.php">Go back</a></li>
  </ul>
<?php
  $article_id = $_POST['article_id'];
  $sql= "SELECT * FROM articles WHERE id='$article_id'";
  $result= mysqli_query($connection,$sql);
    while($row= mysqli_fetch_assoc($result))
      {
        echo "<div class=bericht>"."<div class='category_".$row['categorie']."'><br>"."<b>".$row["user"]."</b>"." "."<span>".$row["timestamp"].
             "</span>"."<br>"."<br>"."&nbsp;&nbsp;".$row["message"]."<br>"."<br>"."<hr>"."</div>";
}
  $sql= "SELECT * FROM comments";
  $result= mysqli_query($connection,$sql);
  while($row= mysqli_fetch_assoc($result))
      {
        echo $row['comment']."<br>"."<br>"."<hr>";
}

  ?>

<br>
<div class="categorieen">

<form class="form" action="" method="POST">
  <h2 class="header2"> Comment: </h2>
    <textarea id="text_comment" type="text" name="comment" required></textarea>
    <input type="hidden" name="article_id" value="<?php echo $article_id;?>"/>
    <input class="button" type="submit" name="button4" value="Verzenden"/>
</form>
</div>
  <?php

    if(isset($_POST['button4']))
    {
      $comment = $_POST['comment'];
      $article_id = $_POST['article_id'];
      $sql = "INSERT INTO comments(comment, article_id)
            VALUES ('$comment',$article_id)";
      $result = mysqli_query($connection,$sql);
  }
  ?>


</body>
</html>
