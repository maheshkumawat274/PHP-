<?php
 class Car{
  public $name;
  public $color;
  public function __construct($car_name,$color='buhgugugjbk <br/>') {
    $this->name = $car_name;
    $this->color = $color;
    echo 'inside the constructor <br/>';
}
  public function getCarName(){
    return $this->name. ' <br/> '. $this-> color;
  }
  public function __destruct(){
    echo('kaam ktm hua <br/>');
    
  }
 
 }
 $bmw=new Car('bnjnjh');
 echo 'object is created <br/>';
 echo $bmw->getCarName();
?>