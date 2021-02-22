<!DOCTYPE html>
<head>
	  <link rel="stylesheet" type="text/css" href="css\style.css">
        <link rel="stylesheet" type="text/css" href="css\grid.css">
        <link rel='icon' href='logo.ico' type='image/x-icon'/ >
</head>
<body>
<?php
include("lib.php");
include("navbar.php");
include("slider.php");
include("connection.php");
?>
<div class="jumbotron">
    <center><a href="admin-page.php"> <input type="button" class="btn btn-lg btn-primary" value="Admin Panel"></a></center><br>
    <div class="container-fluid">
<div class="row text-center">
<?php
$sql = "SELECT *  FROM category";
$result = $conn->query($sql);

if ($result->num_rows > 0)
 {
 while($row = $result->fetch_assoc())
 {
  $path="images/";
  $image=$path.$row["img"];
  echo "<div class='col-lg-4 col-md-6 mb-4'>
        <div class='card h-100'>
          <img class='card-img-top' src='$image'  width='400px' height='300px'>
          <div class='card-body'>
            <h4 class='card-title'>$row[name]</h4>
          </div>
          <div class='card-footer'>
            <a href='user-view-products.php?id={$row['id']}' class='btn btn-primary'>View Products</a></div></div></div>";

 }
 
} 
?>
</div>
</div>
 </div>
<?php
 include("footer.php");
?>

</body>
</html>