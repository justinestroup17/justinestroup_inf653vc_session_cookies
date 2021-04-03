<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zippy Used Autos</title>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
</head>

<body>
    <main>
        <header>
            <h1>Zippy Used Autos</h1>
            <?php
            global $firstname;
            echo $firstname;
            if (!isset($_SESSION['userid']))
            { ?>
                <!-- Routes to the controller with the action register -->
                <p><a href=".?action=register">Register</a></p>
            <?php }
            else
            {
                echo ('Welcome '.$_SESSION['userid'].'!'); ?>
                <p>(<a href=".?action=logout">Sign Out</a>)</p>
            <?php } ?>
        </header>