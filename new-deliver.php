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
    <style>
    .myaccordion {
  max-width: 500px;
  margin: 50px auto;
  box-shadow: 0 0 1px rgba(0,0,0,0.1);
}

.myaccordion .card,
.myaccordion .card:last-child .card-header {
  border: none;
}

.myaccordion .card-header {
  border-bottom-color: #EDEFF0;
  background: transparent;
}

.myaccordion .fa-stack {
  font-size: 18px;
}

.myaccordion .btn {
  width: 100%;
  font-weight: bold;
  color: #004987;
  padding: 0;
}

.myaccordion .btn-link:hover,
.myaccordion .btn-link:focus {
  text-decoration: none;
}

.myaccordion li + li {
  margin-top: 10px;
}
  .site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }}

    .city {display:none}
    @media only screen and (max-width: 950px) {
   .cf7_custom_style_1 {
      padding-left: 10%;
      padding-right: 10%;
   }
}

@media only screen and (max-width: 600px) {
   .cf7_custom_style_1 {
      padding-left: 0;
      padding-right: 0;
   }
}

        body{ font: 14px sans-serif; text-align: center; 
            background-color:grey;
        }
        table, th, td {
  border: 1px solid black;
  background-color:yellow;
}
.form {
  background-color: #15172b;
  border-radius: 20px;
  box-sizing: border-box;
  height: 500px;
  padding: 20px;
  width: 320px;
}
button{
    background-color:red;
}


.delete {
    background-color:red;
}
.delete-restore{
    background-color:red;
}
.delete-all-restore{
    background-color:red;
}
.delete-all-trash{
    background-color:orange;
}
.title {
  color: #eee;
  font-family: sans-serif;
  font-size: 36px;
  font-weight: 600;
  margin-top: 30px;
}

.subtitle {
  color: #eee;
  font-family: sans-serif;
  font-size: 16px;
  font-weight: 600;
  margin-top: 10px;
}

.input-container {
  height: 50px;
  position: relative;
  width: 100%;
}

.ic1 {
  margin-top: 40px;
}

.ic2 {
  margin-top: 30px;
}

.input {
  background-color: #303245;
  border-radius: 12px;
  border: 0;
  box-sizing: border-box;
  color: #eee;
  font-size: 18px;
  height: 100%;
  outline: 0;
  padding: 4px 20px 0;
  width: 100%;
}

.cut {
  background-color: #15172b;
  border-radius: 10px;
  height: 20px;
  left: 20px;
  position: absolute;
  top: -20px;
  transform: translateY(0);
  transition: transform 200ms;
  width: 76px;
}

.cut-short {
  width: 50px;
}

.input:focus ~ .cut,
.input:not(:placeholder-shown) ~ .cut {
  transform: translateY(8px);
}

.placeholder {
  color: #65657b;
  font-family: sans-serif;
  left: 20px;
  line-height: 14px;
  pointer-events: none;
  position: absolute;
  transform-origin: 0 50%;
  transition: transform 200ms, color 200ms;
  top: 20px;
}

.input:focus ~ .placeholder,
.input:not(:placeholder-shown) ~ .placeholder {
  transform: translateY(-30px) translateX(10px) scale(0.75);
}

.input:not(:placeholder-shown) ~ .placeholder {
  color: #808097;
}

.input:focus ~ .placeholder {
  color: #dc2f55;
}
.subtitle{
    font-family:monospace;
}

.submit {
  background-color: red;
  border-radius: 12px;
  border: 0;
  box-sizing: border-box;
  color: #eee;
  cursor: pointer;
  font-size: 18px;
  height: 50px;
  margin-top: 38px;
  // outline: 0;
  text-align: center;
  width: 100%;
}

.submit:active {
  background-color: #06b;
}
.redrow{
    background-color:red;
}
.required {
  color:red; 
  font-weight:bold
} 
.info{
    color:white;
}
a{
    color:black;
}
.delete-all{
    background-color:red;
}
.green{
    background-color:green;
}
.red{
    background-color:red;
}
.human {margin: 0 0 0 12px}
.w3-modal-content{
    height:530px;
    width:350px;
    padding-bottom:100px;
}
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    padding: 0;
    background: linear-gradient(45deg, black, grey);
}

