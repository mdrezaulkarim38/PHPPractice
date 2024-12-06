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


$cars = array("Volvo", "BMW", "Toyota");







