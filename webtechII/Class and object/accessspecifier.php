<?php
class Fruit {
  public $name;
  protected $address;
  private $age;
}

$mango = new Fruit();
echo $mango->name = 'Mango'; // OK
// $mango->$address = 'Jhapa'; // ERROR
// $mango->age = '25'; // ERROR
?> 