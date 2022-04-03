<?php
  $route = !isset($_GET['route']) ? $_GET['route'] : 'home';


?>

<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./w3.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>НИКО-САН</b> Градба</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#projects" class="w3-bar-item w3-button">Проекти</a>
      <a href="#about" class="w3-bar-item w3-button">За нас</a>
      <a href="#contact" class="w3-bar-item w3-button">Контакт</a>
    </div>
  </div>
</div>

<!-- Header -->
<?php include "./header.php";?>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

<?php 
  if($route == "home"){
   include ("./home.php");
  } elseif($route == "login"){
     include("./login.php");
   } elseif($route == "about"){
    include("./about.php");
   }
   ?>


<?php include "./projects.php";?>
  <!-- About Section -->
<?php include "./about.php";?>

  <!-- Contact Section -->
<?php include "./contact.php";?>
 
<!-- Image of location/map -->
<div class="w3-container">
  <img src="./w3images/map.jpeg" class="w3-image" style="width:100%">
</div>

<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

</body>
</html>