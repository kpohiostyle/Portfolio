<?php
/******************************************************
 * Name                        Project
 * Kevin Powell             Week 5 Project
 * 
 * Last Updated
 * 9/13/2019
 * 9/19/2019
 *****************************************************/
require('database.php');


$action = filter_input(INPUT_POST, 'action');
//setting action if delete button is selected
  if ($action == 'delete_member') {
  $db=Database::getDB();
  $member_id = filter_input(INPUT_POST, 'member_id');
$db=Database::deleteMember($member_id);
header('Location: ../model/userChange.php');
  }
//setting action for signup if new member is submitted

  if($action == 'signup'){

    $db=Database::getDB();
    $visitor_name = filter_input(INPUT_POST, 'name');
    $visitor_email = filter_input(INPUT_POST, 'email');
    $visitor_dateOB = filter_input(INPUT_POST, 'dob');
    $visitor_Comments = filter_input(INPUT_POST, 'comments');
    $time=strtotime($visitor_dateOB);
    $visitor_dateOB2= date('Y-m-d',$time);
    
        
$db=Database:: addMember($visitor_name, $visitor_email, $visitor_dateOB2, $visitor_Comments);
header('Location: ../model/validation.php');
}   

    



