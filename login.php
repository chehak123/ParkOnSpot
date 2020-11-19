<?php
$emailId=$_POST['emailId'];
$passWord=$_POST['pass'];
$serverName="localhost";
$username="root";
$password="cks3814414";
$dbName="park";
$conn=mysqli_connect($serverName,$username,$password,$dbName);
$query1="select Password from users where Email_Id='{$emailId}'";
$result1=mysqli_query($conn,$query1) or die("Query Unsuccessful1");
while($row=mysqli_fetch_assoc($result1)){
    $check=$row['Password'];
}
if($check==$passWord){
    echo "Correct Password";
}
else{
    echo "Incorrect Password";
}
header("Location: http://localhost/ParkOnSpot/dashboard.html");
mysqli_close($conn);

?>