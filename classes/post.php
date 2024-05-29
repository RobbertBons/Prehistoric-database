<?php
require_once ("dbconnect.php");

class Post extends Dbconfig {
    public $title;
    public $beschrijving;

    public function addPost($data) {
        try {
            $this->title = $data['title'];
            $this->beschrijving = $data['beschrijving'];

            $sql = "INSERT INTO post (title, beschrijving) VALUES (:title, :beschrijving)";

            $this->connect();
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':title', $this->title);
            $stmt->bindParam(':beschrijving', $this->beschrijving);

            if (!$stmt->execute()) {
                throw new Exception("Er ging iets mis met het toevoegen van de post");
            }

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function showPost() {
        try {
            $sql = "SELECT postID, title, beschrijving FROM post"; // Explicitly select postID
            $this->connect();
            $stmt = $this->conn->prepare($sql);
            if (!$stmt->execute()) {
                throw new Exception("Er ging iets mis met het laten zien van de post");
            }
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $result;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function editPost($data) {
        try {
            $this->title = $data['title'];
            $this->beschrijving = $data['beschrijving'];

            $sql = "UPDATE post SET title = :title, beschrijving = :beschrijving WHERE postID = :postID";

            $this->connect();
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':title', $this->title);
            $stmt->bindParam(':beschrijving', $this->beschrijving);
            $stmt->bindParam(':postID', $data['postID']);

            if (!$stmt->execute()) {
                throw new Exception("Er ging iets mis met het updaten van de post");
            }
            return "{$this->title} <br> {$this->beschrijving} zijn uw nieuwe gegevens";

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function deletePosts($post_id) {
        try {
            $sql = "DELETE FROM post WHERE postID = :postID"; // Use postID

            $this->connect();
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':postID', $post_id);

            if (!$stmt->execute()) {
                throw new Exception("Er ging iets mis met het verwijderen van de post");
            }

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
?>