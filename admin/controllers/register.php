<?php 
    switch($action) {
        case 'register':
            // Check if user has registered firstname, if not, send to form
            if (!isset($_POST["fname"]) && !isset($firstname) &&!isset($_SESSION["userid"])) {
            include('view/register.php'); 
            } else {
                $firstname = $_POST["fname"];
                $_SESSION["userid"] = $firstname;
                echo 'Thank you for registering, ' . $firstname . '!'; ?>
                <p><a href=".?action=list_vehicles">Return To Vehicles</a></p>
            <?php }
            break;
    }