<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zippy Used Autos</title>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
</head>

<body>
    <main class="center">
    <header>
    <h1>Zippy Used Autos</h1>
<?php
// Have user fill out first name in form if have not already
if (!isset($_GET['fname'])) { ?>
<form action="" method="get">
    <label>Please enter your first name:</label><br>
    <input type="text" name="fname" required><br>
    <label>&nbsp;</label>
    <input class="button blue button-slim" type="submit" value="Register" action="register" max="20" required >
  </form>
<?php 
} else {
  global $firstname;
  $firstname = $_REQUEST['fname'];
  $_SESSION['userid'] = $firstname;
  echo 'Thank you for registering, ' . $_SESSION['userid'] . '!';
  ?>
  <p><a href="/justine_stroup_inf653vc_session_cookies/">Click here </a> to view our vehicles list</p>
  
  
<?php }
  include('footer.php');