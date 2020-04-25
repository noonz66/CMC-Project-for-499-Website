<?php

    $username = "root";
    $password = "";
    $database = "cmc";
    
    $mysqli = new mysqli("localhost", $username, $password, $database);
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    // properly escape your values before you send them to DB
    // to prevent SQL injection attacks.

        $table = $mysqli->real_escape_string($_POST['table']);
        $page = $mysqli->real_escape_string($_POST['page']);
        $pkey = $mysqli->real_escape_string($_POST['pkey']);

       
            $field1 = $mysqli->real_escape_string($_POST[$pkey]);
              
            $query = "DELETE FROM {$table} WHERE {$pkey} = '{$field1}'";

            $mysqli->query($query);
            $mysqli->close();
            
            header('Location:'.$page);
            
            exit();
                

?>
