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


?>
<!DOCTYPE html>
<html class="righttoleft">

<head>
    <meta charset="utf-8">
    <title>الأخبار</title>
    <link href="../css/homestyle.css" rel="stylesheet" type="text/css">
    <link href="../css/deletestyle.css" rel="stylesheet" type="text/css">
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
            <div id="delete" class="forms">
                <h2>الأخبار</h2>
                <form action="Delete.php" method="post" id="deleteForm">
                    <h4 id="formh4">حذف من السجل</h4>
                    <p> اكتب الرفم التسلسلي للسجل الذي تريد إزالته:</p>
                    <!--hidden inputs-->
                    <input type="hidden" name="table" value="news"/>
                    <input type="hidden" name="page" value="../php/newsTable.php"/>
                    <input type="hidden" name="pkey" value="seqNo"/> 
                    
                    <!--inputs visible in form-->
                    <label> الرقم التسلسلي:
                        </label>
                        <input type ="text" name="seqNo" pattern="[0-9]{1,4}" title="الرجاء إدخال الأرقام فقط " placeholder="ادخل الرقم التسلسي" autofocus required>
                        <br>
                    <input type="submit" value="Delete"/>
                </form>
    
            </div>      
        </div>
    </div>
    <div class="footer">
        <p>مجلس أمانة العاصمة البحرين &copy</p>
    </div>
</body>

</html>
