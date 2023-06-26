<?php

/**
 * Loops structure in PHP
 */

echo "Exemple avec for <br><br>";

/**
 * For
 */
for ($i=1; $i <= 10; $i += 2) { 
  echo "Le but $i <br><br>";
}

echo '<br><br>';

echo "Exemple avec while <br><br>";
/**
 * While
 */
$i = 1;
while($i <= 10) {
  echo "Le but $i <br><br>";
  $i ++;
}

echo '<br><br>';

echo "Exemple avec do...while <br><br>";
/**
 * Do ... while
 */
$i = 1;
do {
  echo "Le but $i <br><br>";
  $i ++;
}while($i <= 10);

echo '<br><br>';

echo "Exemple avec foreach <br><br>";
/**
 * Foreach
 */
$fruit = [1 => 'banana', 2 => 'apple', 3 => 'peach', 4 => 'tomato', 5 => 'strawberry'];
foreach ($fruit as $key => $value) {
  echo "$key . $value <br>";
}

echo '<br><br>';

/**
 * continue and break
 */
$inputs = [
  1 => [1,2,3,4], 
  2 => 'banana', 
  3 => ['apple'], 
  4 => 3
];

foreach ($inputs as $key => $value) {
  if (!is_array($value)) {
    continue;
  }

  print_r($value);
  echo '<br>';
}


