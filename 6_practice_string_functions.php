<?php

//================ STRING FUNCTIONS ===============//

// FUNCTIONS TO WORK WITH STRINGS
$commentary = 'Its lights out and away we go!';

// GET THE LENGTH OF A STRING
echo strlen($commentary);
echo '<br>';

// FIND THE POSITION OF THE FIRST OCCURENCE OF A SUBSTRING IN A STRING
echo strpos($commentary, 'a');
echo '<br>';

// FIND THE POSITION OF THE LAST OCCURENCE OF A SUBSTRING IN A STRING
echo strrpos($commentary, 'g');
echo '<br>';

// REVERSE A STRING
echo strrev($commentary);
echo '<br>';

// CONVERT ALL CHARACTERS TO LOWERCASE
echo strtolower($commentary);
echo '<br>';

// CONVERT ALL CHARACTERS TO UPPERCASE
echo strtoupper($commentary);
echo '<br>';

// UPPERCASE THE FIRST CHARACTER OF EACH WORD
echo ucwords($commentary);
echo '<br>';

// STRING REPLACE
echo str_replace('out', 'off', $commentary);
echo '<br>';

// RETURN PORTION OF A STRING SPECIFIED BY THE OFFSET AND LENGTH
echo substr($commentary, 11, 15);
echo '<br>';

echo substr($commentary, 11);
echo '<br>';

// STARTS WITH
if (str_starts_with($commentary, 'lights')) {
    echo 'YES!';
} else {
    echo 'NO!';
}
echo '<br>';

// ENDS WITH
if (str_ends_with($commentary, 'go!')) {
    echo 'YES!';
} else {
    echo 'NO!';
}
echo '<br>';

// HTML ENTITIES
$commentary2 = '<h1>Its lights out and away we go!</h1>';
echo htmlentities($commentary2);
echo '<br>';

// FORMATTED STRINGS

// Different specifiers for different data types
// %% - Returns a percent sign
// %b - Binary number
// %c - The character according to the ASCII value
// %d - Signed decimal number (negative, zero or positive)
// %e - Scientific notation using a lowercase (e.g. 1.2e+2)
// %E - Scientific notation using a uppercase (e.g. 1.2E+2)
// %u - Unsigned decimal number (equal to or greater than zero)
// %f - Floating-point number (local settings aware)
// %F - Floating-point number (not local settings aware)
// %g - shorter of %e and %f
// %G - shorter of %E and %f
// %o - Octal number
// %s - String
// %x - Hexadecimal number (lowercase letters)
// %X - Hexadecimal number (uppercase letters)

printf('%s is a %s', 'Shaina', 'student');
echo '<br>';
printf('2 + 2 = %f', 2 + 2);

?>