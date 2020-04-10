
<!DOCTYPE html>

<html>

<head>
<title>Page Title</title>

</head>
<body>


<?php
include ('../member/connect.php');
$FName = $_POST['FName'];
$LName = $_POST['LName'];
$Image = $_POST['Image'];
$phone_no = $_POST['phone_no'];
$Email = $_POST['Email'];
$Position = $_POST['Position'];
$sql="insert into member_info (FName,LName,Image,phone_no,Email,Position) values('$FName','$LName','$Image','$phone_no','$Email','$Position')";
$result = $conn ->query($sql);
header('Location:http://localhost:8080/member/member.php')







?> 




</body>
</html>