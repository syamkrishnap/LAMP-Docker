 <?php
$servername = "172.18.0.2";
$username = "emailuser";
$password = "emailpwd";


// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
