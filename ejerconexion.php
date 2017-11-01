<?php

 }
else {
    mysql_select_db("code",$conn);
    $query = "selct nombre from tabla 1 where id=1";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = 'SELECT  emp_id, emp_name, emp_lastname FROM employee';
$mysql_select_db('test_db');
$retval = mysql_query ( $sql, $conn );

if(! $retval ) {
   die('Could not get data: ' . mysql_error());
}

while($row = mysql_fetch_assoc($retval)) {
    echo  "EMP ID : {$row['emp_id']} <br> ".
        "EMP USERNAME : {$row['emp_username']} <br> ".
        "EMP LASTNAME : {$row['emp_lastname']} <br> ".
        "--------------------------------<br>";
}
echo "Fetched data successfully\n";

mysql_clase($conn);

?>