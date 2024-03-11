<?php
require_once ("dbconnect.php");

class Post extends Dbconfig{
    public $title;
    public $beschrijving;

    public function addPost($data){
        try{
            $this->title = $data['title'];
            $this->beschrijving = $data['beschrijving'];

            $sql = "INSERT INTO post (title, beschrijving)
                    VALUES            (:title, :beschrijving)";

            $this->connect();
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':title', $this->title);
            $stmt->bindParam(':beschrijving', $this->beschrijving);

            if(!$stmt->execute()){
                throw new Exception("Er ging iets mis met het toevoegen van de post");
            }
        
        }catch(Exception $e){
            return $e->getMessage();
        }
    }
        public function showPost($data){
            try{
                $sql = "SELECT * FROM post";
                $this->connect();
                $stmt = $this->conn->prepare($sql);
                if(!$stmt->execute()){
                    throw new Exception("Er ging iets mis met het laten zien van de post");
                }
                $result = $stmt->fetchAll();
                return $result;
            }catch(Exception $e){
                return $e->getMessage();
            }
    }
    public function editPost($data){
        try{
           
            $this->title = $data['title'];
            $this->beschrijving = $data['beschrijving'];

            $sql = "UPDATE post SET title = :title, beschrijving = :beschrijving
            WHERE afspraak_id = :id";

            $this->connect();
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':title', $this->title);
            $stmt->bindParam(':beschrijving', $this->beschrijving);
            $stmt->bindParam(':id', $data['id']);

            if(!$stmt->execute()){
                throw new Exception("Er ging iets mis met het updaten van de user");
            }
            return "{$this->title} <br> {$this->beschrijving} zijn uw nieuwe gegevens";
        
        }catch(Exception $e){
            return $e->getMessage();
        }
    }
    
    public function deletePosts($post_id){
        try{

            $sql = "DELETE FROM post WHERE post_id = :id";

            $this->connect();
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $post_id);

            if(!$stmt->execute()){
                throw new Exception("Er ging iets mis met het verwijderen van de post");
            }
        
        }catch(Exception $e){
            return $e->getMessage();
        }
    }     
}
?>