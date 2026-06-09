<?php

session_start();

$page = $_GET['page'] ?? 'home';

switch($page){

    case 'login':
        require "../app/views/public/login.php";
        break;

    case 'register':
        require "../app/views/public/register.php";
        break;

    case 'customer':
        require "../app/views/customer/dashboard.php";
        break;

    case 'seller':
        require "../app/views/seller/dashboard.php";
        break;

    case 'admin':
        require "../app/views/admin/dashboard.php";
        break;

    default:
        require "../app/views/public/home.php";
        break;
}
