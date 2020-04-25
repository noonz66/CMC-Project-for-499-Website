<?php

    $username = "root";
    $password = "";
    $database = "cmc";
    
    $mysqli = new mysqli("localhost", $username, $password, $database);
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["table"])) {
      
        $table = test_input($_POST['table']);
        }
    
        if (!empty($_POST["page"])) {
        
        $page = test_input($_POST['page']);
        }

        if (!empty($_POST["pkey"])) {
       
            $pkey = test_input($_POST['pkey']);
        }
        
        if (!empty($_POST[$pkey])) {                    
            $field1 = test_input($_POST[$pkey]);
        }
    
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
      
              
        $query = "DELETE FROM {$table} WHERE {$pkey} = '{$field1}'";

        $mysqli->query($query);
        $mysqli->close();
            
        header('Location:'.$page);
            
        exit();               

?>
