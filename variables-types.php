<?php

declare(strict_types=1);

/**
 * Variables types
 */

echo "Hello world ! <br>";

// Integer
$nombre = 20;
var_dump($nombre);

// String
$chaine = "Ma chaine de caractere";
var_dump($chaine);

echo '<br><br>';

// Float
$reel = 12.4;
var_dump($reel);

echo '<br><br>';

// Array
$fruits = ['apple', 'pineapple', 'carot', 'strawberry'];
var_dump($fruits);

echo '<br><br>';

$favorite_sports = [
  'Junior' => ['Tennis', 'Basketball'],
  'Eric' => ['Volleybal', 'Handball'],
];
var_dump($favorite_sports);

echo '<br><br>';

// Object
class Objet {
  public string $name;
  public int $age;
}
$objet = new Objet();
$objet->name = 'Mon objet';
$objet->age = 12;
var_dump($objet);
echo '<br><br>';

$objet2 = new Objet();
$objet2->name = 'Mon deuxieme objet';
$objet2->age = 10;
var_dump($objet2);

echo '<br><br>';

// null
$null = null;
var_dump($null);