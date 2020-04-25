<?php

    $username = "root";
    $password = "";
    $database = "cmc";
    
    $mysqli = new mysqli("localhost", $username, $password, $database);
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST["seqNo"])) {
        
                $field1 = test_input($_POST["seqNo"]);

                
            }
        
            if (!empty($_POST["who_we_are"])) {
        
                $field2 = test_input($_POST["who_we_are"]);            
                
                $query = "UPDATE about
                    SET who_we_are = '{$field2}'
                    WHERE seqNo = '{$field1}'";

                $mysqli->query($query);
            }
        
            if (!empty($_POST["vision"])) {
            
                $field3 = test_input($_POST['vision']);
                
                $query = "UPDATE about
                    SET vision='{$field3}'
                    WHERE seqNo = '{$field1}'";

                $mysqli->query($query);
            }

            if (!empty($_POST["mission"])) {
        
                $field4 = test_input($_POST['mission']);

                
                $query = "UPDATE about
                    SET mission ='{$field4}'
                    WHERE seqNo = '{$field1}'";

                $mysqli->query($query);
            }
        
            if (!empty($_POST["our_values"])) {
            
                $field5 = test_input($_POST['our_values']);
                
                $query = "UPDATE about
                    SET our_values ='{$field5}'
                    WHERE seqNo = '{$field1}'";

                $mysqli->query($query);
            }
            
            if (!empty($_POST["goals"])) {                    
                    $field6 = test_input($_POST['goals']);
                    
                $query = "UPDATE about
                SET goals ='{$field6}'
                WHERE seqNo = '{$field1}'";

                $mysqli->query($query);

                }
        
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }


    $mysqli->close();

    header('Location:../php/AboutUs.php');
    exit();

?>
