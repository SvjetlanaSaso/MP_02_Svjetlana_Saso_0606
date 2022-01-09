<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php session_start(); 
if(!isset($_SESSION['UserData']['Username'])){
header("location:login.php");
exit;
}
?>
<a href="index.php"></href>
Uspesno ste se ulogovali na svoj nalog. <a href="logout.php">Klikniti ovde </a> da se odjavite.
</body>
</html>