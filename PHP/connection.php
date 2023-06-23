<?php
$servername="localhost";
$username="u682203639_root";
$password="Imparta@123";
$dbName = "u682203639_sk";
// connecting to the database
$conn = mysqli_connect($servername,$username,$password,$dbName);
if($conn){
    echo("DB Is Connected SuccessFully..");
}
?>