<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../pages/index.html');
    exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'cmc';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT password, email FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Profile Page</title>
    <link href="../css/homestyle.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/04dee08355.js" crossorigin="anonymous"></script>
</head>

<body class="loggedin">
    <nav class="navtop">
        <div>
            <a href="../php/home.php">
                <img class="whiteback" src="../assets/logo.svg" alt="Capital Municipal Council" width="50px" height="50px">
                <h1>Capital Municipal Council</h1>
            </a>
            <a href="../php/profile.php"><i class="fas fa-user-circle"></i>Profile</a>
            <a href="../php/logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
    </nav>
    <div class="content">
        <h2>Profile Page</h2>
        <div>
            <p>Your account details are below:</p>
            <table>
                <tr>
                    <td>Username:</td>
                    <td><?= $_SESSION['name'] ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?= $email ?></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="footer">
        <p>&copy Capital Municipal Council of Bahrain</p>
    </div>
</body>

</html>