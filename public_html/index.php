<h1>It works!</h1>
<?php
$version = phpversion();
print "PHP version: ". $version;

$host = 'mysql';
$user = 'root';
$pass = 'rootpassword';
$conn = new mysqli($host, $user, $pass);

// Create connection
$conn = new mysqli("localhost", $user, $pass);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";