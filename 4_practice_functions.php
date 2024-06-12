<?php

//================ FUNCTIONS ===============//

// FUNCTION SYNTAX

function loginPlayer()
{
    echo 'Player has logged in!';
}

// RUNNING A FUNCTION
loginPlayer();

// ADDING PARAMS
function loginPlayer2($playerName)
{
    echo "Player {$playerName} has logged in!";
}
echo '<br>';

// PASS IN AN ARGUMENT
loginPlayer2('Shaina');
echo '<br>';

// RETURNING VALUES
function subtract($n1, $n2)
{
    return $n1 - $n2;
}

$difference = subtract (16, 5);
echo "Difference: {$difference}";
echo '<br>';

// ADDING DEFAULT VALUES
function add($n3 = 31, $n4 = 19)
{
    return $n3 + $n4;
}

$sum = add();
echo "Sum: {$sum}";
echo '<br>';

// ASSIGNING ANONYMOUS FUNCTIONS TO VARIABLES, OFTEN USED FOR CLOSURES OR CALLBACKS
$multiply = function($n5, $n6)
{
    return $n5 * $n6;
};

$product = $multiply(9, 5);
echo "Product: {$product}";
echo '<br>';

// ARROW FUNCTIONS
$divide = fn($n7, $n8) => $n7 / $n8;

$quotient = $divide(30, 5);
echo "Quotient: {$quotient}";

?>