<?php

//================ LOOPS AND ITERATION ===============//

//================ FOR LOOP ===============//

// FOR LOOP SYNTAX
for ($s = 0; $s <= 20; $s++) {
    echo "No.: $s <br>";
};
echo '<br>';

//================ WHILE LOOP ===============//

// WHILE LOOP SYNTAX
$k = 3;

while ($k <= 31) {
    echo "No. $k <br>";
    $k++;
};
echo '<br>';

//================ DO WHILE LOOP ===============//

// DO WHILE LOOP SYNTAX
$g = 1;

do {
    echo "No. $g <br>";
    $g++;
} while ($g <= 6);
echo '<br>';

//================ FOREACH LOOP ===============//

// FOREACH LOOP SYNTAX

// LOOP THROUGH AN ARRAY
$numbers = [25,26,27,28,29,30,31];

foreach ($numbers as $p) {
    echo "No. $p <br>";
};
echo '<br>';

// USE THE INDEXES WITHIN A LOOP
$feed = ['Feed 1', 'Feed 2', 'Feed 3'];

    foreach ($feed as $post => $like) {
        echo "{$post} - {$like} <br>";
};
echo '<br>';

// USE THE KEYS WITHIN THE LOOP FOR AN ASSOCIATIVE ARRAY
$individual = [
    'first_name' => 'Shaina Karillyn',
    'last_name' => 'Pagarigan',
    'email' => 'shainakarillynpagarigan@student.laverdad.edu.ph',
];

// GET KEYS
foreach ($individual as $key => $value) {
    echo "{$key} - {$value} <br>";
};

?>