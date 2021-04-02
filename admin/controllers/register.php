<?php 
    switch($action) {
        case 'register':
            // Check if user has registered firstname, if not, send to form
            if (!isset($_POST["fname"]) && !isset($firstname)) {
            include('view/register.php'); 
            } else {
                $firstname = $_POST["fname"];
                echo 'Thank you for registering, ' . $firstname . '!';
            }
            break;
    }