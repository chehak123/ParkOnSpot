<?php


$Name=$_POST['Name'];
$emailId=$_POST['Email'];
$Address=$_POST['Address'];
$City=$_POST['City'];
$State=$_POST['State'];
$Zip=$_POST['Zip'];
$Mobile=$_POST['Mobile'];
// if(isset($_POST['Mobile'])){
//     $Mobile=$_POST['Mobile']; 
// }else{
//     $Mobile=0000000000;
// }
$uPass=$_POST['uPass'];
// if(isset($_POST['uPass'])){
//     $uPass=$_POST['uPass'];
// }else{
//     $uPass=$_POST['uPass'];
// }
$DesiredL=$_POST['DesiredLocation'];
$Date=$_POST['Date'];
$Time=$_POST['Time'];
$serverName="localhost";
$username="root";
$password="cks3814414";
$dbName="park";

$conn=mysqli_connect($serverName,$username,$password,$dbName);
$query1="select Table_Name from users where Password='{$uPass}'";
$result1=mysqli_query($conn,$query1) or die("Query Unsuccessful1");
while($row=mysqli_fetch_row($result1)){
    $tableName=$row['Table_Name'];
}
mysqli_free_result($result1);
$query2="insert into {$tableName} values
    (
        '{$Name}',
        '{$emailId}',
        '{$Address}',
        '{$City}',
        '{$State}',
        '{$Zip}',
        '{$Mobile}',
        '{$DesiredL}',
        '{$Date}',
        '{$Time}'
    )";
$result2=mysqli_query($conn,$query2) or die("Query Unsuccessful2");
mysqli_close($conn);

?>