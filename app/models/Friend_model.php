<?php

class Friend_model {
    private $table = 'friend';
    private $db;

    public function __construct(){
        $this->db = new Database;
        
    }

   


    public function getAllFriend(){
        $this->db->query('SELECT * FROM ' .$this->table);
        return $this->db->resultSet();
     }

     public function getFriendById($id){
      

        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE friend_id = :id;');
        $this->db->bind('id', $id);
        return $this->db->single();     
     }

     
}