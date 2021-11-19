<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3006123724045517"
     crossorigin="anonymous"></script>
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
            <div class="brand-title"><img src="eserbil.png" class="eserbil" ><br></div>

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
          
        </div>
      </nav>

<!--<div class="container">
  <div class="arrow">
    <div class="outer"></div>
    <div class="inner"></div>
  </div>
  <div class="message-body">
    <p>Вашия абонамент изтича</p>
  </div>
</div>
<br>-->
<center><img src="messenger.svg" onclick="document.getElementById('id03').style.display='block'"
class="btn btn-danger ml-3"">
<div id="id03" class="w3-modal">
  <div class="w3-modal-content">
  
    <div class="w3-container">
      <span onclick="document.getElementById('id03').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <p><form class="formcontact">
  <h2>Support</h2>
  <p type="Name:"><input class="inputform" placeholder="Write your name here.."></input></p>
  <p type="Email:"><input class="inputform" placeholder="Let us know how to contact you back.."></input></p>
  <p type="Message:"><input class="inputform" placeholder="What would you like to tell us.."></input></p>
  <button>Send Message</button>
  <div>
    <span class="fa fa-phone"></span>001 1023 567
    <span class="fa fa-envelope-o"></span> contact@company.com
  </div>
</form>
    </div>
  </div>
  
</div>
       <button onclick="document.getElementById('id01').style.display='block'"
class="btn btn-danger ml-3"">Добавяне на продукт</button>

<!-- The Modal -->
<meta charset="utf-8">

<div id="id01" class="w3-modal">
  <div class="addmodal">
  
    <div class="w3-container">
      <span onclick="document.getElementById('id01').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <p><form action="insert.php" method="POST">
<div class="form">
      
      <div class="subtitle">Добавяне на продукт</div>
      <div class="input-container ic1">
        <input id="firstname" name="name" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="firstname" class="placeholder">Артикул</label>
      </div>
      <div class="input-container ic2">
        <select name="deliver" value="rregtrhr" class="input">
                <?php 
                include "db_select.php"; 
                while ($category = mysqli_fetch_array(
                        $all_categories,MYSQLI_ASSOC)):; 
            ?>
                <option value="<?php echo $category["name"];
                ?>">
                    <?php echo $category["name"];
                    ?>
                </option>
            <?php 
                endwhile; 
            ?>

</select>
        <div class="cut"></div>
        <label for="lastname" class="placeholder">Доставчик</label>
      </div>
       <div class="input-container ic2">
        <input id="email" name="date" class="input" type="date" placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="email" class="placeholder">Срок на годност</>
      </div>
      <button type="submit" class="submit">Добави</button>
      </form>
      <form action="welcome.php" method="post">
      <button type="submit" class="cancel">Откажи</button>
      </form>

    </div>
    
  
    </div>
  </div>
  
</div><img src="trash.svg" onclick="document.getElementById('id02').style.display='block'"
class="btn btn-danger ml-3"">
<!-- The Modal -->
<meta charset="utf-8">

<div id="id02" class="w3-modal">
  <div class="w3-modal-content">
  <h3> Архив</h3>
    <div class="w3-container">
      <span onclick="document.getElementById('id02').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <p><table id="myTable">
<tr>
<th> ID </th>    
<th>Артикул</th>
<th>Доставчик</th>
<th>Срок на годност</th>
<th><button class="red"> <a href="delete-all.php">Изтрий</th>
<th><button class="green"> <a href="restore-all-products.php">Възстанови</th>

</tr>
<?php

include "database.php"; // Using database connection file here

$records = mysqli_query($conn,"select * from products_trash"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr class="<?php if(isset($classname)) echo $classname;?>">
    <td><?php echo $data['product_id']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['deliver']; ?></td>    
    <td><?php echo $data['date']; ?></td> 
    <td><button class="red"><a href="delete.php?product_id=<?php echo $data["product_id"]; ?>"><b>Изтрий </a></button></td>
    <td><button class="green"><a href="restore-product.php?product_id=<?php echo $data["product_id"]; ?>"><b>Възстанови</a></button></td>
  </tr>	
<?php
}
?>
</table>

    </div>
  </div>
  
</div>


 <center><table id="myTable">
<tr>
<th> ID </th>    
<th>Артикул</th>
<th>Доставчик</th>
<th>Срок на годност</th>
<th><button class="trash-button"> <a class="trash-link" href="trash-all-products.php">Изтрий</th>

</tr>
<?php

include "database.php"; // Using database connection file here

$records = mysqli_query($conn,"select * from products ORDER BY date"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr class="<?php if(isset($classname)) echo $classname;?>">
    <td><?php echo $data['product_id']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['deliver']; ?></td>    
    <td><?php echo $data['date']; ?></td> 
    <td><button class="trash-button"><a class="trash-link" href="trash-product.php?product_id=<?php echo $data["product_id"]; ?>"><b>Изтрий</a></button></td>
  </tr>	
<?php
}
?>
</table>

<br>
<center> <b> Powered by: <br>
<img src="xdesign.png" height=100px>

  <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>Използване на програмата</h6>
           <iframe width="560" height="315" src="https://www.youtube.com/embed/qkga_T7HtX4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>

          <div class="col-xs-6 col-md-3">
            <img src="visa.png" width="250px">
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
<script>
        const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
})
    </script>
    <script src="//code.tidio.co/fpt2gpo87t10oo2fzndfixfk6wwxws2k.js" async></script>
</body>

</html>
