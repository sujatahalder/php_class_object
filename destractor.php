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
    function __destruct()
    {
        echo "<br/>Finish the scope of object";
    }

}

$hyundai = new Car("Hyundai grand i10");


?>