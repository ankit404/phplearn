
<?php
    $servername= "localhost";
    $username="root";
    $password="ankitrai@4498";
    $dbname="mywebsite";
//con check
$conn = new mysqli($servername,$username,$password,$dbname);
//check conn
if ($conn->connect){
    die("connection failed :".$conn->connect);
}
echo "Connection established !";
?>