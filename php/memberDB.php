
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
if(isset($_POST['btn'])){


    
}else{
    echo "Please fill !!";
}
$FName = $_POST['FName'];
$LName = $_POST['LName'];
$phone_no = $_POST['phone_no'];
$email = $_POST['email'];
$position = $_POST['position'];

//if (isset($_POST['title'], $_POST['date'],$_POST['body'])) {
    // Could not get the data that should have been sent.

//exit('Please fill both the username and password fields!');
//}

    #file name with a random number so that similar dont get replaced
    $pname = basename($_FILES["Image"]["name"]);

    #temporary file name to store file
    $tname = $_FILES["Image"]["tmp_name"];

    #upload directory path
    $uploads_dir = '../php/MemberUploads/';

    $targetFilePath = $uploads_dir . $pname;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Allow certain file formats
    $allowTypes = array('jpeg', 'jpg', 'png');
    if (in_array($fileType, $allowTypes)) {

        #TO move the uploaded file to specific location
        move_uploaded_file($tname, $uploads_dir . '/' . $pname);
    }
     

   // echo "Done";
//}else{
 //   echo "Missing something";
//}
$sql="insert into member (FName,LName,Image,phone_no,email,position) values('$FName','$LName','$pname','$phone_no','$email','$position')";
$result = $conn ->query($sql);
header('Location: ../php/memberTable.php');




?> 