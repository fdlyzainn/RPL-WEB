<?php

require_once "../app/models/User.php";

class AuthController {

    private $user;

    public function __construct(){

        $this->user = new User();

    }

}
