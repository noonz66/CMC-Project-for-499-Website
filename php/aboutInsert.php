<?php

    $username = "root";
    $password = "";
    $database = "cmc";
    
    $mysqli = new mysqli("localhost", $username, $password, $database);
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (!empty($_POST["who_we_are"])) {
              
                    $field2 = test_input($_POST["who_we_are"]);
                }
            
                if (!empty($_POST["vision"])) {
                
                    $field3 = test_input($_POST['vision']);
                }

                if (!empty($_POST["mission"])) {
               
                    $field4 = test_input($_POST['mission']);
                }
            
                if (!empty($_POST["our_values"])) {
                
                    $field5 = test_input($_POST['our_values']);
                }
                
                if (!empty($_POST["goals"])) {                    
                        $field6 = test_input($_POST['goals']);
                    }
                
                }

                function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                  }

            $query ="INSERT INTO `about`(`who_we_are`, `vision`, `mission`, `our_values`, `goals`) VALUES 
                    ('{$field2}','{$field3}', '{$field4}', '{$field5}','{$field6}')";
    $mysqli->query($query);
    $mysqli->close();

    header('Location:../php/AboutUs.php');
    exit();

?>