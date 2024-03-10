<?php
// Task 1
$veryBadUnclearName = "15 chicken wings";


$order = &$veryBadUnclearName;
$order = "\nHello, world!";

echo "\nYour order is: $veryBadUnclearName.";

echo "<br />";

// Task 2
$num1 = 1;
echo "$num1\n";

$num2 = -1;
echo "$num2\n";

$num3 = 13;
$num4 = 1;
echo $num3 - $num4, "\n";

$lastMonth = 1187.23;
$thisMonth = 1089.98;

echo $lastMonth - $thisMonth;

echo "<br />";

// Task 11
$numLanguages = 4;
$months = 11;
$days = $months * 16;
$daysPerLanguage = $days / $numLanguages;

echo $daysPerLanguage;

echo "<br />";

// Task 12

echo 8**2;

echo "<br />";

// Task 13

$myNum = 90;
$answer = $myNum;

$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $myNum;

echo $answer;

echo "<br />";

// Task 14

// Working with %

$a = 10;
$b = 3;

$result = $a % $b;

echo $result;

echo "<br />";

if ($result == 0) {
    echo "Shared without remainder with the result: ";
    echo $a / $b;
}
else {
    echo "Divided with the remainder: ";
    echo $result;
}

echo "<br />";

// Working with degree and root

$st = pow(2,10);
echo sqrt(245);

echo "<br />";

$array = array(4,2,5,19,13,0,10);
$sum = 0;
foreach ($array as $value) {
    $sum += pow($value, 2);
}
echo "The result of array operations: " . sqrt($sum);

echo "<br />";

// Working with rounding functions

$root379 = sqrt(379);

echo round($root379);

echo "<br />";

echo round($root379,1);

echo "<br />";

echo round($root379,2);

echo "<br />";

// floor, ceil

$root587 = sqrt(587);

$floorCeil = array(
    "floor" => floor($root587),
    "ceil" => ceil($root587)
);

// Working with min and max

$minMax = array(4,-2,5,19,-130,0,10);

echo min($minMax);

echo "<br />";

echo max($minMax);

// Working with random

echo rand(1,100);

for ($i = 0; $i < 10; $i++) {
    $randArr[] = rand();
}

foreach ($randArr as $value) {
    echo $value . " ";
}

echo "<br />";

// Working with the module

for ($i = 0; $i < 3; $i++) {
    $a = rand(1, 25);
    $b = rand(1, 25);

    echo abs($a - $b);

    echo "<br />";
}

$negArr = array(1,2,-1,-2,3,-3);
$posArr = [];

foreach ($negArr as $value) {
    $posArr[] = abs($value);
}

foreach ($posArr as $value) {
    echo $value . " ";
}

echo "<br />";
// General

$anyNum = 30;
$anyArr = [];

for ($i=1; $i <= 30; $i++) {
    if (($anyNum % $i) == 0) {
        $anyArr[] = $i;
    }
}

foreach ($anyArr as $value) {
    echo $value . " ";
}

echo "<br />";

$sumArr = array(1,2,3,4,5,6,7,8,9,10);
$sumMore = 0;
$count = 0;

foreach ($sumArr as $value) {
    $sumMore += $value;
    $count += 1;
    if ($sumMore > 10) {
        echo "The number of the first elements of the array: $count.";
        break;
    }
}

echo "<br />";

// Task 15

function printStringReturnNumber()
{
    echo "(╯°□°)╯︵ ┻━┻";
    return 0;
}
$myNum = printStringReturnNumber();
echo $myNum;

echo "<br />";

// Task 16

function increaseEnthusiasm($str) {

    return $str . "!";

}

echo increaseEnthusiasm("Hello, world");

echo "<br />";

function repeatThreeTimes($str) {
    return $str . $str . $str;
}

echo repeatThreeTimes("123");

echo "<br />";

echo increaseEnthusiasm(repeatThreeTimes("321"));

echo "<br />";

function cut($str, $num = 10) {

    if (strlen($str) <= $num) {
        return $str;
    } else {
        $result = '';
        for ($i = 0; $i < $num; $i++) {
            $result .= $str[$i];
        }
        return $result;
    }
}

echo cut("Manage Registration", 8);

echo "<br />";

echo cut("Manage Registration");

echo "<br />";

$anyArray = array(2, 39, 4, 9, 22, 90, 0);

function recArr($array, $len, $i = 0)
{
    if ($i == $len) {
        return;
    }
    echo $array[$i] . " ";
    $i++;
    recArr($array, $len, $i);
}

recArr($anyArray, count($anyArray));

echo "<br />";

function sumOfNum($number)
{
    while ($number > 9)
    {
        $sum = 0;
        while ($number > 0)
        {
            $digit = $number % 10;
            $sum += $digit;
            $number = (int)($number / 10);
        }
        $number = $sum;
    }
    return $number;
}

$number = 11111111111;
$result = sumOfNum($number);
echo "The sum of digits: $number = $result";

echo "<br />";