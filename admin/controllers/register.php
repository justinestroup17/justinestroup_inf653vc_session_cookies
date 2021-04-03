<?php
    switch($action) {
        case 'register':
            // Check if user has registered firstname, if not, send to form
            if (!isset($firstname) && !($registered)) {
                header("Location: view/register.php");
            } else {
                $_SESSION["userid"] = $firstname;
                echo 'Thank you for registering (coming from switch, )' . $firstname . '!';
                $registered = TRUE ?>
                <p><a href=".?action=list_vehicles">Return To Vehicles</a></p>
            <?php }
            break;
        case 'logout':
            $_SESSION = array();   // Clear all session data from memory
            session_destroy();     // Clean up the session ID
            header("Location: view/logout.php");
            break;
    }