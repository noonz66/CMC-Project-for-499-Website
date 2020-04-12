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
        $field2 = $mysqli->real_escape_string($_POST['who_we_are']);
        $field3 = $mysqli->real_escape_string($_POST['vision']);
        $field4 = $mysqli->real_escape_string($_POST['mission']);
        $field5 = $mysqli->real_escape_string($_POST['our_values']);
        $field6 = $mysqli->real_escape_string($_POST['goals']);

    $query = "UPDATE about
                SET who_we_are = '{$field2}', vision='{$field3}', mission ='{$field4}', our_values ='{$field5}', goals ='{$field6}'
                WHERE seqNo= '{$field1}'";


    $mysqli->query($query);
    $mysqli->close();

    header('Location: AboutUs.php');
    exit();
?>