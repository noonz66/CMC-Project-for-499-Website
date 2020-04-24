<?php
        // We need to use sessions, so you should always start sessions using the below code.
    session_start();
    // If the user is not logged in redirect to the login page
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
    }


    $username = "root";
    $password = "";
    $database = "cmc";

    $mysqli = new mysqli("localhost", $username, $password, $database);

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    $query = "SELECT * FROM news";
    $result = $mysqli->query($query);
?>
<!DOCTYPE html>
<html class="righttoleft">

<head>
    <meta charset="utf-8">
    <title>الأخبار</title>
    <link href="../css/homestyle.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/tablestyle.css">
    <script src="https://kit.fontawesome.com/04dee08355.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="navtop">
            <div>
                <a href="../php/home.php">
                    <img class="whiteback" src="../assets/logo.svg" alt="Capital Municipal Council of Bahrain Logo" width="50px" height="50px">
                    <h1>مجلس أمانة العاصمة البحرين</h1>
                </a>
                <a href="../php/logout.php"><i class="fas fa-sign-out-alt"></i>خروج</a>
            </div>
        </nav>

    </header>
    <div class="content">
        <div class="page">
            <h2>جدول الأخبار</h2>
            <?php
                    echo ' 
                        <table id="display"> 
                            <tr> 
                                <th> <font face="Arial">الرقم التسلسلي</font> </th> 
                                <th> <font face="Arial">العنوان</font> </th> 
                                <th> <font face="Arial">الصورة</font> </th>
                                <th> <font face="Arial">التاريخ</font> </th> 
                                <th> <font face="Arial">المقال</font> </th> 
                            </tr>
                        ';     

            if ($result = $mysqli->query($query)) {
                while ($row = $result->fetch_assoc()){
                    $field0name = $row["SeqNo"];
                    $field1name = $row["title"];
                    $field2name = $row["image"];
                    $field3name = $row["date"];
                    $field4name = $row["body"];
            
                    echo '<tr> 
                            <td><p>'.$field0name.'</p></td> 
                            <td><p>'.$field1name.'</p></td> 
                            <td><p>'.$field2name.'</p></td> 
                            <td><p>'.$field3name.'</p></td> 
                            <td><p>'.$field4name.'</p></td>                     
                        </tr>';
                }
                $result->free();  
            } 
            echo '<tr><td colspan="5"><a href="news.php"  class="button">Insert</a> <a href="newsDelete.php"  class="button">Delete</a></td></tr>'
        
            ?>
            </div>
        </div>
    <div class="footer">
        <p>مجلس أمانة العاصمة البحرين &copy</p>
    </div>
</body>

</html>
