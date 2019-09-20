<?php
/******************************************************
 * Name                        Project
 * Kevin Powell             Week 5 Project
 * 
 * Last Updated
 * 9/19/2019
 *****************************************************/
   require('news_database.php');
   //add new subscriber
    $action = filter_input(INPUT_POST, 'action');
    if($action == 'signup1'){

    $db=Database2::getDB();
    $visitor_email = filter_input(INPUT_POST, 'email');
    $visitor_Spam = filter_input(INPUT_POST, 'spam');
    
        
$db=Database2:: newsSignup($visitor_email, $visitor_Spam);
header('Location: ../model/validation.php');
    

    }
    //delete new subscriber
     if ($action == 'delete_subscriber') {
        $db=Database2::getDB();
        $subscriber_email = filter_input(INPUT_POST, 'subscriber_email');
        $db=Database2::deleteSubscriber($subscriber_email);
        header('Location: ../model/newsletter_admin.php');
  }
 ?>
