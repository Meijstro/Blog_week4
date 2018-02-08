
<?php include("database.php")?>
<?php


$article_id = $_POST['article_id'];
    $comment = $_POST['comment'];
    $sql = "INSERT INTO comments(comment, article_id,)
            VALUES ('$comment', '$article_id')";
    $result = mysqli_query($connection,$sql);
header("Location: comment.php");
  ?>
