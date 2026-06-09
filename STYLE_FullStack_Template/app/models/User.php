<?php

require_once "../app/core/Database.php";

class User {

    private $db;

    public function __construct(){

        $this->db = (new Database())->connect();

    }

    public function create($data){

        $sql = "
        INSERT INTO users
        (full_name,email,password,role)
        VALUES(?,?,?,?)
        ";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            $data['full_name'],
            $data['email'],
            $data['password'],
            $data['role']
        ]);
    }

    public function findByEmail($email){

        $stmt = $this->db->prepare(
            "SELECT * FROM users WHERE email=?"
        );

        $stmt->execute([$email]);

        return $stmt->fetch(PDO::FETCH_ASSOC);

    }

}
