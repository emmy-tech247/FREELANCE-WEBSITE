<!-- Database Connection (db.php)-->
<?php
$host = "localhost"; // Change if necessary
$user = "root"; // MySQL username
$pass = "theophilus "; // MySQL password
$dbname = "user_system"; // Database name

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
