<?php
class Dbconfig{
    protected $conn;
    public function connect(){
        try{
            $conn = new PDO("mysql:localhost=db; dbname=prehistoric_database", 'root', '');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $this->conn = $conn;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}
?>