<?php
session_start();
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,
                wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,
                200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <title>login</title>
    </head>
<body>
    


  <div class="container-login">
        <h1>Welcome Back</h1>
        <form action="proses_login.php" method="POST">
            <div>
                <label   for="email">Email</label><br>
                <div class="container-input">
                    <input type="email" name="email" id="email" required placeholder="Enter email">
                </div>
            </div>
            <div>
                <label  for="password">Password</label><br>
                <div class="container-input">
                    <input type="password" name="password" id="password" required placeholder="Enter password">
                </div>
            </div>
            <div class="masuk">
            <button type="submit" class="button-login">Log In</button>
            <p>Don’t have an account? <a href="registrasi.php">Sign Up</a></p>
        </div>
        </form>
        
        <div class="divider">
            <span>OR</span>
        </div>

        <div class="login-google">
            <img src="img/google.png" alt="google">
            <p>Sign Up with Google</p>
        </div>
        <div class="login-apple">
            <img src="img/apple.png" alt="apple">
            <p>Sign Up with Apple</p>
        </div>
        
    </div>
    
</body>
</html>