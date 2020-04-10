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

$conn = new mysqli("localhost", "root", "");
$conn->select_db("cmc");

$insert_text ="INSERT project_info (title, description, status, area) VALUES ('$_POST[project]','$_POST[desc]','$_POST[state]','$_POST[range]')"
conn->query($insert_text);

$_file = basename( $_FILES["descImage"]["name"]);
$directory = "../assets/Uploads_descImg/";
    
$insert_img = "INSERT INTO projects_info (image) VALUES ('".$directory. $_file."')"; //directory where the file is going to be placed
$conn->query($insert_img);
$target_file = $directory . basename($_FILES["descImage"]["name"]); //path of the file to be uploaded
$uploadOk = 1;
$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); //holds the file extension of the file 

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["insert_img"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["insert_img"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
// Check file size
if ($_FILES["insert_img"]["size"] > 500000) {
    echo "Sorry, your file is too large."; 
    $uploadOk = 0;

    $_file2 = basename( $_FILES2["mapImage"]["name"]);
    $directory2 = "../assets/Uploads_mapImg/";
        
    $insert_map = "INSERT INTO projects_info (map) VALUES ('".$directory2. $_file2."')"; //directory where the file is going to be placed
    $conn->query($insert_map);
    $target_file = $directory2 . basename($_FILES2["mapImage"]["name"]); //path of the file to be uploaded
    $uploadOk2 = 1;
    $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); //holds the file extension of the file 
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk2 == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES2["insert_map"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES2["insert_map"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    // Check file size
    if ($_FILES2["insert_map"]["size"] > 500000) {
        echo "Sorry, your file is too large."; 
        $uploadOk2 = 0;    

?>