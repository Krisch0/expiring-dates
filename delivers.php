<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link href="css/ct-navbar.css" rel="stylesheet">
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/ct-navbar.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

        
    <title>Eserbil: Срокове</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<!--[if lt IE 9]> 
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
<![endif]--> 
<!--Bootstrap--> 
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar">
            <div class="brand-title"><img src="eserbil.png" class="eserbil" ></div>

        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <div class="navbar-links">
          <ul>
              <li><a href="welcome.php">Срокове</a></li>
            <li><a href="new-deliver.php">Нов доставчик</a></li>
            <li><a href="delivers.php">Списък с доставчици</a></li>
            <li><a href="logout.php">Изход</a></li>

         
          </ul>
          <script>
        const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
})
    </script>
        </div>
      </nav>
      <section class="tabledeliver">
  <!--for demo wrap-->
  <h2>Доставчици</h2>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>ID</th>
          <th>Доставчик</th>
          <th></th>
        </tr>
        
      </thead>
      
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <?php

include "database.php"; // Using database connection file here

$records = mysqli_query($conn,"select * from delivers"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr class="<?php if(isset($classname)) echo $classname;?>">
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td class> <button class="noselect"><a class="noselect" href="delete-deliver.php?id=<?php echo $data["id"]; ?>">Изтрий</a></button>
         
    
  </tr>	
<?php

// 
}
?>

      </tbody>
    </table>
  </div>
</section>
 
</div>
<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>Използване на програмата</h6>
            <p class="text-justify">На 1 декември ще бъде извършена най-голямата актуализация до този момент, поради което програмата няма да бъде достъпна през целия ден. </p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Очаквайте скоро</h6>
            <ul class="footer-links">
              <li> База данни с продукти и снимки </li>
              <li> Филтриране по категории </li>
              <li> Мобилно приложение за още по-лесен достъп </li>
              <li> Декстоп програма с административен панел за управление </li>
              <li> Въвеждане на количества </li>
              <li> 24/7 техническа поддръжка </li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Меню</h6>
            <ul class="footer-links">
              <li><a href="welcome.php">Срокове</a></li>
              <li><a href="delivers.php">Списък с доставчици</a></li>
              <li><a href="new-deliver.php">Нов доставчик</a></li>
              <li><a href="logout.php">Изход</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
         <a href="#">X Design</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
