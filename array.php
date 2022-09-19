<?php

/* PHP ARRAY */

//What is an Array?
#An array is a special variable, which can hold more than one value at a time.

//Create an Array in PHP
/* 
In PHP, the array() function is used to create an array:

array();
In PHP, there are three types of arrays:

Indexed arrays - Arrays with a numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays
*/

//Get The Length of an Array - The count() Function

$name = array('Jean', 'Bosco', 'Mugiraneza');
echo count($name); //output 3

// array
$code = ['PHP', 'Java', 'Python'];
echo '<pre>';
print_r($code);
echo '</pre>';

//How to add new item in an array
$code[] = 'C++';
echo '<pre>';
print_r($code);
echo '</pre>';

array_push($code, 'Go', 'C', 'Js');
echo '<pre>';
print_r($code);
echo '</pre>';


/* PHP Indexed Arrays */

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

/* Loop Through an Indexed Array */
echo '<br>';
echo '<br>';
$cars = array("Toyota", "BMW", "Mercedes Benz", "Vokswagen");
$arrlength = count($cars);

for ($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo '<br>';
}

/* PHP Associative Arrays */
//Associative arrays are arrays that use named keys that you assign to them.
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43", "Jean" => "22");
echo '<br>';
echo "Peter is " . $age['Peter'] . " years old.";
echo '<br>';
echo "Jean is " . $age['Jean'] . " years old";
echo '<br>';

/*  Loop Through an Associative Array*/
echo "<br>";
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
