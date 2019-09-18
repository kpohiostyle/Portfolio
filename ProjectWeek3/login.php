<?php


?>

<!DOCTYPE html>
<!--******************************************************
 * Name                        Project
 * Kevin Powell             Week 4 Project
 * 
 * Last Updated
 * 9/13/2019
 *****************************************************/-->
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
<!-- Navigation for mobile and full screens-->
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
    <div class="content">
	<div class="main">
	<h1>Use Username and Password to Log in</h1>
		<form action="userChange.php" method="get" name="signup" id="signup">
			<div>
				<label for="name" class="label">User Name* </label>
                                <input name="userName" type="text" class="required" id="name" title="Please type your name." required="">
			</div>
			<div>
				<label for="password" class="label">Password*</label>
				<input name="password" type="password" class="required" id="password" required>
                                <input type ="hidden" name="action" value="action">
			</div>		
			<div>
				<input type="submit" name="submit" id="submit" value="Submit">
			</div>
		</form>
		</div>
	</div>
</body>
<footer>

</footer>
</html>

