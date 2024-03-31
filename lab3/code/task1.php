<?php

// task 1.a

$string = 'ahb acb aeb aeeb adcb axeb';
$pattern = '/a..b/';
preg_match_all($pattern, $string, $matches);

echo "Strings found:\n";

foreach ($matches[0] as $match) {
    echo $match . "\n";
}

echo "<br />";

// task 1.b

$str = 'a1b2c3';

function exponentiation($matches)
{
    return pow($matches[0], 3);
}

$newString = preg_replace_callback('/\d+/', 'exponentiation', $str);

echo $newString;