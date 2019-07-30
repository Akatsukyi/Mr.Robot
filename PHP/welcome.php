<?php



$cars = array("volvex<br>", "volvex<br>", "fox<br>", "toyota<br>\n");
print_r($cars[1]);
if ($cars[0] != $cars[1]) {
    echo 'Diferente';
} else {echo 'Igual';}



echo "<br><br>";


$servername = "localhost";
$username = "root";
$password = "toor";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();

?>