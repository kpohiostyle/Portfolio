<?php

/******************************************************
 * Name                        Project
 * Kevin Powell             Week 5 Project
 * 
 * Last Updated
 * 9/19/2019
 *****************************************************/

?>
<!DOCTYPE html>
<html>
<head>
  <title>Untouchables</title>
	<meta charset="utf-8">
	<link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Fruktur' rel='stylesheet'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="jquery_validate/jquery.validate.min.js"></script>
	<link rel="stylesheet" href="../styles.css">
        
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
       <li class="active"><a href="../view/index.html">Home</a></li>
        <li><a href="../view/order.html">Order</a></li>			
        <li><a href="../view/newsletter.html">Newsletter</a></li>
        <li><a href="../view/login.php"> Admin</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../view/signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        
      </ul>
    </div>
  </div>
</nav>
<body>
<div class="company">
	<img src="../images/mobster.png" alt="Mobster">
	<h1>Untouchables</h1>
	<p>'Pizza so good, it'll get ya' whacked'</p>
</div>
    <h1>Which Database Would You Like To View </h1>
    <a href="userChange.php" class="button">Members</a>
    <a href="newsletter_admin.php" class="button">Subscribers</a>