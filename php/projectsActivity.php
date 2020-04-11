<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "cmc";

$conn=mysqli_connect($servername,$username,$password,"$dbname");
  if(!$conn){
      die('Could not Connect MySql Server:' .mysql_error());
    }
if(isset($_POST['submit']))
    {  
        $t = $_POST['project'];
        $des = $_POST['desc'];
        $r = $_POST['range'];
        $s = $_POST['state'];

        $insert_text="INSERT INTO projects_info (title,description,status,area) VALUES ('$t','$des','$s','$r')";
        
        if (mysqli_query($conn, $insert_text)) {
            echo "New record has been added successfully !";
         } else {
            echo "Error: " . $insert_text . ":-" . mysqli_error($conn);
        }

        if (isset($_FILES["descImage"]) && $_FILES["descImage"]["error"] == 0) { 

            $_file = basename( $_FILES["descImage"]["name"]);
            $directory = "../php/DescUploads/";
    
            $file_name = $_FILES["descImage"]["name"]; 
            $file_tmp_name = $_FILES["descImage"]["tmp_name"];

            $conn->query($file_name);
            $target_file = $directory . basename($_FILES["descImage"]["name"]); //path of the file to be uploaded
    
            $uploadOk = 1;
            $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); //holds the file extension of the file 
    
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES['descImage']['tmp_name'], $target_file)) {
                    echo "The file ". basename( $_FILES["descImage"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your description image.";
                 }
                }
        }else{
            echo "error finding the image"; 
        }
        
        if (isset($_FILES["mapImage"]) && $_FILES["mapImage"]["error"] == 0) {  

           $_file2 = basename( $_FILES["mapImage"]["name"]);
            $directory2 = "../php/MapUploads/";
    
            $file_name2 = $_FILES["mapImage"]["name"]; 
            $file_tmp_name2 = $_FILES["mapImage"]["tmp_name"];

            $conn->query($file_name2);
            $target_file2 = $directory2 . basename($_FILES["mapImage"]["name"]); //path of the file to be uploaded
    
            $uploadOk2 = 1;
            $FileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION)); //holds the file extension of the file 
    
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["mapImage"]["tmp_name"], $target_file2)) {
                    echo "The file ". basename( $_FILES["mapImage"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your description image.";
                 }
                }
        }else{
            echo "error finding the image"; 
        }
    }        
?>