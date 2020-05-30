<?php 

abstract class Father {
    function disp(){
        echo "welcome to new world";
    }
    abstract function dispname();
}
class Son extends Father{
   public function dispname()
   {
       echo "<br>sujata";
   }

}
$obj = new Son;
$obj->disp();
$obj->dispname();

?>