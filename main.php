<?php

require_once('autoload.php');

$student = new Object\Human\Student('John', 20, 'A');
$car = new Object\Technics\Transport\Car('Toyota', 'Camry', 2020);
$tv = new Object\Technics\Tv('Samsung', 'Smart TV', 2020);

foreach($student as $key => $value) {
  echo $key . ': ' . $value . PHP_EOL;
}

foreach($car as $key => $value) {
  echo $key . ': ' . $value . PHP_EOL;
}

foreach($tv as $key => $value) {
  echo $key . ': ' . $value . PHP_EOL;
}