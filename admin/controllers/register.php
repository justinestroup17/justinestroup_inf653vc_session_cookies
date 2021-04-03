<?php 
global $firstname;
    switch($action) {
        case 'register':
            if(!isset($firstname)) {
                header("Location: view/register.php");
            }
            include('view/register.php');
            break;
        case 'logout':
            header("Location: view/logout.php");
            break;
    }