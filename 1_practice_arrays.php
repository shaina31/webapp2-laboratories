<?php

//================ SIMPLE ARRAYS ===============//

// Simple Array of Numbers
$numbers = [2,4,6,8,10];
var_dump($numbers);
echo '<br>';

// Simple Array of Strings
$boybands = ['NCT', 'EXO', 'One Direction', 'The Vamps', '5SOS'];
var_dump($boybands);
echo '<br>';

// Outputting Values From an Array
echo $numbers[2];
echo '<br>';
echo $numbers[4] - $numbers[2];
echo '<br>';

// Using print_r or var_dump
var_dump($boybands);
echo '<br>';
print_r($numbers);

//================ ASSOCIATIVE ARRAYS ===============//

// Associative Arrays allow us to use Named Keys to Identify Values
$names = [
    1 => 'Charles',
    2 => 'Marc',
    3 => 'Herve',
    4 => 'Perceval',
    5 => 'Leclerc',
];
echo $names[1];
echo '<br>';

// Strings as Keys
$countries = [
    'Seoul' => 'South Korea',
    'Manila'=> 'Philippines',
    'Osaka' => 'Japan',
    'Monte Carlo' => 'Monaco',
];
echo $countries['Monte Carlo'];
echo '<br>';
var_dump($countries);
echo '<br>';

//================ MULTI-DIMENSIONAL ARRAYS ===============//

// Single Person
$student1 = [
    'first_name' => 'Shaina Karillyn',
    'last_name' => 'Pagarigan',
    'email' => 'shainakarillynpagarigan@student.laverdad.edu.ph',
];

// Array of People
$group = [
        [
            'first_name' => 'Charles Marc Herve',
            'last_name' => 'Leclerc',
            'email' => 'charlesleclerc@student.laverdad.edu.ph',
        ],
        [
            'first_name' => 'Carlos',
            'last_name' => 'Sainz',
            'email' => 'carlossainz@student.laverdad.edu.ph',
        ],
    ];
echo '<pre>';
var_dump($group);
echo '</pre>';

// Acessing the values in a Multi-Dimensional Array
echo $group[0]['first_name'];
echo '<br>';
echo $group[0]['last_name'];
echo '<br>';
echo $group[1]['first_name'];
echo '<br>';
echo $group[1]['last_name'];
echo '<br>';

// Encode to JSON
echo '<pre>';
var_dump(json_encode($group));
echo '</pre>';

// Decode from JSON
$json = '{"first_name":"Shaina Karillyn", "last_name":"Pagarigan","email":"shainakarillynpagarigan@student.laverdad.edu.ph"}';
echo '<pre>';
var_dump(json_decode($json));
echo '</pre>';

?>