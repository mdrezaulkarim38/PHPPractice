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
echo 'Welcome to PHP';
$name = "Shuvo";
if ($name == "Shuvo") {
	echo "<br>My Name is " . $name;
}
$title = "PHP is Awesome";
?>
</pre>
<h1><?php echo $title; ?></h1>
</body>
</html>