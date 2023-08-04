<?php
error_reporting(0);
include("connection.php");


$email = $_POST["email"];
$password = $_POST["password"];
$address = $_POST["address"];
$address2 = $_POST["address2"];
$city = $_POST["city"];
$district = $_POST["district"];
$zip = $_POST["zip"];


$sql = "INSERT INTO register(email, password, address, address2, city, district, zip) values('$email','$password','$address','$address2','city','$district','$zip')";

$insert= mysqli_query($connect, $sql);
if($insert)
{
    echo"
    <script>
    alert('registration');    
    </script>


    
    ";
}
else{
    echo"
    <script>
    alert('registration not ');    
    </script>


    
    "; 
}

?>