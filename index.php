<h1>test</h1>
<?php
function generar($l)
{
    $c= "abcdefghijklmnopqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    $s= "";
    for($i = 0; $i < $l; $i++)
    {
        $s .= $c[rand(0,strlen($c)-1)];
    }
    return $s;
}
 echo generar(16);
?>