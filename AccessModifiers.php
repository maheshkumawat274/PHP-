<?php
class Car{
// 3types of access modifiers- public protected, private

//properrties...
//   public $name = 'Car name';
//   protected $model = 'Car-x';
//   private $color ='red';

//methods...

  public function publicMethod(){
    echo 'this is public method';
  }
  protected function ProtectedMethod(){
    echo 'this is protected method';
    
  }
  private function PrivateMethod(){
    echo 'this is private method';
    
  }
  public function Privatemethodvalue(){
    $this->PrivateMethod();
  }

//   public function detail(){
//     echo $this->name . '<br/>';
//     echo $this->model . '<br/>';
//     echo $this->color . '<br/>';
//   }
}
 $bmw = new Car();
 $bmw->publicMethod();
 $bmw->Privatemethodvalue();
// $bmw->name = 'mahewhsh';
// $bmw->detail();
?>