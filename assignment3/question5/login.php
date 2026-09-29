<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <form action="loginprocess.php" method="post">
        <div class="form-group">
            <label>Username:</label>
            <input type="text" class="form-control" name="username">
        </div>

        <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control" name="password">
        </div>

        <input type="submit" class="btn btn-primary" value="Login">
    </form>
</div>
</body>
</html>