<?php
require_once ("dbconnect.php");

class Item extends Dbconfig{
    public $naam;
    public $beschrijving;
    public $diet;
    public $lengte;
    public $geleefd;

    public function addItem($data){
        try{
            $this->naam = $data['naam'];
            $this->beschrijving = $data['beschrijving'];
            $this->diet = $data['diet'];
            $this->lengte = $data['lengte'];
            $this->geleefd = $data['geleefd'];

            $sql = "INSERT INTO items (naam, beschrijving, diet, lengte, geleefd)
                    VALUES            (:naam, :beschrijving, :diet, :lengte, :geleefd)";

            $this->connect();
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':naam', $this->naam);
            $stmt->bindParam(':beschrijving', $this->beschrijving);
            $stmt->bindParam(':diet', $this->diet);
            $stmt->bindParam(':lengte', $this->lengte);
            $stmt->bindParam(':geleefd', $this->geleefd);

            if(!$stmt->execute()){
                throw new Exception("Er ging iets mis met het toevoegen van de items");
            }
        
        }catch(Exception $e){
            return $e->getMessage();
        }
    }
        public function showItem($data){
            try{
                $sql = "SELECT * FROM items";
                $this->connect();
                $stmt = $this->conn->prepare($sql);
                if(!$stmt->execute()){
                    throw new Exception("Er ging iets mis met het laten zien van de items");
                }
                $result = $stmt->fetchAll();
                return $result;
            }catch(Exception $e){
                return $e->getMessage();
            }
    }
    public function editItem($data){
        try{
           
            $this->naam = $data['naam'];
            $this->beschrijving = $data['beschrijving'];
            $this->diet = $data['diet'];
            $this->lengte = $data['lengte'];
            $this->geleefd = $data['geleefd'];

            $sql = "UPDATE items SET naam = :naam, beschrijving = :beschrijving, diet = :diet, lengte = :lengte, geleefd = :geleefd
            WHERE id = :id";

            $this->connect();
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':naam', $this->naam);
            $stmt->bindParam(':beschrijving', $this->beschrijving);
            $stmt->bindParam(':diet', $this->diet);
            $stmt->bindParam(':lengte', $this->lengte);
            $stmt->bindParam(':geleefd', $this->geleefd);
            $stmt->bindParam(':id', $data['id']);

            if(!$stmt->execute()){
                throw new Exception("Er ging iets mis met het updaten van de post");
            }
            return "{$this->naam} <br> {$this->beschrijving} <br> {$this->diet} <br> {$this->lengte} <br> {$this->geleefd} <br> zijn uw nieuwe gegevens";
        
        }catch(Exception $e){
            return $e->getMessage();
        }
    }
    
    public function deleteItem($id){
        try{

            $sql = "DELETE FROM items WHERE id = :id";

            $this->connect();
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);

            if(!$stmt->execute()){
                throw new Exception("Er ging iets mis met het verwijderen van de post");
            }
        
        }catch(Exception $e){
            return $e->getMessage();
        }
    }     
}
?>