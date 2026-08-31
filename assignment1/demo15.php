<!DOCTYPE html>
<html>
<body>
<form action="demo15.php" method="post">
    <label>Enter Marks: </label>
    <input type="number" name="marks" min="0" max="1000"><br>
    <input type="submit" value="Calculate">
</form>

<?php
    $marks = $_POST["marks"]; // $_POST is super global variable

    if ($marks > 800 && $marks <= 1000) {
        echo "Class I";
    } elseif ($marks > 600 && $marks <= 800) {
        echo "Class II";
    } elseif ($marks > 400 && $marks <= 600) {
        echo "Class III";
    } elseif ($marks >= 0 && $marks <= 400) {
        echo "Fail";
    } else {
        echo "Invalid marks.";
    }
?>
</body>
</html>