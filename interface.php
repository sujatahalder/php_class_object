<?php 
interface Father {
    const a= 101;
    public function disp();
}
interface Mother {
    const b= 102;
    public function getValue();
}
interface uncle extends Mother {
    const c= 103;
    public function add();
}
class Son implements Father , Mother {
    public function disp(){
        echo Father ::a;
        echo "<br/>";
    }
    public function getValue(){
        echo Mother ::b;
        echo "<br/>";
    }
    public function add(){
        echo (Mother ::b + Uncle ::c );
        echo "<br/>";

    }

}
$obj = new Son;
$obj->disp();
$obj->getValue();
$obj->add();



?>