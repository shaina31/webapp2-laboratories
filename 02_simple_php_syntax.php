<?php


// Task 1 - Variables

$name = "Shaina Karillyn G. Pagarigan";
$age = 20;
$address = "603 Purok 3 San Isidro, Sta. Ana, Pampanga, Philippines";
$hobbies = "Sleeping, Cafe-Hopping";
$pet_peeve = "Mga sobrang maingay magchikahan sa jeep";

echo "Name: $name\n";
echo "Age: $name\n";
echo "Address: $address\n";
echo "Hobbies: $hobbies\n";
echo "Pet Peeve: $pet_peeve\n";


//Task 2 - Single - Line Comment

//echo "Hobbies: $hobbies\n";
//echo "Pet Peeve: $pet_peeve\n";


// Task 3 - Constants

define('NAME', 'Shaina Karillyn G. Pagarigan');
define('AGE', 20);
define('ADDRESS', '603 Purok 3 San Isidro, Sta. Ana, Pampanga, Philippines');
define('HOBBIES', 'Sleeping, Cafe-Hopping');
define('PET_PEEVE', 'Mga sobrang maingay magchikahan sa jeep');

echo "Name: " . NAME . "\n";
echo "Age: " . AGE . "\n";
echo "Address: " . ADDRESS . "\n";
echo "Hobbies: " . HOBBIES . "\n";
echo "Pet Peeve: " . PET_PEEVE . "\n";


// Task 4 - var_dump

var_dump(NAME);
var_dump(AGE);
var_dump(ADDRESS);
var_dump(HOBBIES);
var_dump(PET_PEEVE);


// Task 5 - Multi-line Comment

/* 

The reason why this is my pet peeve because I hate how they have no consideration to 
the peoples surrounding them, some just want a peaceful ride back home but then some would
just blabber loudly disregarding the inconvenience they bring to the other passengers.

*/

?>
