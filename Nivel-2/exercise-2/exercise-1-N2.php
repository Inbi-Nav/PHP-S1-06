<?php
require 'Car.php';

$MyCar = new Car(
    "Toyota",
    "xxxx123", 
    FuelType::Diesel,
    "240"
); 

echo $MyCar;
?>