<?php
/******************************************************
 * Name                        Project
 * Kevin Powell             Week 5 Project
 * 
 * Last Updated
 * 9/19/2019
 *****************************************************/
//create second class for new database
class Database2 {
    private static $dsn = 'mysql:host=localhost;dbname=newsdb';
    private static $username = 'root';
    private static $password = 'Pa$$w0rd';
    private static $db;

    public function __construct() {}
    public static function getDB () {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,
                                     self::$username,
                                     self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('../errors/err_db1.php');
                exit();
            } 
            
            
            }
        return self::$db;
    }       //function to add a new subscriber to db
function newsSignup ($visitor_email, $visitor_Spam) {
    $db = Database2::getDB();
     $query = 'INSERT INTO subscribers
            (emailAddress, Spam)
                VALUES
                         (:emailAddress,:Spam)';
            $statement = $db->prepare($query);
            $statement->bindValue(':emailAddress', $visitor_email);
            $statement->bindValue(':Spam', $visitor_Spam);
            $statement->execute();
            $statement->closeCursor();
            
    }
    //delete subscriber
    function deleteSubscriber($subscriber_email) {
        $db = Database2::getDB();
        $query = "DELETE FROM subscribers
                  WHERE emailAddress = :subscriber_email";
        $statement = $db->prepare($query);
        $statement->bindValue(':subscriber_email', $subscriber_email);
        $statement->execute();
        $statement->closeCursor();
        header("Location: ../newsletter_admin.php");
    }
}

class Subscriber {
    private $email_address;
    private $Spam;
   

    public function __construct($email_address, $Spam) {
        
        $this->email_address = $email_address;
        $this->spam = $Spam;
    }

    public function getEmailAddress() {
        return $this->email_address;
    }

    public function setEmailAddress($value) {
        $this->email_address = $value;
    }
    
    public function getSpam() {
        return $this->spam;
    }

    public function setSpam($value) {
        $this->spam = $value;
    }


}

class SubscriberDB {
    public static function getSubscribers() {
        $db = Database2::getDB();
        $query = 'SELECT * FROM subscribers
                  ORDER BY emailAddress';
        $statement = $db->prepare($query);
        $statement->execute();
        
        $subscribers = array();
        foreach ($statement as $row) {
            $subscriber = new Subscriber($row['emailAddress'],
                                         $row['Spam']);
            $subscribers[] = $subscriber;
        }
        return $subscribers;
    }
}

$subscribers = SubscriberDB::getSubscribers();

?>