
<?php
class Father {
    public $a;

    function  showValue($x){
        $this->a= $x;
        return $this->a;
    
    }

}

class Son extends Father {
    public $b;

    function assignValue($y){
        $this->b = $y;

        echo "Value of A is: $this->a ";
        echo "<br> Value of B is: $this->b ";
    
    
    }
    

}

$obj = new Son;
$obj->showValue(10);
$obj->assignValue(20);



?>