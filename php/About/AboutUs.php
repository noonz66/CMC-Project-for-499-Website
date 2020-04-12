<?php  
/*
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../pages/index.html');
    exit;
}
//auto logout after set amount of time
$autologout = 3600; //set autologout time, in seconds
$lastactive = $_SESSION['timestamp'] ?? 0; // Use of 'Null Coalescing Operator' - pulls the timestamp or sets it to 0.
if (time() - $lastactive > $autologout) {
    $_SESSION = array();                   // Clear the session data
    setcookie(session_name(), false, time() - 3600);     // Clear the cookie
    session_destroy();                              // Destroy the session data
    header('Location: ../pages/index.html');
    exit;
} else {
    $_SESSION['timestamp'] = time();              //Or reset the timestamp
}*/

    $username = "root"; 
    $password = ""; 
    $database = "cmc"; 

    $mysqli = new mysqli("localhost", $username, $password, $database); 

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    $query = "SELECT * FROM about";
    $result = $mysqli->query($query);

?>
<script>
    function edit() {
        var x = document.getElementById("Edit");
        var table = document.getElementById("display");
        if (x.style.display === "none") {
            x.style.display = "block";
            table.style.display = "none";

        } else {
            x.style.display = "none";
        }
    }
    function insert() {
    var x = document.getElementById("insert");
    var table = document.getElementById("display");
        if (x.style.display === "none") {
            x.style.display = "block";
            table.style.display = "none";

        } else {
            x.style.display = "none";
        }
    }
    function deleteRow(){
        var x = document.getElementById("delete");
        var table = document.getElementById("display");
        if (x.style.display === "none") {
            x.style.display = "block";
            table.style.display = "none";

        } else {
            x.style.display = "none";
        }
    }
</script>
<!DOCTYPE html>
<html>
    <head>    
        <meta charset="utf-8">
        <title>معلومات عنا</title>
        <script src="https://kit.fontawesome.com/04dee08355.js" crossorigin="anonymous"></script>
        <link href="css/homestyle.css" rel="stylesheet" type="text/css">
        <link href="css/aboutstyle.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>        
        <nav class="navtop">
            <div>
                <a href="../php/home.php">
                    <img class="whiteback" src="../assets/logo.svg" alt="Capital Municipal Council" width="50px" height="50px">
                    <h1>Capital Municipal Council of Bahrain</h1>
                </a>
                 <!--  <a href="../php/logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a> -->
            </div>
        </nav>
        <div class="content">
            <h2>About Us Table</h2>
        </div>   
        <?php include('MyTable.php'); ?>  
        <div id="Edit" class="forms">
            <h2>Edit About Us Table</h3>
            <form action="update.php" method="post" id="editForm">  
    
                    <label> الرقم التسلسلي:
                    </label>
                         <input name ="seqNo" required>  
                    <br>  
                    <br>                   
                    <label> من نحن:
                    </label>
                         <textarea name ="who_we_are" cols="100" rows="4" required></textarea>   
                    <br>
                    <label>  الرؤية:
                    </label>                                                     
                             <textarea type="text" name ="vision" cols="100" rows="4" required></textarea>    
                    <br>   
                    <label> المهمة:
                    </label>
                        <textarea type="text" name ="mission" cols="100" rows="4" required></textarea>                    
                    <br>   
                    <label> القيم المؤسسية:
                    </label>
                        <textarea type="text" name ="our_values" cols="100" rows="4" required></textarea>                    
                    <br>   
                    <label>الأهداف الاستراتيجية:
                    </label>                       
                     
                    <textarea type="text" name ="goals" cols="100" rows="4" required></textarea>                    
                    <br> 
                    <input type="submit" value="Edit"/>  
            </form>      
        </div>
        <div id="insert" class="forms">
            <h2>Insert a New Row into About Us Table</h3>
            <form action="insert.php" method="post" id="insertForm">                     
                    <label> الرقم التسلسلي:
                    </label>
                         <input name ="seqNo" required>  
                    <br><br>                    
                    <label> من نحن:
                    </label>
                         <textarea name ="who_we_are" cols="100" rows="4" required></textarea>   
                    <br>
                    <label>  الرؤية:
                    </label>                                                     
                             <textarea type="text" name ="vision" cols="100" rows="4" required></textarea>    
                    <br>   
                    <label> المهمة:
                    </label>
                        <textarea type="text" name ="mission" cols="100" rows="4" required></textarea>                    
                    <br>   
                    <label> القيم المؤسسية:
                    </label>
                        <textarea type="text" name ="our_values" cols="100" rows="4" required></textarea>                    
                    <br>   
                    <label>الأهداف الاستراتيجية:
                    </label>                       
                     
                    <textarea type="text" name ="goals" cols="100" rows="4" required></textarea>                    
                    <br> 
                    <input type="submit" value="Insert"/>  
            </form>      
        </div>
        <div id="delete" class="forms">
            <h2>Delete a Row in About Us Table</h2>
            <p> اكتب الرفم التسلسلي للسجل الذي تريد إزالته:</p>
            <form action="delete.php" method="post" id="deleteForm">                     
                 
                    <label> الرقم التسلسلي:
                    </label>
                         <input name ="seqNo" required>  
                    <br> 
                    <input type="submit" value="Delete"/>
            </form>
        </div> 
        <div class="footer">
        <p>&copy Capital Municipal Council of Bahrain</p>
        </div>
    </body>
</html>