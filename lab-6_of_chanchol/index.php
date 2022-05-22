<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "students form";


$conn =mysqli_students form($servername, $username, $password, $dbname);

if ($con) {
  echo 'Connection successfully to students form database';
}


$sql = "insert into Students form ( First Name, last Name, Student ID, Reg Date) values ('Md.Shihab','Parves',2676,06-04-2022)";
$query=mysqli_students($con,$sql);

if ($query) {
  echo "Data inserted successfully";
} else {
  echo "Data inserted failled";
}

$conn->close();
?>

</body>
</html>