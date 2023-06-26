<?php
/**
 * Constants
 */

// First way to define constant : with const
const MAX_GRADE = 20;
echo "The max grade is " . MAX_GRADE . "<br><br>";

// Second way to define constant : with define()
define('MAX_GRADE_' . 2, 25);
echo "The max grade is " . MAX_GRADE_2 . "<br><br>";

if (defined('MAX_GRADE2')) {
  echo "La constante est déjà définie. <br><br>";
} else {
  echo "La constante MAX_GRADE2 n'est pas définie. <br><br>";
}