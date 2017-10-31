<?php
$jugos = array("manzana", "naranja", "koolaid1" => "purpura");

echo "el tomó algo de jugo de $jugos[0].".PHP_EOL;
echo "el tomó algo de jugo de $jugos[1].".PHP_EOL;
echo "el tomó algo de jugo $jugos[koolaid1].".PHP_EOL;


class persona {
    public $john = "John Smith";
    public $jane = "Jane Smith";
    public $robert = "Robert Paulsen";

    public $smith = "Smith";
}

$persona =new persona();

echo "$persona - >john tomó algo de jugo de $jugos[0].".PHP_EOL;
echo "$persona - >john entonces dijo hola a $persona- >jane.".PHP_EOL;
?>
