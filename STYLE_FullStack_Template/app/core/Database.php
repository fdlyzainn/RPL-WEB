<?php

class Database {

    private $host = "localhost";
    private $dbname = "style_marketplace";
    private $username = "root";
    private $password = "";

    public function connect(){

        try{

            return new PDO(
                "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4",
                $this->username,
                $this->password
            );

        }catch(PDOException $e){

            die($e->getMessage());

        }

    }

}
