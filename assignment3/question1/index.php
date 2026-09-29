<!DOCTYPE html>
<html>
<head>
    <title>User Input Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <form action="process.php" method="post">
    <div class="container">
    <div class="form-group">
        <label>Full Name</label>
        <input type="text" class="form-control" name="fullname">
    </div>

    <div class="form-group">
        <label>Email Address</label>
        <input type="email" class="form-control" name="email">
    </div>

    <input type="submit" class="btn btn-primary" value="Submit">
    </div>
</form>

</body>
</html>