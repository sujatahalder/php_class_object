<?php 
class Car
{
    public $model;
    function __construct($key)
    {
        echo "Welcome to Hyundai show room <br/>";
        $this->model = $key;
        echo "Car model number is $key";
    }

}

$hyundai = new Car("Hyundai grand i10");


?>