<?php

class Car {
  //properties
  public $name = 'Car name';
  //methods
  public function getCarName(){
    return $this->name.' cR';
  }
  public function setCarName($name){
    return $this->name = $name;
  }
}
//object
$bmw = new Car();
//echo
// $bmw->name = 'BMW Car';
// echo $bmw->getCarName();

//2 object

$nisan = new Car();
$nisan->name = 'Nisan Car';
$nisan->setCarName('Nisan var name');
echo $nisan->getCarName();
?>