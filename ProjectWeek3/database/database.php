<?php
/******************************************************
 * Name                        Project
 * Kevin Powell             Week 5 Project
 * 
 * Last Updated
 * 9/13/2019
 * 9/19/2019
 *****************************************************/
//class to access database through mysql
class Database {
    private static $dsn = 'mysql:host=localhost;dbname=signupdb';
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
                //$error_message = $e->getMessage();
                include('../errors/error_db.php');
                exit();
            } 
            
            
            }
        return self::$db;
    }       //function to add a new member to db
        function addMember($full_name, $email_address,$dateOB, $comments){
            $db = Database::getDB();
            $query = 'INSERT INTO members
            (fullName, emailAddress, dateOB, Comments)
                VALUES
                         (:fullName, :emailAddress,:dateOB, :Comments)';
            $statement=$db ->prepare($query);
            $statement->bindValue(':fullName', $full_name);
            $statement->bindValue(':emailAddress', $email_address);
            $statement->bindValue(':dateOB', $dateOB);
            $statement->bindValue(':Comments', $comments);
            $statement->execute();
            $statement->closeCursor();
            header("Location: ../validation.php");
                   }          
    
            //function to delte member from db
     function deleteMember($member_id) {
        $db = Database::getDB();
        $query = "DELETE FROM members
                  WHERE memberID = :member_id";
        $statement = $db->prepare($query);
        $statement->bindValue(':member_id', $member_id);
        $statement->execute();
        $statement->closeCursor();
        header("Location: ../userChange.php");
    }
}

//class that loads database info into table
class Member {
    private $member_id;
    private $full_name;
    private $email_address;
    private $dateOB;
    private $comments;

    public function __construct($member_id, $full_name, $email_address, $dateOB, $comments) {
        $this->member_id = $member_id;
        $this->full_name = $full_name;
        $this->email_address = $email_address;
        $this->dateOB = $dateOB;
        $this->comments = $comments;
    }

    public function getID() {
        return $this->member_id;
    }

    public function setID($value) {
        $this->member_id = $value;
    }

    public function getFullName() {
        return $this->full_name;
    }

    public function setFullName($value) {
        $this->full_name = $value;
    }
    public function getEmailAddress() {
        return $this->email_address;
    }

    public function setEmailAddress($value) {
        $this->email_address = $value;
    }
    
    public function getDateOB() {
        return $this->dateOB;
    }

    public function setDateOB($value) {
        $this->dateOB = $value;
    }
    
    public function getComments() {
        return $this->comments;
    }

    public function setComments($value) {
        $this->comments = $value;
    }


}

class MemberDB {
    public static function getMembers() {
        $db = Database::getDB();
        $query = 'SELECT * FROM members
                  ORDER BY fullName';
        $statement = $db->prepare($query);
        $statement->execute();
        
        $members = array();
        foreach ($statement as $row) {
            $member = new Member($row['memberID'],
                                     $row['fullName'],
                                     $row['emailAddress'],
                                     $row['dateOB'],
                                     $row['Comments']);
            $members[] = $member;
        }
        return $members;
    }
}

$members = memberDB::getMembers();


?>
