<?php

$id=1;
$userName=$_POST['userName'];
$emailId=$_POST['emailId'];
$passWord=$_POST['password'];


$serverName="localhost";
$username="root";
$password="cks3814414";
$dbName="park";

$conn=mysqli_connect($serverName,$username,$password,$dbName);
$query="insert into users values('{$id}','{$userName}','{$emailId}','{$passWord}')";
$result=mysqli_query($conn,$query) or die("Query Unsuccessful");
if ($result) {
    $id++;    
}

header("Location: http://localhost/ParkOnSpot/dashboard.html");

mysqli_close($conn);

?>