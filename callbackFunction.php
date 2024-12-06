<?php
function my_callback($item)
{
    return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $strings);
print_r($lengths);
echo '<br >';
$lengths = array_map(function ($item) {
    return strlen($item);
}, $strings);
print_r($lengths);

echo '<br >';
$age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);

echo json_encode($age);
echo '<br >';
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

var_dump(json_decode($jsonobj));

echo '<br >';
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new Exception("Division by zero");
    }
    return $dividend / $divisor;
}

try {
    echo divide(5, 0);
} catch (Exception $e) {
    echo "Unable to divide.";
}
echo '<br >';