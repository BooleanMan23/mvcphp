<?php

class Friend_model {
    private $dbh;
    private $stmt;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=mvc';
        try{
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e){
            die($e->getMessege());
        }

    }


    public function getAllFriend(){
         $this->stmt = $this->dbh->prepare('SELECT * FROM friend');
         $this->stmt->execute();
         return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
     }
}