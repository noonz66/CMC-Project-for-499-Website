<?php

// db info
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'cmc';
// Try and connect using the info above.
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
$conn->set_charset('utf8');

if (mysqli_connect_errno()) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
//if (isset($_POST['title']) && isset($_POST['date']) && isset($_POST['body']) && isset($_POST['image']) ) {

//if (!isset($_POST['title'])){

//}else{
//   echo "missing title!!";
//}
if (isset($_POST['btn'])) {
} else {
    echo "Please fill !!";
}
$title = $_POST['title'];
$image = $_POST['image'];
$date = $_POST['date'];
$body = $_POST['body'];

//if (isset($_POST['title'], $_POST['date'],$_POST['body'])) {
// Could not get the data that should have been sent.

//exit('Please fill both the username and password fields!');
//}





// echo "Done";
//}else{
//   echo "Missing something";
//}

$sql = "insert into news (title,image,date,body) values('$title','$image','$date','$body')";
$result = $conn->query($sql);
header('Location: ../php/news.php');
