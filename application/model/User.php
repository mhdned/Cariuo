<?php 

namespace Application\Model;

class User extends Model{

    public function find($username){
        $query = "SELECT * FROM `users` WHERE username = ? ";
        $result = $this->query($query, array($username))->fetch();
        $this->closeConnection();
        return $result;
    }

    public function findById($id){
        $query = "SELECT * FROM `users` WHERE id = ? ";
        $result = $this->query($query, array($id))->fetch();
        $this->closeConnection();
        return $result;
    }

    public function signInTimeUpdate($id)
    {
        $query = "UPDATE `users` SET `signin_time`= current_timestamp() WHERE `id` = ? ;";
        $this->executeMethod($query, array_merge([$id]));
        $this->closeConnection();
    }

    public function setScore($id,$score){
        $query = "UPDATE `users` SET `score`= ? WHERE `id` = ? ;";
        $this->executeMethod($query, array_merge([$score],[$id]));
        $this->closeConnection();
    }

    public function insert($values)
    {
        unset($values['repassword']);
        unset($values['login']);

        $query = "INSERT INTO `users` ( `username`, `password`, create_time) VALUES ( ?, ?, current_timestamp() );";
        $this->executeMethod($query, array_values($values));
        $this->closeConnection();
    }
}