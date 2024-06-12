<?php

//================ CONDITIONALS AND OPERATORS ===============//

//================ IF STATEMENTS ===============//

// IF STATEMENT SYNTAX
$age = 21;

if($age >= 20){
    echo 'You are old enough to get a drivers license!';
} else {
    echo 'You are not eligible to get a non-professional drivers license!';
}
echo '<br>';
echo '<br>';

// DATES
echo date("h:i:s");
echo '<br>';
echo date("M d, Y h:i A");
echo '<br>';
echo date("h:i a");
echo '<br>';

$time = date('H');

if($time < 11){
    echo 'Take Your Breakfast, Good Morning!';
} elseif($time < 16){
    echo 'Take Your Lunch, Its Noontime!';
} else {
    echo 'Take Your Dinner, Good Evening';
}
echo '<br>';

// CHECK IF AN ARRAY IS EMPTY
// The isset() function will generate a warning when the variable does not exists
$upload = [];

if(isset($upload[1])) {
     echo $upload[1];
} else {
    echo 'There are no uploads!';
}
echo '<br>';

// The empty() function will not generate any warning when the variable does not exists
$upload = [];

if(!empty($upload[1])) {
     echo $upload[1];
} else {
    echo 'There are no uploads!';
}
echo '<br>';

//================ TERNARY OPERATOR ===============//

// ECHO BASED ON A CONDITION
echo !empty($upload[1]) ? $upload[1] : 'There are no uploads made!';
echo '<br>';

// ASSIGN A VARIABLE BASED ON A CONDITION
$upload1 = !empty($upload1[1]) ? $upload1[1] : 'There are no uploads made!';
echo '<br>';
$upload1 = !empty($upload1[1]) ? $upload1[1] : null;
echo '<br>';
$upload1 = $upload[1] ?? null;
echo '<br>';
var_dump($upload1);
echo '<br>';

//================ SWITCH STATEMENTS ===============//

$f1Team = 'Scuderia Ferrari';

switch ($f1Team){
    case 'Red Bull Racing':
        echo 'Your favorite team is Red Bull Racing';
        break;
    case 'Scuderia Ferrari':
        echo 'Your favorite team is Scuderia Ferrari';
        break;
    case 'Mercedes':
        echo 'Your favorite team is Mercedes';
        break;
    case 'McLaren':
        echo 'Your favorite team is McLaren';
        break;
    case 'Aston Martin':
        echo 'Your favorite team is Aston Martin';
        break;
    case 'RB Racing Bulls':
        echo 'Your favorite team is RB Racing Bulls';
        break;
    case 'Alpine':
        echo 'Your favorite team is Alpine';
        break;
    case 'Haas':
        echo 'Your favorite team is Haas';
        break;
    case 'Williams':
        echo 'Your favorite team is Williams';
        break;
    case 'Kick Sauber':
        echo 'Your favorite team is Kick Sauber';
        break;
    default:
        echo 'You do not like any Formula 1 Team';
};

?>