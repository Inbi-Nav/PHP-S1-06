<?php
require 'Fuel.php';
require 'Turbo.php';

class Car {
    use Turbo;
    public function __construct (
    public $brand,
    public $licensePlate,
    public $fuelType,
    public $maxVelocity
    ){}
    public function __toString(){
    return "{$this->brand}, <br> {$this->licensePlate}, <br> {$this->fuelType->name}, <br>{$this->maxVelocity}";
    }


}
?>