<?php

require_once '../libraries/Database.php';

class UserModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function findUserByEmail($email){
        $this->db->query('SELECT * FROM user WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        if($this->db->rowCount() > 0){
            return $row;
        }else{
            return false;
        }
    }

    public function login($email, $password)
    {
        $row = $this->findUserByEmail($email);

        if ($row == false) return false;

        if ($password == $row->password)
            return $row;
        else
            return false;
    }
}