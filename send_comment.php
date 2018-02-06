
<?php include("database.php")?>
<?php
$bericht=$_POST["bericht"];
$sql="INSERT INTO list2(comments)VALUES ('$bericht')";
$result= mysqli_query($connection,$sql);
header("Location: all.php");
  ?>
