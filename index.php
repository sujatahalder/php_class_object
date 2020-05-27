<?php 
 class Mobile
 {
     public $model;
     function showModel($num){
         $this->model = $num;
         echo "Model number is $num";
     }
    
 } 

 $samsung = new Mobile;
 $samsung->model;
 $samsung->showModel("A8");



?>