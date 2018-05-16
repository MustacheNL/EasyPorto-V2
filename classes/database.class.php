<?php
class Database {
    private $hostname = DB_HOSTNAME;
    private $username = DB_USERNAME;
    private $password = DB_PASSWORD;
    private $database = DB_NAME;
    public $db;

    public function __construct() {
        try {
            $this->db = new PDO("mysql:host=" . $this->hostname . ";dbname=" . $this->database, $this->username, $this->password);
            //echo "Connection succesful!"; //Uncomment this line to see if the connection is really made.
        } catch (PDOException $exception) {
            echo $exception;
        }
    }

    public function fetchTable($table) {
        $query = "SELECT * FROM $table";
        $executeQuery = $this->db->query($query) or die('Mislukt!');

        while ($r = $executeQuery->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $r;
        }
        return $data;
    }

    public function fetchByID($id, $table) {
        $query = "SELECT * FROM $table WHERE id = :id";
        $preparedQuery = $this->db->prepare($query);
        $preparedQuery->execute(array(':id' => $id));
        $data = $preparedQuery->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    /* Not wtorking yet, RIP. */
//    public function updateRow($id, $name, $email, $mobile, $address, $table) {
//        $query = "UPDATE $table
// SET name=:name,email=:email,mobile=:mobile,address=:address
// WHERE id=:id";
//        $preparedQuery = $this->db->prepare($query);
//        $preparedQuery->execute(array(':id' => $id, ':name' => $name,
//            ':email' => $email, ':mobile' => $mobile, ':address' => $address));
//        return true;
//    }
//
//    public function insertData($name, $email, $mobile, $address, $table) {
//        $query = "INSERT INTO $table SET name=:name,email=:email,mobile=:mobile,address=:address";
//        $preparedQuery = $this->db->prepare($query);
//        $preparedQuery->execute(array(':name' => $name, ':email' => $email,
//            ':mobile' => $mobile, ':address' => $address));
//        return true;
//    }

    public function deleteData($id, $table) {
        $query = "DELETE FROM $table WHERE id=:id";
        $preparedQuery = $this->db->prepare($query);
        $preparedQuery->execute(array(':id' => $id));
        return true;
    }
}