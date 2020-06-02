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

     public function addFriend($data){
         $query = "INSERT INTO friend VALUES ('', :friend_name, :friend_number, :friend_email)";
         $this->db->query($query);
         $this->db->bind('friend_name', $data['friendNameInput']);
         $this->db->bind('friend_number', $data['friendNumberInput']);
         $this->db->bind('friend_email', $data['friendEmailInput']);
         $this->db->execute();
         return $this->db->rowCount();
     }

   public function deleteFriend($id){
       $query = 'DELETE  FROM ' . $this->table . ' WHERE friend_id = :id;';
       $this->db->query($query);
       $this->db->bind('id',$id);
       $this->db->execute();
       return $this->db->rowCount();
   }

   public function updateFriend($data){
    $query = "UPDATE friend SET 
                friend_name = :friend_name,
                friend_number = :friend_number,
                friend_email = :friend_email
                WHERE friend_id = :id";
    $this->db->query($query);
    $this->db->bind('friend_name', $data['friendNameInput']);
    $this->db->bind('friend_number', $data['friendNumberInput']);
    $this->db->bind('friend_email', $data['friendEmailInput']);
    $this->db->bind('id', $data['friend_id']);

    $this->db->execute();
    return $this->db->rowCount();
}

public function searchFriend(){
    $searchInput = $_POST['searchInput'];
    $query = "SELECT * FROM friend WHERE friend_name LIKE :keyword";
    $this->db->query($query);
    $this->db->bind('keyword', "%$searchInput%");
    return $this->db->resultSet();
}

     
}