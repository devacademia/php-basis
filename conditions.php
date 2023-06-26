<?php

/**
 * If condition
 */

$age = 50;
if ($age <= 12) {
  echo "Enfant <br><br>";
} else if($age < 16) {
  echo "Adolescant <br><br>";
} else if($age < 32) {
  echo "Adulte <br><br>";
} else {
  echo "Viellard <br><br>";
}

$meal = 'banana';

switch ($meal) {
  case 'rice':
    echo "Healthty ! <br><br>";
    break;
  
  case 'break':
    echo "Bad meal ! <br><br>";
    break;

  default:
    echo "I don't know <br><br>";
    break;
}