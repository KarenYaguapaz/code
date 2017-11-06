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
// code
//  users

// una selección de datos de la base de dato code
// de la tabla users
// $query='select * from users';



?>

    <table>
    <tr>
        <td>Nombre</td>
        <td>Apellido</td>
    </tr>
    <tr>
        <td>xx</td>
        <td>xx</td>
    </tr>
</table>
