window.onload = function(){

  var a = document.querySelectorAll("div.category_fcgroningen");
  var b = document.querySelectorAll("div.category_cryptovaluta");
  var c = document.querySelectorAll("div.category_trump");

allbtn.addEventListener("click", function(){

  for(var i = 0; i < a.length; i++){
    a[i].style.display = "block";

  };
  for(var i = 0; i < b.length; i++){
    b[i].style.display = "block";

  };
  for(var i = 0; i < c.length; i++){
    c[i].style.display = "block";
    }

});

fcbtn.addEventListener("click", function(){

  for(var i = 0; i < a.length; i++){
    a[i].style.display = "block";

  };
  for(var i = 0; i < b.length; i++){
    b[i].style.display = "none";

  };
  for(var i = 0; i < c.length; i++){
    c[i].style.display = "none";
    }
});


cryptobtn.addEventListener("click", function(){

  for(var i = 0; i < a.length; i++){
    a[i].style.display = "none";

  };
  for(var i = 0; i < b.length; i++){
    b[i].style.display = "block";

  };
  for(var i = 0; i < c.length; i++){
    c[i].style.display = "none";
    }
});

trumpbtn.addEventListener("click", function(){

  for(var i = 0; i < a.length; i++){
    a[i].style.display = "none";

  };
  for(var i = 0; i < b.length; i++){
    b[i].style.display = "none";

  };
  for(var i = 0; i < c.length; i++){
    c[i].style.display = "block";
    }
});
}