.navbar {
    display: flex;
    position: relative;
    justify-content: space-between;
    align-items: center;
    background-color: #333;
    color: white;
}

.brand-title {
    font-size: 1.5rem;
    margin: .5rem;
}

.navbar-links {
    height: 100%;
}

.navbar-links ul {
    display: flex;
    margin: 0;
    padding: 0;
}

.navbar-links li {
    list-style: none;
}

.navbar-links li a {
    display: block;
    text-decoration: none;
    color: white;
    padding: 1rem;
}

.navbar-links li:hover {
    background-color: #555;
}

.toggle-button {
    position: absolute;
    top: .75rem;
    right: 1rem;
    display: none;
    flex-direction: column;
    justify-content: space-between;
    width: 30px;
    height: 21px;
}

.toggle-button .bar {
    height: 3px;
    width: 100%;
    background-color: white;
    border-radius: 10px;
}

@media (max-width: 800px) {
    .navbar {
        flex-direction: column;
        align-items: flex-start;
        height:;
    }

    .toggle-button {
        display: flex;
    }

    .navbar-links {
        display: none;
        width: 100%;
    }

    .navbar-links ul {
        width: 100%;
        flex-direction: column;
    }

    .navbar-links ul li {
        text-align: center;
    }

    .navbar-links ul li a {
        padding: .5rem 1rem;
    }

    .navbar-links.active {
        display: flex;
    }
}














/* Background Styles Only */

@import url('https://fonts.googleapis.com/css?family=Raleway');

* {
    font-family: cursive;
}

html {
    background-color: #DFDFDF;
}

.side-links {
  position: absolute;
  bottom: 15px;
  right: 15px;
}

.side-link {
  display: flex;
  align-items: center;
  justify-content: center;
  text-decoration: none;
  margin-bottom: 10px;
  color: white;
  width: 180px;
  padding: 10px 0;
  border-radius: 10px;
}

.side-link-youtube {
  background-color: red;
}

.side-link-twitter {
  background-color: #1DA1F2;
}

.side-link-github {
  background-color: #6e5494;
}

.side-link-text {
  margin-left: 10px;
  font-size: 18px;
}

.side-link-icon {
  color: white;
  font-size: 30px;
}
.eserbil{
    width=20px;
    
}
@import url("https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@600&display=swap");
.add {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: linear-gradient(45deg, black, grey);
  font-family:  cursive;
}
.center {
  position: relative;
  padding: 50px 50px;
  background: darkgrey;
  border-radius: 10px;
}
.center h1 {
  font-size: 2em;
  border-left: 5px solid dodgerblue;
  padding: 10px;
  color: black;
  letter-spacing: 5px;
  margin-bottom: 60px;
  font-weight: bold;
  padding-left: 10px;
}
.center .inputbox {
  position: relative;
  width: 300px;
  height: 50px;
  margin-bottom: 50px;
}
.center .inputbox input {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  border: 2px solid #000;
  outline: none;
  background: none;
  padding: 10px;
  border-radius: 10px;
  font-size: 1.2em;
}
.center .inputbox:last-child {
  margin-bottom: 0;
}
.center .inputbox span {
  position: absolute;
  top: 14px;
  left: 20px;
  font-size: 1em;
  transition: 0.6s;
  font-family: cursive;
}
.center .inputbox input:focus ~ span,
.center .inputbox input:valid ~ span {
  transform: translateX(-13px) translateY(-35px);
  font-size: 1em;
}
.center .inputbox [type="submit"] {
  width: 50%;
  background: black;
  color: #fff;
  border: #fff;
}
.center .inputbox:hover [type="submit"] {
  background: linear-gradient(45deg, greenyellow, dodgerblue);
}


    </style>
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
      <div class="add">
      <div class="center">
  <h1>Нов доставчик</h1>
  <form action="add-deliver.php" method="post">
    <div class="inputbox">
      <input type="text" name="name" required="required">
      <span>Име</span>
    </div>
    
    <div class="inputbox">
      <input type="submit" value="Добави">
    </div>
  </form>
</div>
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
</body>
</html>
