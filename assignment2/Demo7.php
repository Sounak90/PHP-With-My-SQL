<!DOCTYPE html>
<html>
<body>

<form action="Demo7.php" method="post">

    <label>Enter a String:</label>
    <input type="text" name="str"><br><br>

    <input type="submit" value="Check">

</form>

<?php
$str = $_POST['str'];

$startsWithF = ($str[0] == 'F' || $str[0] == 'f');
$endsWithB = ($str[-1] == 'B' || $str[-1] == 'b');

if ($startsWithF && $endsWithB) {
    echo "FizzBuzz";
} elseif ($startsWithF) {
    echo "Fizz";
} elseif ($endsWithB) {
    echo "Buzz";
} else {
    echo $str;
}
?>

</body>
</html>