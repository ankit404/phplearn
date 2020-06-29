<?php
$servername="localhost";
$username="root";
$password="ankitrai@4498";
$dbname="mywebsite";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Error in connection:").$conn->connect_error;
}
$id =$_GET["id"];

$sql = "SELECT * From users where id='$id' ";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row =$result->fetch_assoc()){
        $fname=$row["firstname"];
        $lname=$row["lastname"];
        $email=$row["email"];
    }
}else{
    echo "0 results";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <form action="updateuser.php" method="post">
    <table width="300" border="0" cellspacing="1" cellpadding="1">
    <tr>
    <td>First name:</td>
    <td><input type="text" name="fname" value="<?php echo $fname; ?>"></td>
    </tr>
    <tr>
    <td>Last name:</td>
    <td><input type="text" name="lname" value="<?php echo $lname; ?>"></td>
    </tr>
    <tr>
    <td>Email:</td>
    <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="" value="update"></td>
    </tr>
    
    </table>
    <input type="hidden" name="id" value="<?php echo $id ?>">
    </form>
</body>
</html>

<?php $conn->close() ?>