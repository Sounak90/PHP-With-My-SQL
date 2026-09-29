<?php

session_start();

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

$con = new mysqli($hostname, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$errors = array();
$success = "";

$username = "";
$email = "";
$gender = "";
$mobile = "";
$country = "";
$password = "";
$confirm_password = "";
$terms = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
    $mobile = $_POST["mobile"];
    $country = $_POST["country"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $terms = isset($_POST["terms"]) ? $_POST["terms"] : "";

    if ($username == "") {
        $errors["username"] = "Username is required";
    } elseif (!preg_match("/^[a-zA-Z0-9 ]+$/", $username)) {
        $errors["username"] = "Only alphanumeric characters and spaces are allowed";
    }

    if ($email == "") {
        $errors["email"] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Invalid email format";
    }

    if ($gender == "") {
        $errors["gender"] = "Gender must be selected";
    }

    if ($mobile == "") {
        $errors["mobile"] = "Mobile number is required";
    } elseif (!preg_match("/^\+?[0-9]{10}$/", $mobile)) {
        $errors["mobile"] = "Mobile number must contain exactly 10 digits";
    }

    if ($country == "") {
        $errors["country"] = "Country must be selected";
    }

    if (strlen($password) < 8) {
        $errors["password"] = "Password must be at least 8 characters";
    }

    if ($confirm_password == "") {
        $errors["confirm_password"] = "Confirm password is required";
    } elseif ($confirm_password != $password) {
        $errors["confirm_password"] = "Passwords do not match";
    }

    if ($terms == "") {
        $errors["terms"] = "You must agree to the terms and conditions";
    }

    if (empty($errors)) {
        $sql = "INSERT INTO users (username, email, gender, mobile, country, password, confirm_password, terms) VALUES
        ('$username', '$email', '$gender', '$mobile', '$country', '$password', '$confirm_password', '$terms')";

        if ($con->query($sql) === TRUE) {
            $success = "Registration Successful";
        } else {
            $errors["database"] = "Error: " . $con->error;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
<form action="registration.php" method="post">
<div class="container">
    <div class="form-group">
        <label>Username:</label>
        <input type="text" class="form-control" name="username" placeholder="Enter username" value="<?php echo $username; ?>">
        <?php
        if (isset($errors["username"])) {
            echo "<span class='error'>* " . $errors["username"] . "</span>";
        }
        ?>
    </div>

    <div class="form-group">
        <label>Email:</label>
        <input type="email" class="form-control" name="email" placeholder="Enter email" value="<?php echo $email; ?>">
        <?php
        if (isset($errors["email"])) {
            echo "<span class='error'>* " . $errors["email"] . "</span>";
        }
        ?>
    </div>

    <div class="form-group">
        <label>Gender:</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender"value="Male" <?php if ($gender == "Male") echo "checked"; ?>>
            <label class="form-check-label">Male</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="Female" <?php if ($gender == "Female") echo "checked"; ?>>
            <label class="form-check-label">Female</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="Others" <?php if ($gender == "Others") echo "checked"; ?>>
            <label class="form-check-label">Others</label>
        </div>
        <?php
        if (isset($errors["gender"])) {
            echo "<span class='error'>* " . $errors["gender"] . "</span>";
        }
        ?>
    </div>

    <div class="form-group">
        <label>Mobile:</label>
        <input type="text" class="form-control" name="mobile" value="<?php echo $mobile; ?>">
        <?php
        if (isset($errors["mobile"])) {
            echo "<span class='error'>* " . $errors["mobile"] . "</span>";
        }
        ?>
    </div>

    <div class="form-group">
        <label>Country:</label>
        <select class="form-control" name="country">
            <option value="">-- Select Country --</option>
            <option value="India" <?php if ($country == "India") echo "selected"; ?>> India </option>
            <option value="USA" <?php if ($country == "USA") echo "selected"; ?>> USA </option>
            <option value="UK" <?php if ($country == "UK") echo "selected"; ?>> UK </option>
            <option value="Canada" <?php if ($country == "Canada") echo "selected"; ?>> Canada </option>
            <option value="Australia" <?php if ($country == "Australia") echo "selected"; ?>> Australia </option>
        </select>
        <?php
        if (isset($errors["country"])) {
            echo "<span class='error'>* " . $errors["country"] . "</span>";
        }
        ?>
    </div>

    <div class="form-group">
        <label>Password:</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
        <?php
        if (isset($errors["password"])) {
            echo "<span class='error'>* " . $errors["password"] . "</span>";
        }
        ?>
    </div>

    <div class="form-group">
        <label>Confirm Password:</label>
        <input type="password" class="form-control" name="confirm_password" placeholder="Password">
        <?php
        if (isset($errors["confirm_password"])) {
            echo "<span class='error'>* " . $errors["confirm_password"] . "</span>";
        }
        ?>
    </div>


    <div class="form-check">
        <input type="checkbox" class="form-check-input" name="terms" value="I Agree" <?php if ($terms != "") echo "checked"; ?>>
        <label class="form-check-label"> I agree to the terms and condition </label>
        <?php
        if (isset($errors["terms"])) {
            echo "<br><span class='error'>* " . $errors["terms"] . "</span>";
        }
        ?>
    </div><br>

    <input type="submit" class="btn btn-primary" value="Submit"><br><br>
    <?php
    if ($success != "") {
        echo "<h2 class='success'>Registration Successful</h2>";
        echo "Username: " . $username . "<br><br>";
        echo "Email Address: " . $email . "<br><br>";
        echo "Gender: " . $gender . "<br><br>";
        echo "Mobile No: " . $mobile . "<br><br>";
        echo "Country: " . $country . "<br><br>";
    }

    if (isset($errors["database"])) {
        echo "<br><span class='error'>" . $errors["database"] . "</span>";
    }
    ?>
</div>
</form>
</body>
</html>

<?php
$con->close();
?>

