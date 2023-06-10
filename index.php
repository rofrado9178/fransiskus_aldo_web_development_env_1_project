<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fransiskus Aldo web development env 1 project</title>
  <link rel="stylesheet" href="assets/css/style.css">
  

</head>
<body>
<nav>
  <ul>
    <li> <a href="index.php">Home</a> </li>
    <li> <a href="about.php">About</a></li>
  </ul>
</nav>

<section class="big-banner">
  <h1>Welcome to my web development environtment project</h1>
</section>

<section class="content">

<button>Show</button>

<div class="picture">
<?php 

$arr = array("assets/images/img1.png", "assets/images/img2.jpeg", "assets/images/img3.jpeg");


foreach($arr as $value){

  echo '<img src='. $value .'>';
}


?>
</div>



</section>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="assets/js/index.js"></script>
</body>
</html>