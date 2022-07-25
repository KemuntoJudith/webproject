<?php

if (empty($_POST["fullname"])) {
    die("Name is required"); 
}

if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Please enter a valid email address");
}

$mysqli = require __DIR__ ."/databaseconnection.php";

$sql = "INSERT INTO tickets (fullname, email, city, requesttype, ticketsubject)
        VALUES(?, ?, ?, ?, ?)";

$stmt = $mysqli->stmt_init(); 

if ( ! $stmt ->prepare($sql)) {
    die("SQL error: " .$mysqli->error);
}

$stmt->bind_param("sssss", 
                $_POST["fullname"],
                $_POST["email"],
                $_POST["city"],
                $_POST["requesttype"],
                $_POST["subjectticket"]);

$stmt->execute();

echo "Your ticket has been created. We will get back to you within 8 hours"; 

