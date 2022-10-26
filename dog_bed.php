<?php

require_once __DIR__ . '/Product.php';

class Dog_bed extends Product{
    public $height;
    public $size;


    function __construct($_height,$_size,$_price, $_code, $_repart){
    parent::__construct($_price, $_code, $_repart);
    $this-> height = $_height;
    $this-> size = $_size;
 }
}



?>