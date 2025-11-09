<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Carbon\Carbon;

echo "My first program with composer! <br>" ;
$today = Carbon::now();
echo "<strong>Today is: </strong>" .  $today->format('d/m/Y') . "<br>";
echo "<strong>Current time: </strong>" . $today->format('H:i:s') . "<br>" ;

$tomorrow = $today->addDay();
echo "<strong>Tomorrow is: </strong>" . $tomorrow->format('d/m/Y') . "<br>" ;


$birthday = Carbon::create(2014, 7, 11);
$age = $birthday->age;

echo "If Maggie was born in " . "<strong>" . $birthday->format('d/m/Y') . "</strong>" . " She is " .  "<strong>" .$age . " years old !" ."</strong>" ;
?>