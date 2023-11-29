
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcu?t icon" href="./frontend/images/fav.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./frontend/signup.css">
    <title>Signup</title>
</head>
<body>
    <div class="container">
        <div class="login-card">
            <h3>Enter Your Signup Info</h3>
            <form action="registration.php" method="post">
                <label for="Username">Username</label>
                <input type="text" name="username" id="Username">
                <label for="Name">Name</label>
                <input type="text" name="name" id="Name">
                <label for="Email">Email</label>
                <input type="email" name="email" id="Email">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" id="phone">
                <label for="password">Password</label>
                <input type="password" name="password" id="Password">
                <input class="btn" type="submit" value="Submit">
            </form>
            <a href="login.php">Have an account? Login!</a>
            <a href="index.html">Home</a>
        </div>
    </div>
</body>
</html>