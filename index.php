<html>
    <head>
   <title>Vision Mobile's</title>
   
   <link rel="icon" href="LOGO.jpg">
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="index.css">
   <style>
.mySlides {display:none;}
</style>
   
    </head>
    <body>
        <div class="main" style="height:1240;">

  <?php include 'header.php' ?>
  <?php include 'menu.php' ?>

  <div class="slider" style="background: linear-gradient(to bottom, #ff3300 -2%, #0033cc 100%);; background-repeat:no-repeat; background-size:cover; margin:20px 0 0 0">
      <div id="div2">Trending Best Mobile Deal's</div>
  <div class="w3-content w3-section" style="max-width:500px">
  <a href="https://clnk.in/o77d" target="_blank"><img class="mySlides w3-animate-top" src="photo1.jpg" style="width:1100px; height:550px; padding:40px 0 0  120px; border-radius:;0%"></a>
  <a href="https://amzn.to/2OTWgmJ" target="_blank"><img class="mySlides w3-animate-bottom" src="photo2.jpg" style="width:1100px; height:550px; padding:40px 0 0  120px; border-radius:;0%"></a>
 <a href="https://clnk.in/oZsF" target="_blank"> <img class="mySlides w3-animate-top" src="photo3.jpg" style="width:1100px; height:550px; padding:40px 0 0  120px; border-radius:;0%"></a>
<a href="bit.ly/37M6pIX" target="_blank"><img class="mySlides w3-animate-bottom" src="photo4.jpg" style="width:1100px; height:550px; padding:40px 0 0  120px; border-radius:;0%"></a>
</div>
<div id="div2">Click on Image to Get More Details</div>
</div>

<?php include 'footer.php' ?>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000);    
}
</script>
  
 
        </div>

    </body>

</html>