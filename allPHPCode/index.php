<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Tutorial</title>
</head>
<body>
<pre>
<?php
echo 'Welcome to PHP'; # This is one line comment 
$name = "Shuvo";
if ($name == "Shuvo") {
	echo "<br>My Name is " . $name;
}
$title = "PHP is Awesome";

$balance = 100;

echo '<pre>';
var_dump($balance);
echo '</pre>';

$message = 'Insufficient balance';

echo '<pre>';
var_dump($message);
echo '</pre>';

//function dd($data)
//{
//	echo '<pre>';
//	var_dump($data);
//	echo '</pre>';
//	die();
//}
//
//$message = 'Dump and die example';
//
//dd($message);

# Integer type
$max = 1000;
$page_size = 10;
# Float Type
$price = 10.25;
$tax = 0.08;

# Boolean Type
$is_admin = true;
$is_user_logged_in = false;
#String Type
$str = 'PHP scalar type';
$message = 'PHP data Types';

# Array Type
$carts = ['laptop', 'mouse', 'keyboard'];
echo $carts[0] . '<br>';
echo $carts[1] . '<br>';
echo $carts[2] . '<br>';

$prices = [
	'laptop' => 1000,
	'mouse' => 50,
	'keyboard' => 120
];
echo $prices['laptop'] . '<br>';
echo $prices['mouse'] . '<br>';
echo $prices['keyboard'] . '<br>';

$is_submitted = false;
$is_valid = true;

echo is_bool($is_submitted) . '<br>';

var_dump($is_submitted);

$name = 'John';
echo 'Hello ' . $name . '<br>';

echo $title[0] . '<br>';

$he = 'Bob';
$she = 'Alice';
$text = "$he said,\"PHP is awesome\".\"Of course.\" $she agreed.\n";

echo $text;

echo (int)12.5 . '<br>'; // 12
echo (int)12.1 . '<br>'; // 12
echo (int)12.9 . '<br>'; // 12
echo (int)-12.9 . '<br>'; // -12

$amount = 100;
echo $amount . ' USD<br>';
$x = '20';
$y = 20;
var_dump($x === $y);

$price = 100;
$qty = 5;
$discounted = $qty > 3 && $price > 99;
var_dump($discounted);

$expired = true;
$purged = false;

$clear_cache = $expired || $purged;

var_dump($clear_cache);

$expired = false;
$purged = false;

$clear_cache = $expired || $purged;

var_dump($clear_cache);

$result = (false or true);

var_dump($result);


?>
</pre>

</body>
</html>