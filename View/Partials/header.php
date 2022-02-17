<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Milan Nikolic">
    <meta name="description" content="Prodaja automobila, BMW, Citroen">
    <title>Car Rental</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
  <?php if(isset($_SESSION['loggedUser'])): ?>
<div style="background-color: #65a60b;">
    <br>
    <div class="btn-group float-right" role="group" aria-label="Basic example">
      <button type="button" class="btn btn-secondary btn-sm" disabled> <?php echo $_SESSION['loggedUser']->name." ".$_SESSION['loggedUser']->surname; ?> </button>
      <a href="logout.php" class="float-none"> <button type="button" class="btn btn-sm"> Odjava </button> </a>
    </div>
      <h1 class="text-center">Dobrodosli</h1>
    <br>
</div>


<div class="navbarNavDropdown">


<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index.php">
    <img src="pictures/automobili-logo.png" width="180" height="100" alt="">
  </a>
<ul class="navbar-nav">
      <li class="nav-item">
          <a href="index.php" class="nav-link">Pocetna</a>
      </li>
</ul>
<ul class="navbar-nav">
      <li class="nav-item">
          <a href="about_us.php" class="nav-link">O nama</a>
      </li>
</ul>
<div class="dropdown">
  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Automobili
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="cars_bmw.php">BMW</a>
    <a class="dropdown-item" href="cars_citroen.php">Citroen</a>
    <!-- <a class="dropdown-item" href="#">Something else here</a> -->
  </div>
</div>
<ul class="navbar-nav">
      <li class="nav-item">
      <button type="button" class="btn btn-outline-success"> <a href="posts.php">Dodaj auto</a> </button>
     </li>
</ul>



</nav>

</div>


<?php else: ?>
  <div style="background-color: #65a60b;">
    <br>
        <p class="text-center">Registrujte se potpuno besplatno i pogledajte najbolje ponude automobila na nasem trzistu i zakazite <b> test voznju</b> </p>
    <br>
</div>

<div class="navbarNavDropdown">


<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index.php">
    <img src="pictures/automobili-logo.png" width="180" height="100" alt="">
  </a>
<ul class="navbar-nav">
      <li class="nav-item">
          <a href="" class="nav-link">Pocetna</a>
      </li>
</ul>
<ul class="navbar-nav">
      <li class="nav-item">
          <a href="about_us.php" class="nav-link">O nama</a>
      </li>
</ul>
<div class="dropdown">
  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Automobili
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="cars_bmw.php">BMW</a>
    <a class="dropdown-item" href="cars_citroen.php">Citroen</a>
    <!-- <a class="dropdown-item" href="#">Something else here</a> -->
  </div>
</div>
<ul class="navbar-nav">
      <li class="nav-item">
          <a href="register_login.php" class="nav-link">Registracija/Logovanje</a>
      </li>
</ul>



</nav>

</div>



<?php endif; ?>


 
