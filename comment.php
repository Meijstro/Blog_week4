<!DOCTYPE html>
<?php include("database.php") ?>
<head>
<title></title>
<link rel="stylesheet" href="blog.css">
<script src= "jquery-3.3.1.min.js"></script>
<script>
shortcuts = {
    "cci": "customer called in",
    "rfc": "request for comments",
    "www": "world wide web",
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
<?php
$article_id = $_POST['article_id'];
$sql= "SELECT * FROM articles WHERE id='$article_id'";
$result= mysqli_query($connection,$sql);
while($row= mysqli_fetch_assoc($result))
{
echo "<div class=bericht>".$row['id']."<div class='category_".$row['categorie']."'><br>"."<b>".$row["user"]."</b>"." "."<span>".$row["timestamp"].
"</span>"."<br>"."<br>"."&nbsp;&nbsp;".$row["message"]."<br>"."<br>"."<hr>"."</div>";
}

// $sql= "SELECT * FROM comments, articles WHERE $article_id = "id" AND comments.article_id = articles.id;";
// $result= mysqli_query($connection,$sql);
// while($row= mysqli_fetch_assoc($result))
//   {
//     echo $row["user"]."</b>"." "."<span>".$row["timestamp"].
//     "</span>"."<br>"."<br>"."&nbsp;&nbsp;".$row["message"]."<br>"."<br>"
//   }

  ?>

<br> <br>
<div>
<form class="form" action="send_comment.php" method="POST">
  <h2 class="header2"> Comment: </h2>
  <textarea id="text_comment" type="text" name="comment" required></textarea>
  <input class="button" type="submit" value="Verzenden">
  <input type="hidden" id="article_id" name="article_id" value="<?php echo $article_id;?>">
</form>
</div>


</body>
</html>
