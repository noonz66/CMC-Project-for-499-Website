<?php

    $username = "root";
    $password = "";
    $database = "cmc";
    
    $mysqli = new mysqli("localhost", $username, $password, $database);
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    // Don't forget to properly escape your values before you send them to DB
    // to prevent SQL injection attacks.

        $field1 = $mysqli->real_escape_string($_POST['seqNo']);

        $query = "DELETE FROM about WHERE seqNo ='{$field1}'";


    $mysqli->query($query);
    $mysqli->close();

    header('Location: AboutUs.php');
    exit();
?>