<?php
 if(isset($_SESSION['userid'] )) {
 echo ('Hello '.$_SESSION['userid']);
 }
 else {
    switch($action) {
        case 'register':
            $firstname = filter_input(INPUT_GET, 'fname');
            echo('Hello ' . $firstname);
            // Check if user has registered firstname, if not, send to form
            if (!isset($firstname) && !($registered)) {
                header("Location: view/register.php");
            } else {
                $_SESSION["userid"] = $firstname;
                echo 'Thank you for registering, ' . $firstname . '!';
                $registered = TRUE ?>
                <p><a href=".?action=list_vehicles">Return To Vehicles</a></p>
            <?php }
            break;
    }
 }