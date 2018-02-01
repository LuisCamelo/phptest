<?php
$servername = "localhost";
$username = "root";
$password = "camelo";

// Create connection
$conn = new mysqli($servername, $username, $password,"mydb");

/* // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

try {
    $conn = new PDO("mysql:host=$servername;dbname=mydb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    } */


$sql = "SELECT name, surname FROM passenger";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  " Name: " . $row["name"]. " " . $row["surname"]. "<br>";
    }
} else {
    echo "0 results";
}


?>