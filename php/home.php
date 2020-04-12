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
    <title>Home Page</title>
    <link href="../css/homestyle.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/04dee08355.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body class="loggedin">
    <nav class="navtop">
        <div>
            <a href="../php/home.php">
                <img class="whiteback" src="../assets/logo.svg" alt="Capital Municipal Council of Bahrain Logo" width="50px" height="50px">
                <h1>مجلس أمانة العاصمة البحرين</h1>
            </a>
            <a href="../php/logout.php"><i class="fas fa-sign-out-alt"></i>تسجيل خروج</a>
        </div>
    </nav>
    <div class="content">
        <h2 class="dashboardtitle">لوحة القيادة</h2>
        <p class="lefttoright">Welcome back, <?= $_SESSION['fname'] ?>!</p>
    </div>
    <div class="content">
        <div>
            <div class="shortcuts">
                <a href="" class="shortcut"><img class="imgsize" src="../assets/icons/news.svg" alt="News Icon"><span class="shortcut-label">أخبار</span> </a>
                <a href="../php/project.php" class="shortcut"><img class="imgsize" src="../assets/icons/project.svg" alt="Projects Icon"><span class="shortcut-label">مشاريع</span> </a>
                <a href="" class="shortcut"><img class="imgsize" src="../assets/icons/members.svg" alt="Council Members Icon"><span class="shortcut-label">أعضاء المجلس</span> </a>
                <a href="AboutUs.php" class="shortcut"><img class="imgsize" src="../assets/icons/aboutus.svg" alt="About Us Icon"><span class="shortcut-label">معلومات عنا</span> </a>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>مجلس أمانة العاصمة البحرين &copy</p>
    </div>
</body>

</html>