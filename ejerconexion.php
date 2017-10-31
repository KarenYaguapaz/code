<?php

if(!($conn = mysql_connect('servername', 'username', 'password')));
{
    exit();
 }
else {
    mysql_select_db("code",$conn);
    $query = "selct nombre from tabla 1 where id=1";

    $q = mysql_query($query, $conn);

    $result = mysql_result($q, 0);

    echo $result;

}

?>


