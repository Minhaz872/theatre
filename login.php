<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./frontend/images/fav.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./frontend/login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        
        <div class="login-card">
            <h3>Enter Your Login Credentials</h3>
            <form action="validation.php" method="post">
                <label for="Username">Username</label>
                <input type="text" name="username" id="">
                <label for="password">Password</label>
                <input type="password" name="password" id="">
                <input class="btn" type="submit" value="Submit">
            </form>
            <a href="signup.php">Don't have an account? Signup!</a>
            <a href="index.html">Home</a>
        </div>
    </div>
</body>
</html>