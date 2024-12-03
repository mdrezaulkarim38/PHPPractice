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

function dd($data)
{
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
	die();
}

$message = 'Dump and die example';

dd($message);

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


?>
</pre>
<h1><?php echo $title; ?></h1>
</body>
</html>