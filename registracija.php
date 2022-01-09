<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
  <?php
include_once("./header.php");
    include_once ("./navigacija.php");
    ?>
<form >
  <div class="container">
    
    <h3>Popunite tabelu kako bi se prijavili</h3>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required><br> <br>

    <label for="psw"><b>Sifra</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required> <br> <br>

    <label for="psw-repeat"><b>Ponovi sifru</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required><br> <br>
    <hr>

    
    <button type="submit" class="registerbtn">Napravi nalog</button><br> <br>
  </div>

  <div class="container signin">
    <h3>Vec imate nalog? <a href="sigin.php">Sign in</a>.</h3>
  </div>
</form>
</body>
</html>