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

echo 8 ** 2;

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

if (0 === $result) {
    echo "Shared without remainder with the result: ";
    echo $a / $b;
} else {
    echo "Divided with the remainder: ";
    echo $result;
}

echo "<br />";

// Working with degree and root

$st = pow(2, 10);
echo sqrt(245);
echo "<br />";

$array = array(4, 2, 5, 19, 13, 0, 10);
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

echo round($root379, 1);

echo "<br />";

echo round($root379, 2);

echo "<br />";

// floor, ceil

$root587 = sqrt(587);

$floorCeil = array(
    "floor" => floor($root587),
    "ceil" => ceil($root587)
);

// Working with min and max

$minMax = array(4, -2, 5, 19, -130, 0, 10);

echo min($minMax);

echo "<br />";

echo max($minMax);

// Working with random

echo rand(1, 100);

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

$negArr = array(1, 2, -1, -2, 3, -3);
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

for ($i = 1; $i <= 30; $i++) {
    if (0 === ($anyNum % $i)) {
        $anyArr[] = $i;
    }
}

foreach ($anyArr as $value) {
    echo $value . " ";
}

echo "<br />";

$sumArr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$sumMore = 0;
$count = 0;

foreach ($sumArr as $value) {
    $sumMore += $value;
    $count += 1;
    if (10 < $sumMore) {
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

function increaseEnthusiasm($str)
{

    return $str . "!";

}

echo increaseEnthusiasm("Hello, world");

echo "<br />";

function repeatThreeTimes($str)
{
    return $str . $str . $str;
}

echo repeatThreeTimes("123");

echo "<br />";

echo increaseEnthusiasm(repeatThreeTimes("321"));

echo "<br />";

function cut($str, $num = 10)
{

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
    while (9 < $number) {
        $sum = 0;
        while (0 < $number) {
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

// Task 17

$array1 = [];

function arrayOfx($array1, $count)
{
    for ($i = 1; $i <= $count; $i++) {
        $array1[] = str_repeat("x", $i);
    }

    foreach ($array1 as $value) {
        echo "\n";
        echo $value;
    }
}

echo arrayOfx($array1, 11);

echo "<br />";

$array2 = [];

function arrayFill($elem, $count)
{
    for ($i = 0; $i < $count; $i++) {
        $array2[] = $elem;
    }

    foreach ($array2 as $value) {
        echo "\n";
        echo $value;
    }
}

echo arrayFill('x', 5);

echo "<br />";

$array3 = array(
    array(6, 5, 4),
    array(3, 2),
    array(1)
);

function sumOfElemArr($array3)
{
    $sum = 0;
    foreach ($array3 as $array) {
        foreach ($array as $elem) {
            $sum += $elem;
        }
    }
    return $sum;
}

echo sumOfElemArr($array3);

echo "<br />";

$count = 1;
$array4 = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = &$count; $j < 10; $j++) {
        $array4[$i][] = $j;
    }
}

foreach ($array4 as $array) {
    foreach ($array as $elem) {
        echo $elem . ' ';
    }
}

echo "<br />";

$multArray = array(2, 5, 3, 9);

$firstNum = $multArray[0] * $multArray[1];
$secondNum = $multArray[2] * $multArray[3];
$result = $firstNum + $secondNum;

echo $result;

echo "<br />";

$user = array(
    'name' => 'Pavel',
    'surname' => 'Veselkov',
    'patronymic' => 'Yurievich'
);

echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic'];

echo "<br />";

$date = array(
    'year' => 2024,
    'month' => 3,
    'day' => 9
);

echo $date['year'] . '-' . $date['month'] . '-' . $date['day'];

echo "<br />";

$arr = ['a', 'b', 'c', 'd', 'e'];
$count = 0;

foreach ($arr as $elem) {
    $count++;
}

echo $count;

echo "<br />";

echo $arr[$count - 1];
echo $arr[$count - 2];

echo "<br />";

// Task 18

function sumStatement($num1, $num2)
{
    if (10 < ($num1 + $num2)) {
        return true;
    } else {
        return false;
    }
}

echo sumStatement(53, 1);

echo "<br />";

function equalStatement($num1, $num2)
{
    if ($num1 == $num2) {
        return true;
    } else {
        return false;
    }
}

echo equalStatement(-2, -2);

echo "<br />";

$test = 0;
if (!$test) echo "верно";

echo "<br />";

$age = 55;
$sum = 0;

if (10 > $age || 99 < $age) {
    echo "A number less than 10 or a number greater than 99";
} else {
    while (0 < $age) {

        $sum += $age % 10;
        $age = floor($age / 10);
    }

    if (9 >= $sum) {
        echo "The sum of the digits is single-digit";
    } else {
        echo "The sum of the digits is double digits";
    }
}

echo "<br />";

function arr3()
{
    $arr = array(1, 2, 3);
    $sum = 0;
    if (3 === count($arr)) {
        foreach ($arr as $elem) {
            $sum += $elem;
        }
    }
    if (0 != $sum) {
        return $sum;
    } else return "The array does not have 3 elements";
}

echo arr3();

echo "<br />";

// Task 19

for ($i = 1; $i <= 20; $i++) {
    echo str_repeat('x', $i);

    echo "<br />";
}

// Task 20

$arr = [5, 15, 20, 25, 5];

$sum = array_sum($arr);
$average = $sum / count($arr);

echo $average;

echo "<br />";

echo array_sum(range(1, 100));

echo "<br />";

$arrRoot = [5, 12, 20, 15, 2];

$arrRoot2 = array_map('sqrt', $arrRoot);

print_r($arrRoot2);

echo "<br />";

$letterNumArr = array_combine(range('a', 'z'), range(1, 26));
print_r($letterNumArr);;

echo "<br />";

$str = '1234567890';
$sum = array_sum(str_split($str, 2));

echo $sum;