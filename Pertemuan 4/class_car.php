<?php

 class Car {
     //hak akses: public, private, protected
     //property
    public $brand;
    public $color;

    function getBrand(){
          return $this->brand;
    }

    function getcolor(){
        return $this->color;
  }
 }

    //object
    $tesla = new Car();
    $supra = new Car();

    // set value /seter
    $tesla->brand ='Tesla';
    echo '<br>';
    $tesla->color ='Hitam';
   
    $supra->brand ='Supra';
    echo '<br>';
    $supra->color ='Putih';

    //echo
    echo $tesla->getBrand();
    echo $tesla->getcolor();;
    echo '<br> <br>';
    echo $supra->getBrand();
    echo $supra->getcolor();


?>