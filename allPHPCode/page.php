<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Title</title>
</head>
<body>
<?php $is_admin = false; ?>
<?php if ($is_admin) : ?>
    <a href="#">Edit</a>
<?php endif; ?>
<a href="#">View</a>

<br/>
<?php
echo readfile("webdictionary.txt");
echo '<br >';

$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile, filesize("webdictionary.txt"));
fclose($myfile);
?>
</body>
</html>