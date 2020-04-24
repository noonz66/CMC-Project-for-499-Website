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
  <link rel="stylesheet" type="text/css" href="../css/memberstyle.css">
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
  <form action="memberDB.php" method="POST" enctype="multipart/form-data">
    <div class="content">
      <h2 class="dashboardtitle">أعضاء</h2>
    </div>
    <div class="shortcuts">
      <div id="form-main">
        <div id="form-div">
          <form class="form" id="form1">
            <p class="name">
              <input name="FName" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="الاسم الاول" id="name" />
            </p>
            <p class="name">
              <input name="LName" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="الاسم الثاني" id="name" />
            </p>
            <p class="postion">
              <input name="position" type="text" class="validate[required,custom[onlynumber],length[1,15]] feedback-input" placeholder="المنصب" id="postion" />
            </p>
            <p class="number">
              <input name="phone_no" type="text" lang="en" class="validate[required,custom[onlynumber],length[1,8]] feedback-input lefttoright" placeholder="Phone Number in English: 973########" id="number" />
            </p>
            <p class="email">
              <input name="email" type="email" lang="en" class="validate[required,custom[email]] feedback-input lefttoright" id="email" placeholder="Email Address in English: john@email.com" />
            </p>
            <p class="chickbox">
              <td> الصورة</td>
              <input name="Image" type="file" id="chickbox" />
            </p>
            <div class="submit">
              <input type="submit" value="حفظ البيانات" id="button-blue" name="submit" />
              <div class="ease"></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </form>
  <div class="footer">
    <p>مجلس أمانة العاصمة البحرين &copy</p>
  </div>
</body>

</html>