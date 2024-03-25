<?php
    require_once ('dbconnect.php');

    class User extends DbConfig{
        private $username;
        private $password;
        private $firstname;
        private $lastname;

        public function create($data){
                try{
                    $this->username = $data['username'];
                    $this->firstname = $data['firstname'];
                    $this->lastname = $data['lastname'];
                    $this->password = password_hash($data['password'], PASSWORD_BCRYPT, ["cost" => 12]);

                    if($data['password'] != $data['conf-password']){
                        throw new Exception("Wachtwoorden komen niet overeen.");
                    }
                    $sql = "INSERT INTO users (username, password, firstname, lastname) VALUES (:username, :password, :firstname, :lastname)";
                    $password = password_hash($data['password'], PASSWORD_BCRYPT, ['cost' => 12]);
                    $this->connect();
                    $stmt = $this->conn->prepare($sql);
                    $stmt->bindParam(":username", $this->username);
                    $stmt->bindParam(":password", $this->password);
                    $stmt->bindParam(":firstname", $this->firstname);
                    $stmt->bindParam(":lastname", $this->lastname);
                    
                    if(!$stmt->execute()){
                        throw new Exception("Account kon niet aangemaakt worden.");
                    }
                    header("Location: login.php");
                }catch(Exception $e){
                    echo $e->getMessage();
                }
                
            }
        
        public function getUser($username){//piet
            $sql = "SELECT * FROM users WHERE username = :username";
            $stmt = $this->connect()->prepare($sql);
            $stmt->bindParam(":username", $username);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        }

        public function getUserById($id){
            $sql = "SELECT * FROM users WHERE id = :id";
            $stmt = $this->connect()->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        }

        public function getUsers(){
            $sql = "SELECT * FROM users";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function getAuthorUsernameById($id){
            $sql = "SELECT username FROM users WHERE id = :id";
            $stmt = $this->connect()->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        }

        public function login($data){
            try{
                $user = $this->getUser($data['username']);
                if(!$user){
                    throw new Exception("Gebruiker bestaat niet.");
                }
                if(!password_verify($data['password'], $user->password)){
                    throw new Exception("Wachtwoord is incorrect.");
                }
                session_start();
                $_SESSION['ingelogd'] = true;
                $_SESSION['username'] = $user->username;
                $_SESSION['user_id'] = $user->id;
                header("Location: backend/admin.php");
            }catch(Exception $e){
                echo $e->getMessage();
            }
        }

        public function logout(){
            session_start();
            $_SESSION = null;
            session_unset();
            session_destroy();
            header("Location: /index.php");
        }

        public function deleteUser($id){

            $sql = "DELETE FROM users WHERE id = :id";
            $stmt = $this->connect()->prepare($sql);
            $stmt->bindParam(":id", $id);
            if($stmt->execute()){
                header("location: gebruikers.php");
            }else {
                header("location: gebruikers.php");
            }
        }

    }

?>