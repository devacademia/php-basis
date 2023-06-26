<?php
// Enable errors display
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

//
// Variables scope
//

// Global
$multiplier = 4;

/**
 * Local
 */
function sayHello($name) {
  $greetings = "Hello $name ! How are you doing ?";
  echo $greetings . '<br><br>';
}
sayHello('Silevester');

// Trying accessing $greetings outside this function return a warning
// echo $greetings;

// Accessing global variable with $GLOBALS
function multiply($input) {
  $GLOBALS['test_var'] = 10;
  return $input * $GLOBALS['multiplier'];
}

echo "Le resultat est " . multiply(2) . '<br><br>';
echo $test_var . '<br><br>';

/**
 * Static
 */
class MyClass {
  public static string $name = "Silevester";
}

echo MyClass::$name;