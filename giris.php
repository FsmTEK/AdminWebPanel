<?php
include ("s.php");
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Admin giriş paneli</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  
<div class="form" id="form">
  <div class="field email">
    <div class="icon"></div>
    <input class="input" id="email" type="eposta" placeholder="eposta" autocomplete="off"/>
  </div>
  <div class="field password">
    <div class="icon"></div>
    <input class="input" id="password" type="şifre" placeholder="şifre"/>
  </div>
  <button class="button" id="submit" >GİRİŞ
    <div class="side-top-bottom"></div>
    <div class="side-left-right"></div>
  </button><small>Lütfen doldurunuz!</small>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
