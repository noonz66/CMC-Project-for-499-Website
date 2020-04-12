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
  <link rel="stylesheet" type="text/css" href="../css/newsStyle.css">
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
      <a href="../php/logout.php"><i class="fas fa-sign-out-alt"></i>خروج</a>
    </div>
  </nav>
  <form action="newsDB.php" method="POST">
    <div class="content">
      <h2 class="dashboardtitle">أخبار</h2>
    </div>
    <div class="shortcuts">
      <div id="form-main">
        <div id="form-div">
          <form class="form" id="form1">
            <p class="title">
              <input name="title" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="العنوان " id="title" />
            </p>
            <p class="date">
              <input name="date" type="date" class="validate[required,custom[onlydate]] feedback-input" placeholder="التاريخ" id="date" />
            </p>
            <p class="text">
              <textarea name="body" class="validate[required,length[6,500]] feedback-input" id="body" placeholder="المقال"></textarea>
            </p>
            <p class="chickbox">
              <td> الصورة</td>
              <input name="image" type="file" id="chickbox" />
            </p>
            <div class="submit">
              <input type="submit" value="حفظ البيانات" id="button-blue" />
              <div class="ease"></div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>مجلس أمانة العاصمة البحرين &copy</p>
    </div>
  </form>
</body>

</html>