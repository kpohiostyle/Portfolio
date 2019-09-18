<?php
/******************************************************
 * Name                        Project
 * Kevin Powell             Week 4 Project
 * 
 * Last Updated
 * 8/30/2019
 * 9/13/2019
 *****************************************************/

try {
    include './database/database.php';
    $db = Database::getDB();
    //echo 'fall through';
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

<!-- the body section -->
<body>
<header><h1>Employee View</h1></header>
<main>

    <table>
        <tr>
            <th>Member ID</th>
            <th>Full Name</th>
            <th>Email Address</th>
            <th>Date of Birth</th>
            <th>Comments</th>
            <th>Delete</th>
        </tr>
        
        <!-- Getting info from data base and storing in table -->
    <?php foreach ($members as $member) : ?>
            <tr>
                <td><?php echo $member->getID(); ?></td>
                <td><?php echo $member->getFullName(); ?></td>
                <td><?php echo $member->getEmailAddress(); ?></td>
                <td><?php echo $member->getDateOB(); ?></td>
                <td><?php echo $member->getComments(); ?></td>
      
                <td><form action="./database/index.php" method="post">
                    <input type="hidden" name="action"
                           value="delete_member">
                    <input type="hidden" name="member_id"
                           value="<?php echo $member->getID(); ?>">
                    <input type="submit" value="Delete">
                    
                </form></td>
            </tr>
            <?php endforeach; ?>    </table>
</main>
<footer>
</footer>
</body>
</html>