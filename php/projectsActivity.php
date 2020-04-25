<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "cmc";

$conn = mysqli_connect($servername, $username, $password, "$dbname");

if (mysqli_connect_errno()) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    
    $t = $_POST['project'];
    $des = $_POST['desc'];
    $r = $_POST['range'];
    $s = $_POST['state'];

    #file name with a random number so that similar dont get replaced
    $pname = basename($_FILES["descImage"]["name"]);

    #temporary file name to store file
    $tname = $_FILES["descImage"]["tmp_name"];

    #upload directory path
    $uploads_dir = '../php/DescUploads/';

    $targetFilePath = $uploads_dir . $pname;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Allow certain file formats
    $allowTypes = array('jpeg', 'jpg', 'png');
    if (in_array($fileType, $allowTypes)) {

        #TO move the uploaded file to specific location
        move_uploaded_file($tname, $uploads_dir . '/' . $pname);
    }
     

    #file name with a random number so that similar dont get replaced
    $pname2 = basename($_FILES["mapImage"]["name"]);

    #temporary file name to store file
    $tname2 = $_FILES["mapImage"]["tmp_name"];

    #upload directory path
    $uploads_dir2 = '../php/MapUploads/';

    $targetFilePath2 = $uploads_dir2 . $pname2;
    $fileType2 = pathinfo($targetFilePath2, PATHINFO_EXTENSION);

    // Allow certain file formats
    $allowTypes2 = array('jpeg', 'jpg', 'png');
    if (in_array($fileType2, $allowTypes2)) {

        #TO move the uploaded file to specific location
        move_uploaded_file($tname2, $uploads_dir2 . '/' . $pname2);
    }
     

    $insert_text = "INSERT INTO projects_info (title,description,status,area, image, map) VALUES ('$t','$des','$s','$r','$pname', '$pname2')";

    $conn->query($insert_text);

    header('Location:../php/projectTable.php');
            
    exit();  
}

?>