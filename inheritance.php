<?php

class Car{
  //properties
  public $name;
  Protected $model;
  private $color;

  public function __construct($name, $model, $color){
    $this->name = $name;
    $this->model = $model;
    $this->color = $color;
  }

  public function enginePower(){
    echo 'Diesel';
  }

  public function detail(){
    echo $this->owername. '<br/>';
    echo $this->name. '<br/>';
    echo $this->model. '<br/>';
    echo $this->color. '<br/>';
    
  }
}
class Tesla extends Car{

  public $ownername;
  public function __construct($ownername, $name, $model, $color){
    $this->owername = $ownername;
    $this->name = $name;
    $this->model = $model;
    $this->color = $color;
  }

  public function enginePower(){
    echo 'electric';
  }
}
$res = new Tesla('Mahesh', 'BMW','2018','RED');
$res->detail();

?>