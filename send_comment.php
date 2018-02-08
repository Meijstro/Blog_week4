
<?php include("database.php")?>

<ul class="ul">
  <li><a href="all.php">Go to Blog</a></li>
</ul>
  <div class="bericht" id="all">
    <?php
    // show written article to blogger

    echo "&nbsp;&nbsp;".$_POST["comment"];
    echo "<hr>";


    // send the data to database
    $comment=$_POST["comment"];
    $sql="INSERT INTO comments(comment)
    VALUES ('$comment')";
    $result= mysqli_query($connection,$sql);

     ?>
  </div>
