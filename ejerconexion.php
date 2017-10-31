<?php

$servername = "192.168.10.10";
$username = "homestead";
$password = "secret";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>

<?php
    $conn = mysql_connect('servername', 'username', 'password');
    $queryStr = 'SELECT * FROM code.users';
    $query = mysql_query($queryStr);
    $resultado = mysql_fetch_row($query);
    mysql_close($conect);

print_r($resultado);
?>


