<?php

//================ ARRAY FUNCTIONS ===============//

// FUNCTIONS TO WORK WITH ARRAYS
$raceSeries = ['Formula 1', 'Nascar', 'IndyCar', 'MotoGP'];
echo '<pre>';
var_dump($raceSeries);
echo '</pre>';

// GET ARRAY LENGTH
echo count($raceSeries);
echo '<br>';

// SEARCH ARRAY
echo in_array('Formula 1', $raceSeries);
echo '<br>';
var_dump(in_array('Formula 2', $raceSeries));
echo '<br>';

// ADD TO AN ARRAY
$kdrama[] = 'Lovely Runner';
array_push($kdrama, 'Business Proposal', 'Memorist', 'Atypical Family');
echo '<pre>';
var_dump($kdrama);
echo '</pre>';

// ADDS TO THE BEGINNING
array_unshift($kdrama, 'Sweet Home 2');
echo '<pre>';
var_dump($kdrama);
echo '</pre>';

// REMOVE FROM AN ARRAY - REMOVES LAST
array_pop($kdrama);
echo '<pre>';
var_dump($kdrama);
echo '</pre>';

// REMOVE FROM AN ARRAY - REMOVES FIRST
array_shift($kdrama);
echo '<pre>';
var_dump($kdrama);
echo '</pre>';

// REMOVE SPECIFIC ELEMENT
unset($kdrama[0]);
echo '<pre>';
var_dump($kdrama);
echo '</pre>';

// SPLIT INTO CHUNKS OF TWO
$chunking = array_chunk($kdrama, 2);
echo '<pre>';
var_dump($chunking);
echo '</pre>';

// CONCATENATE ARRAYS
$array_1 = [1,3,5,7,9];
$array_2 = [2,4,6,8,10];
$array_3 = array_merge($array_1, $array_2);
echo '<pre>';
var_dump($array_3);
echo '</pre>';

// USE SPREAD
$array_4 = [...$array_1, ...$array_2];
echo '<pre>';
var_dump($array_4);
echo '</pre>';

// COMBINE ARRAYS (KEYS AND VALUES)
$one = ['Yuta', 'Sicheng', 'Jaehyun'];
$two = ['Taeyong', 'Jaemin', 'Sungchan'];
$three = array_combine($one, $two);
echo '<pre>';
var_dump($three);
echo '</pre>';

// ARRAY OF KEYS
$key = array_keys($three);
echo '<pre>';
var_dump($key);
echo '</pre>';

// FLIPPED KEYS WITH VALUES
$flip = array_flip($three);
echo '<pre>';
var_dump($flip);
echo '</pre>';

// CREATE ARRAY OF NUMBERS WITH RANGE 
$nums = range(1, 25);
echo '<pre>';
var_dump($nums);
echo '</pre>';

// MAP THROUGH ARRAY AND CREATE A NEW ONE
$newNum = array_map(function($num){
    return "Number: {$num}";
}, $nums);
echo '<pre>';
var_dump($newNum);
echo '</pre>';

// FILTER ARRAY
$moreThan20 = array_filter($nums, fn($num) => $num > 20);
echo '<pre>';
var_dump($moreThan20);
echo '</pre>';

// ARRAY REDUCE
// "carry" holds the return value of the previous iteration
$result = array_reduce($nums, fn($carry, $num) => $carry + $num);
var_dump($result);

?>