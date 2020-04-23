<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "cmc";

$conn = mysqli_connect($servername, $username, $password, "$dbname");
if (!$conn) {
    die('Could not Connect MySql Server:' . mysql_error());
}
if (isset($_POST['submit'])) {
    $t = $_POST['project'];
    $des = $_POST['desc'];
    $r = $_POST['range'];
    $s = $_POST['state'];

    $insert_text = "INSERT INTO projects_info (title,description,status,area) VALUES ('$t','$des','$s','$r')";

    if (mysqli_query($conn, $insert_text)) {
        echo "New record has been added successfully !";
    } else {
        echo "Error: " . $insert_text . ":-" . mysqli_error($conn);
    }

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

        #sql query to insert into database
        $sql = "INSERT into projects_info(image) VALUES('$pname')";

        if (mysqli_query($conn, $sql)) {
            echo "Description Image Sucessfully uploaded";
        } else {
            echo "Error";
        }
    } else {
        echo "Wrong File Format! Please upload either .pdf or .zip or .rar files";
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

        #sql query to insert into database
        $sql2 = "INSERT into projects_info(map) VALUES('$pname2')";

        if (mysqli_query($conn, $sql2)) {
            echo "Map Image Sucessfully uploaded";
            header('Location: ../php/projectTable.php');
        } else {
            echo "Error";
        }
    } else {
        echo "Wrong File Format! Please upload either .jpeg or .jpg or .png files";
    }
}
