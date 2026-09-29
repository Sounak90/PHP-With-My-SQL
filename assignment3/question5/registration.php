<!DOCTYPE html>
<html>
<head>
    <title>User Input Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
<form action="processeg.php" method="post">
    <div class="container">
        <div class="form-group">
            <label>Username: </label>
            <input type="text" class="form-control" name="username">
        </div>

        <div class="form-group">
            <label>Email Address: </label>
            <input type="email" class="form-control" name="email">
        </div>

        <div class="form-group">
            <label>Gender: </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="Male">
                <label class="form-check-label">Male</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="Female">
                <label class="form-check-label">Female</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="Others">
                <label class="form-check-label">Others</label>
            </div>
        </div>

        <div class="form-group">
            <label>Mobile: </label>
            <input type="text" class="form-control" name="mobile">
        </div>

        <div class="form-group">
            <label>Country: </label>
            <select class="form-control" name="country">
                <option value="">-- Select Country --</option>
                <option value="India">India</option>
                <option value="USA">USA</option>
                <option value="UK">UK</option>
                <option value="Canada">Canada</option>
                <option value="Australia">Australia</option>
            </select>
        </div>

        <div class="form-group">
            <label>Password: </label>
            <input type="password" class="form-control" name="password">
        </div>

        <div class="form-group">
            <label>Confirm Password: </label>
            <input type="password" class="form-control" name="confirm_password">
        </div>

        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="terms" value="I Agree">
            <label class="form-check-label">I agree to the terms and condition </label>
        </div><br>

        <input type="submit" class="btn btn-primary" value="Submit"><br><br>
    </div>
</form>
</body>
</html>

