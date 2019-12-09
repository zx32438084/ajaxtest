<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dataform";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO message (name, txt, ) VALUES ('". $_POST["name"]."', '".$_POST["txt"]."')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
 ?>