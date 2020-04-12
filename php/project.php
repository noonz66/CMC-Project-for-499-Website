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
<html>
	<head>
		<meta charset="utf-8">
        <title>المشاريع</title>
        <link rel="stylesheet" type="text/css" href="../css/projectstyle.css">
	</head>
		
	<body>
        <header>
            <nav class="navtop">
                <div>
                    <a href="../php/home.php">
                        <img class="whiteback" src="../assets/logo.svg" alt="Capital Municipal Council" width="50px" height="50px">
                        <h1>Capital Municipal Council of Bahrain</h1>
                    </a>
                    <a href="../php/logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
                </div>
            </nav>

            <ul>
                <li><a href="#addProject">إضافة مشروع</a></li>
                <li><a href="#info">معلومات عامة</a></li>
                <li><a href="#range">نطاق المشروع</a></li>
                <li><a href="#state">حالة الشروع</a></li>
            </ul> 
        </header>
        
        <main>
            <div class="page">
                <form action="../php/projectsActivity.php" method="post" enctype="multipart/form-data">
                    
                    <h3 id="addProject">إضافة مشروع</h3>
                    <label>عنوان المشروع</label><br>
                    <input type="text" name="project" placeholder="عنوان المشروع" id="project" required>
                    <br>
                    <hr id="info"class="style-one">

                    <h3>معلومات عامة</h3>
                    <label>وصف المشروع</label><br>
                    <input type="textarea" name="desc" placeholder="وصف المشروع" id="desc" required>
                    <br>
                    <br>
                    <label>ارفق صورة</label><br>
                    <input type="file" name="descImage" id="descImage">
                    <br>
                    <hr class="style-one">

                    <h3 id="range">نطاق المشروع</h3>
                    <label>نطاق المشروع</label><br>
                    <input type="textarea" name="range" placeholder="نطاق المشروع" id="range" required>
                    <br>

                    <h3 id="state">حالة المشروع</h3>
                    <label>حالة المشروع</label><br>
                    <input type="textarea" name="state" placeholder="حالة المشروع" id="state" required>
                    <br>
                    

                    <label>ارفق صورة</label><br>
                    <input type="file" name="mapImage" id="mapImage">
                    <br>
                    <hr class="style-one">

                    <input type="submit" value="إرسال" name="submit">
                
                </form>
            </div>
        </main>
        <footer>
            <div class="footer">
                <p>&copy Capital Municipal Council of Bahrain</p>
            </div>	
        </footer>
	</body>	

</html>