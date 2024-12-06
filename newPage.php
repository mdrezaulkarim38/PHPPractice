<?php include 'header.php'; ?>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname"/>
        <input type="submit">
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo "Enter name is: $name";
    }
}
?>
<?php include 'footer.php'; ?>