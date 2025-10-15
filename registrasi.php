<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registrasi.css">
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
    <title>registrasi</title>
</head>
<body>
 












  <div class="container-regis">
        <h1>Register Here</h1>
        <div class="form">
            <div class="isi-nama">
                <h2>Full Name</h2>
                <div class="container-input">
                    <input type="text" id="fullname" name="fullname" placeholder="Enter Full Name"><br><br>
                </div>
            </div>
            <div class="isi-email">
                <h2>Email</h2>
                <div class="container-input">
                    <input type="text" id="email" name="email" placeholder="Enter email"><br><br>
                </div>
            </div>
            <div class="isi-pw">
                <h2>Password</h2>
                <div class="container-input">
                    <input type="password" id="pw" name="pw" placeholder="Enter password"><br><br>
                </div>
            </div>
        </div>
        <div class="masuk">
            <a href="login.php" class="signup">Sign up </a>
            <p>Already have an account? <a href="login.php"> Log In</a></p>
        </div>
        <div class="divider">
            <span>OR</span>
        </div>
        <div class="signup-google">
            <img src="img/google.png" alt="google">
            <p>Sign Up with Google</p>
        </div>
        <div class="signup-apple">
            <img src="img/apple.png" alt="apple">
            <p>Sign Up with Apple</p>
        </div>
        <h6>By signing up, you agree to the <a href="#">Terms of 
            Service</a> and <a href="#">Privacy Policy</a>, including <a href="#">cookie use.</a></h6>
    </div>
    
</body>
</html>