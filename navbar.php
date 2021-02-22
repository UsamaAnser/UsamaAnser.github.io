<?php
include("lib.php");
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php"> <img src="images\site-logo.png" height="100" width="100"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" style="color:#BA1414;" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" style="color:#BA1414;"href="products-page.php">Categories</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" style="color:#BA1414;"href="aboutus-page.php"> Our story</a>
      </li>

       <li class="nav-item">
        <a class="nav-link" style="color:#BA1414;"href="contactus-page.php"> Contact Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success mr-sm-2" type="submit"><a href="view-cart.php" style="text-decoration: none; color:black;">View Cart</a></button>
    </form>
  </div>
</nav>