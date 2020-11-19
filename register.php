<?php
function TrimS($str){
    return preg_replace("/\s+/", "", $str);
}
$userName=$_POST['userName'];
$emailId=$_POST['emailId'];
$passWord=$_POST['password'];
$serverName="localhost";
$username="root";
$password="cks3814414";
$dbName="park";
$tableName=TrimS($userName);
$conn=mysqli_connect($serverName,$username,$password,$dbName);
$query1="select * from users";
$result1=mysqli_query($conn,$query1) or die("Query Unsuccessful1");
$id=mysqli_num_rows($result1);
$id++;
mysqli_free_result($result1);
$query2="insert into users values('{$id}','{$userName}','{$emailId}','{$passWord}','{$tableName}')";
$result2=mysqli_query($conn,$query2) or die("Query Unsuccessful2");
$query3="create table {$tableName} (
    Name varchar(50) not null,
    EmailId varchar(50) not null,
    Address varchar(100) not null,
    City varchar(50) not null,
    State varchar(50) not null,
    Zip int unsigned not null,
    Mobile bigint unsigned not null,
    Desired_Location varchar(50) not null,
    Date date not null,
    Time time not null
    )";
$result3=mysqli_query($conn,$query3) or die("Query Unsuccessful3");
header("Location: http://localhost/ParkOnSpot/dashboard.html");
mysqli_close($conn);

?>