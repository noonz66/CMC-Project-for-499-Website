<?php
    $username = "root";
    $password = "";
    $database = "cmc";

    $mysqli = new mysqli("localhost", $username, $password, $database);

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    $query = "SELECT * FROM member";
    $result = $mysqli->query($query);

?>
<!DOCTYPE html>
<html class="righttoleft">

<head>
    <meta charset="utf-8">
    <title>المشاريع</title>
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
        <h2>جدول الأعضاء</h2>
        <?php      
            echo ' 
            <table id="display"> 
        <tr> 
            <th> <font face="Arial">الاسم الاول</font> </th> 
            <th> <font face="Arial">الاسم الثاني</font> </th> 
            <th> <font face="Arial">المنصب</font> </th> 
            <th> <font face="Arial">الرقم</font> </th> 
            <th> <font face="Arial">البريد الاكتروني</font> </th> 
            <th> <font face="Arial">الصورة</font> </th> 
        </tr>
        ';     

            if ($result = $mysqli->query($query)) {
                while ($row = $result->fetch_assoc()) {
                    $field1name = $row["FName"];
                    $field2name = $row["LName"];
                    $field3name = $row["position"];
                    $field4name = $row["phone_no"];
                    $field5name = $row["email"]; 
                    $field6name = $row["Image"]; 
            
                    echo '<tr> 
                            <td>'.$field1name.'</td> 
                            <td><p>'.$field2name.'</p></td> 
                            <td><p>'.$field3name.'</p></td> 
                            <td><p>'.$field4name.'</p></td> 
                            <td><p>'.$field5name.'</p></td> 
                            <td><p>'.$field6name.'</p></td> 
                        </tr>';
                }
                $result->free();  
            } 
        echo '<tr><td colspan="6"><a href="member.php" class="button">Insert</a></td></tr>'
        
        ?>
        </div>
    <div class="footer">
        <p>مجلس أمانة العاصمة البحرين &copy</p>
    </div>
</body>

</html>
