<?php
/* Data Types & Type Casting */
## 4 Scalar Types
# bool --> True or False
$completed = true;
# int --> 1,2,3, 0,-5 (no decimal)
$score = 75;
#float --> 1.5, 0.1, 0.005, -15.9
$price = 0.99;
#string --> "Jean", "Hello World"
$greeting = 'Hello Jean';

echo $completed . '<br>';
echo $score . '<br>';
echo $price . '<br>';
echo $greeting . '<br>';

echo '<br>';

echo gettype($completed) . '<br>';
echo gettype($score) . '<br>';
echo gettype($price) . '<br>';
echo gettype($greeting) . '<br>';

echo '<br>';

var_dump($completed);
echo '<br>';
var_dump($score);
echo '<br>';
var_dump($price);
echo '<br>';
var_dump($greeting);
echo '<br>';

echo '<br>';
## 4 Compound Types
#array
$companies = [1, 2, 3, 0.5, -9.2, 'A', 'b', true];
/*echo $companies;*/
print_r($companies);
 #object
 #collable
 #iterable

// 2 Special Types
 // resource
// null
