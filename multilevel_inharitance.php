<?php 

class Father 
{
    public $a;
    public $b;
    function getNum($x,$y){
        $this->a = $x;
        $this->b = $y;
        echo "<br>Value of A is: $this->a";
        echo "<br>Value of B is: $this->b";
        return $this->a;
        return $this->b;
    }
}
class Son extends Father{
    public $c;
    function getValue($z){
        $this->c = $z;
        echo "<br>Value of C is: $this->c";
        return $this->c;
    }
}
class Grandson extends Son{
    public $sum;
    function add(){
       $this->sum = $this->a + $this->b + $this->c;
       echo "<br>Total value is:" .$this->sum ;

    }

}

$obj = new Grandson;
$obj->getNum(10,20);
$obj->getValue(25);
$obj->add();
?>