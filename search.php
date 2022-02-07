<?php 
$id = "";
$name = "";
$age = "";
$sex = "";
$type = "";
$many = "";
$unit = "";
$email = "";
$phone = "";
$address = "";
$date = "";
$image="";
if(isset($_POST['find'])){
  require_once "connect.php";
 $name1 = $_POST["name"];
 $query = "SELECT * FROM `donors` WHERE `name` = '$name1' LIMIT 1";
 $result = mysqli_query($connect,$query);
  while ($row =mysqli_fetch_array($result)){
    $id = $row ["id"];
    $name = $row ["name"];
    $age = $row ["age"];
    $sex = $row ["sex"];
    $type = $row ["type"];
    $many = $row ["how many"];
    $unit = $row ["unit"];
    $email = $row ["email"];
    $phone = $row ["phone"];
    $address = $row ["address"];
    $image = $row ["image"];   
    $date = $row ["date"]; 

  }
mysqli_free_result($result);
mysqli_close($connect);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
   <link rel="stylesheet" href="search.css?v=<?php echo time(); ?>">
  <title>search donor</title>
</head>
<body>
<div class="page-content">
<header class = "header">
    <div class="header__links hide-for-mobile">
    <div class="nav">
        <a href="#" class = "logo">
        <img width = 150px height = 50px class="logo-image" src="images/blood.jpg" alt="">
        </a>
        <span class="main-name">Blood Bank</span> 
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Services <i class="fas fa-caret-down"></i></a>
          <ul class = "submenu">
            <li><a href="donor.php">Donors</a></li>
            <li><a href="search.php">Search</a></li>
            <li><a href="qrsearch.php">qr search</a></li>
            <li><a href="person.php">qr search</a></li>

          </ul>
        </li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">About</a></li>
      </ul>
    </div>
    </div>
 </header> 
       <div class="search-container">
            <form action = "search.php" method="POST">
              <input type="text" name="name" id="text" >
              <button id="button" type="submit" name="find" value="search donor">search</button>
            </form>
            <div class="display">
                <div class="info">
                <span>id:<?php echo $id ?> </span><br>
                <span>name:<?php echo $name ?> </span><br>
                <span>age:<?php echo $age ?> </span><br>
                <span>sex:<?php echo $sex ?> </span><br>
                <span>type:<?php echo $type ?> </span><br>
                <span>many:<?php echo $many ?> </span><br>
                <span>unit:<?php echo $unit ?> </span><br>
                <span>email:<?php echo $email ?> </span><br>
                <span>phone:<?php echo $phone ?> </span><br>
                <span>address:<?php echo $address ?> </span><br>
                <span>date:<?php echo $date ?> </span><br>
                </div>
                <div class="photo">
                   <?php echo "<img  object-fit= cover height=190px width=190px src='images/".$image."'>"  ;?>
                </div>
              </div>
         </div>
    </div>
    <footer>
          <div class="left icons">  
          <i class="fa fa-map-marker" aria-hidden="true">Ethiopia addis abeba</i>
          <i class="fa fa-phone" aria-hidden="true">+25112345</i>
          <i class="fa fa-envelope-o" aria-hidden="true"><a href="mailto:">blood@gmail.com</a></i>
          </div>
          <div class="right">
             <h5>about the company</h5>
              <p>Lorem ipsum, dolor sit amet consectetur  adipisicing elit. Veniam, architecto? 
             Lorem ipsum, dolor sit amet consectetur  adipisicing elit. Veniam, architecto?</p>
            <div class="icons">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-telegram" aria-hidden="true"></i>
            </div>
          </div>
</footer>
</body>
</html>