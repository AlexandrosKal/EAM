window.onscroll = function(){scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200)
  {
      document.getElementById("topButton").style.display = "block";
  }
  else
  {
      document.getElementById("topButton").style.display = "none";
  }
}


function topFunction()
{
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
