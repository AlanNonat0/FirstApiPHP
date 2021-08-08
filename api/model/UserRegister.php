<?php
 namespace Api\model;

use PDO;

class UserRegister extends User{
    
    private static $pdo;

    private function __construct()
    {
        self::$pdo = ConectionFactory::getConnection();
    }

    public function register(User $user){
        try {
           $conn =  self::$pdo;
           $sql = "insert into {$this->table} (email, name, password) values (:email, :name, :password)";
           $stmt = $conn->prepare($sql);
           $stmt->bindValue(':email', $user->getEmail(), PDO::PARAM_STR);
           $stmt->bindValue(':name', $user->getName(), PDO::PARAM_STR);
           $stmt->bindValue(':password', $user->getPassword(), PDO::PARAM_STR);
           $stmt->execute();

        } catch (\PDOException $e) {
            throw $e;
        }
        
    }
 }