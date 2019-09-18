<?php
    
    /******************************************************
 * Name                        Project
 * Kevin Powell             Week 4 Project
 * 
 * Last Updated
 * 9/13/2019
 *****************************************************/
      
    
         
try {
    include './database/database.php';
    $db = Database::getDB();
    
} catch (Exception $ex) {
echo 'Connection error: ' . $e->getMessage();
}
           
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Untouchables</title>
	<meta charset="utf-8">
	<link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Fruktur' rel='stylesheet'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="styles.css">
</head>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="order.html">Order</a></li>			
        <li><a href="newsletter.html">Newsletter</a></li>
        <li><a href="login.php"> Admin</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        
      </ul>
    </div>
  </div>
</nav>
<body>
<div class="company">
	<img src="images/mobster.png" alt="Mobster">
	<h1>Untouchables</h1>
	<p>'Pizza so good, it'll get ya' whacked'</p>
</div>
<h1>Thank You! You are now part of the family</h1>

</body>
<footer>

</footer>
</html>
