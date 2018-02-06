<!DOCTYPE html>
<?php include("database.php") ?>
<head>
<title></title>
<link rel="stylesheet" href="blog.css">
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

<br> <br>
<form class="form" action="send_comment.php" method="POST">
  <h2 class="header2"> Bericht: </h2>
  <textarea id="bericht" type="text" name="bericht" required></textarea>
  <input class="button" type="submit" value="Verzenden">
</form>
</div>


</body>
</html>
