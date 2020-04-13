<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "cmc";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die('Could not Connect MySql Server:' . mysql_error());
}
if (isset($_POST['submit'])) {
    $FName = $_POST['FName'];
    $LName = $_POST['LName'];
    $phone_no = $_POST['phone_no'];
    $email = $_POST['email'];
    $position = $_POST['position'];
  
    

    $insert_text = "INSERT INTO member (FName,LName,phone_no,email,position) VALUES ('$FName','$LName','$phone_no','$email','$position')";

    if (mysqli_query($conn, $insert_text)) {
        echo "New record has been added successfully !";
    } else {
        echo "Error: " . $insert_text . ":-" . mysqli_error($conn);
    }

    #file name with a random number so that similar dont get replaced
    $pname = basename($_FILES["Image"]["name"]);

    #temporary file name to store file
    $tname = $_FILES["Image"]["tmp_name"];

    #upload directory path
    $uploads_dir = '../php/DescUploads/';

    $targetFilePath = $uploads_dir . $pname;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Allow certain file formats
    $allowTypes = array('jpeg', 'jpg', 'png');
    if (in_array($fileType, $allowTypes)) {

        #TO move the uploaded file to specific location
        move_uploaded_file($tname, $uploads_dir . '/' . $pname);

        #sql query to insert into database
        $sql = "INSERT into member(image) VALUES('$pname')";

        if (mysqli_query($conn, $sql)) {
            echo "Description Image Sucessfully uploaded";
            header('Location: ../php/member.php');
        } else {
            echo "Error";
        }
    } else {
        echo "Wrong File Format! Please upload either .pdf or .zip or .rar files";
    }

   
    
}