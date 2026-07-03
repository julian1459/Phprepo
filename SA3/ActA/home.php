<?php

session_start();

if(!isset($_SESSION["username"])){

    header("Location: Login.php");
    exit();

}

?>

<!DOCTYPE html>

<html>

<head>

<title>Home</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="home-container">

<h1>Welcome,
<?php echo $_SESSION["username"]; ?>

</h1>

<br>

<a href="Logout.php">Logout</a>

</div>

</body>

</html>