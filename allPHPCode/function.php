<?php

function welcome($username)
{
    echo 'Welcome ' . $username;
}

welcome('Shuvo');

# Now about the Function Parameter

function concate($str1, $str2)
{
    return $str1 . $str2;
}

$greeting = concate('Welcome', 'Admin');
echo "<br > $greeting";

function concat2($str1, $str2, $delimiter = ' ')
{
    return $str1 . $delimiter . $str2;
}

$message = concat2('Hi', 'there!');

echo $message . '<br>';

var_dump($message);

echo '<br>';

$x = array("Akbar", "Mamun", "Rony");
var_dump($x);

echo '<br>';

class Student
{
    function department()
    {
        return "Physics";
    }

    function details()
    {
        echo $this->department();
    }
}

$st = new Student();
echo '<br>';
echo $st->department();
echo '<br>';
$st->details();
echo '<br>';

$cars = array("Volvo", "BMW", "Toyota");

var_dump($cars);
echo '<br>';
foreach ($cars as $x) {
    echo "$x <br>";
}

array_push($cars, "Ford");

var_dump($cars);
echo '<br>';

$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
var_dump($car);
echo '<br>';


$x = 75;
function myFunction()
{
    echo $GLOBALS['x'];
}

myFunction();
echo '<br>';

function myTest()
{
    global $x;
    echo $x;
}

myTest();
echo '<br>';







