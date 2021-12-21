<?php
$servername="localhost";
$username="root";
$password="";
$database="test";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con)
{
    die("error detected".mysqli_error($conn));
}
else
{
    echo"connection successfully...";
}
?>

