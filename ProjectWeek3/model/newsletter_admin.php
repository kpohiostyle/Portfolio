<?php
/******************************************************
 * Name                        Project
 * Kevin Powell             Week 5 Project
 * 
 * Last Updated
 * 9/19/2019
 *****************************************************/
try {
    include '../database/news_database.php';
    $db = Database2::getDB();
    //echo 'fall through';
} catch (Exception $ex) {
echo 'Connection error: ' . $ex->getMessage();
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

<!-- the body section -->
<body>
<header><h1>Employee View</h1></header>
<main>

    <table>
        <tr>
            
            <th>Email Address</th>
            <th>Spam</th>
            <th>Delete</th>
        </tr>
        
        <!-- Getting info from data base and storing in table -->
    <?php foreach ($subscribers as $subscriber) : ?>
            <tr>
               
                <td><?php echo $subscriber->getEmailAddress(); ?></td>
                <td><?php echo $subscriber->getSpam(); ?></td>
      
                <td><form action="../database/news_val.php" method="post">
                    <input type="hidden" name="action"
                           value="delete_subscriber">
                    <input type="hidden" name="subscriber_email"
                           value="<?php echo $subscriber->getEmailAddress(); ?>">
                    <input type="submit" value="Delete">
                    
                </form></td>
            </tr>
            <?php endforeach; ?>    </table>
</main>
<footer>
</footer>
</body>
</html>

