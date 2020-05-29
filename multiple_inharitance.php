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
    public $sum;
    function addition(){
        $this->sum =$this->a + $this->b;
        echo "<br>The value of the addition is: $this->sum";
    }
}
class daughter extends Father{
    public $c;
    public $mult;
    function multiple($x){
        $this->c = $x;
        $this->mult =$this->a * $this->b * $this->c;
        echo "<br>The value of the multiplication is: $this->mult";
    }
}
class wife extends Father{
    public $div;
    function division(){
        $this->div =$this->a / $this->b;
        echo "<br>The value of the division is: $this->div";
    }
}
$objs = new Son;
$objs->getNum(10,20);
$objs->addition();
$objd = new daughter;
$objd->getNum(20,40);
$objd->multiple(30);
$objw = new wife;
$objw->getNum(20,10);
$objw->division();

?>