<html>
    <head>
        <title>Conexion</title>
    </head>
    <body>
<?php
    $conn = mysql_connect ('192.168.10.10', 'root', 'secret');
    mysql_select_db("code", $con) or dir ("no se pudo conectar a la base de datos");
?>
<table>
    <tr>
            <td colspan = "2">NOMBRES</td>
    </tr>
    <tr>
        <td>Nombre</td>
        <td>Apellido</td>
    </tr>
    <?php
    $result = mysql_querry("select * from users");
    while ($row = mysql_fetch_array($result)); {?>
        <tr>
            <td><?php echo $row["id"];?></td>
            <td><?php echo $row["name"];?></td>
            <td><?php echo $row["lastname"];?></td>
        </tr>
    <?php
    }
    ?>
    ?>
</table>
    </body>
</html>


