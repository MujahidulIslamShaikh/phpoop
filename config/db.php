<?php
class Database {

    private $host = "localhost";
    private $dbname = "test_db";
    private $username = "root";
    private $password = "";
    public $conn;


    public function connect(){
        try{
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname",
                                  $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch(PDOException $e){
            echo "Connection Failed !" . $e->getMessage();
        }
    }
}

$db = new Database();
$db->connect();

?>