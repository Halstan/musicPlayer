<?php

class Database{
    private $host   = 'localhost';
    private $db   = 'musicdb';
    private $user = 'root';
    private $password = 'mysql';
    private $charset  = 'utf8mb4';

    function connect(){
        try{
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false
            ];
            $pdo = new PDO($connection, $this->user, $this->password, $options);
    
            return $pdo;

        }catch(PDOException $e){
            print_r('Error conecction: ' . $e->getMessage());
        }
    }
}

?>