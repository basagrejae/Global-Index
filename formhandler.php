<?php

//var_dump($_SERVER["REQUEST_METHOD"]);

 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favouritepet = htmlspecialchars($_POST["favoritepet"]);
    
    if(empty($firstname)) {
        exit();
        header("Location: index.php");
    }

    echo "These are the data, that the user submitted:";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favouritepet;

    header("Location: index.php");
 }
else {
    header("Location: index.php");
}