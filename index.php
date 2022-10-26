<?php

require_once __DIR__ . '/profile.php';
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/toys.php';
require_once __DIR__ . '/food.php';
require_once __DIR__ . '/dog_bed.php';

$avatar = new User ('Mark','Lenders',true,'6547534',2024);

echo "<pre>";
var_dump($avatar);
echo "</pre>";

$dog_bed = new Dog_bed(80,'small',30,00002345,'dog');
echo "<pre>";
var_dump($dog_bed);
echo "</pre>";

$avatar-> AddToCart($dog_bed);

echo "<pre>";
var_dump($avatar);
echo "</pre>";



?>