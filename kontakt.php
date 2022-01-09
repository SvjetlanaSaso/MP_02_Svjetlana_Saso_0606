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
<?php

$nameErr = $emailErr  = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Polje Ime i prezime je obavezno";
  } else {
    $name = forma($_POST["name"]);
    
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email polje je obavezno";
  } else {
    $email = forma($_POST["email"]);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Nije valdina email adresa";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = forma($_POST["website"]);
    
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }    
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = forma($_POST["comment"]);
  }

 
}
function forma($data) {
    $data = trim($data); //prazan prostor
    $data = stripslashes($data); //navodnike skine
    $data = htmlspecialchars($data); //prebaci specijalne navodnike u HTML
    return $data;
  }

?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h2>Mozete me kontaktirati preko ove forme</h2>
<span class="error">* obavezno polje</span> <br> <br>
 
  Ime i prezime: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
 
   <textarea name="comment" rows="5" cols="40" placeholder="Poruka"></textarea>
  <br><br>
  Pol:
  <input type="radio" name="gender" value="female">Zenski
  <input type="radio" name="gender" value="male">Muski
  <input type="radio" name="gender" value="other">Drugo
  
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php

echo $name;
echo "<br>";
echo $email;
echo "<br>";

echo $comment;
echo "<br>";
echo $gender;
?>

        <?php
    include_once("./footer.php");
    ?>
</body>
</html>