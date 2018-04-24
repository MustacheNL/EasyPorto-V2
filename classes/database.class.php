<?php

class database {
    private $host = DB_HOST;
    private $username = DB_USERNAME;
    private $password = DB_PASSWORD;
    private $databasename = DB_NAME;

    private $db;
    private $error;
    private $qError;
    private $stmt;

    public function __construct() {
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->databasename;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try {
            $this->db = new PDO($dsn, $this->username, $this->password, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
        }
    }

    public function query($query) {
        $this->stmt = $this->db->prepare($query);
    }

    public function bind($param, $value, $type = null) {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute() {
        return $this->stmt->execute();

        $this->qError = $this->db->errorInfo();
        if (!is_null($this->qError[2])) {
            echo $this->qError[2];
        }
        echo 'Query executed!';
    }

    public function fetchAll() {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetchSingle() {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function fetchColumn() {
        $this->execute();
        return $this->stmt->fetchColumn();
    }

    public function rowCount() {
        return $this->stmt->rowCount();
    }

    public function lastInsertId() {
        return $this->db->lastInsertId();
    }

//    public function beginTransaction(){
//        return $this->db->beginTransaction();
//    }
//
//    public function endTransaction(){
//        return $this->db->commit();
//    }
//
//    public function cancelTransaction(){
//        return $this->db->rollBack();
//    }
//
//    public function debugDumpParams(){
//        return $this->stmt->debugDumpParams();
//    }

    public function queryError() {
        $this->qError = $this->db->errorInfo();
        if (!is_null($this->qError[2])) {
            echo $this->qError[2];
        }
    }
}