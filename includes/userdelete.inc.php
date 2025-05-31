<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php"; // Include the database connection file

        $query = "DELETE FROM users WHERE username = :username AND pwd = :pwd;";

        $stmt = $pdo->prepare($query); 

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);

        $stmt->execute();

        $pdo = null; // Close the database connection
        $stmt = null; // Close the statement

        header("Location: ../index.php");

        die(); // Stop further script execution
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {    
    header("Location: /index.php");
}