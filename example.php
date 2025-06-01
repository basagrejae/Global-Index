<?php

session_start(); // session initiate

//$_SESSION["username"] = "Krossing"; // get remembered by your page



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

    <?php 
    echo $_SESSION["username"]; // print out session username
    ?>

</body>