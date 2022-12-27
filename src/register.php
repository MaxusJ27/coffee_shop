<?php
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="register.css">
</head>

<body>
    <div class="signup" id="register">
        <div class="shape first"></div>
        <div class="shape second"></div>
        <div class="shape third"></div>
        <div class="container__child signup__content">
            <div class="signup__title">
                <div class="signup__logo">
                    <img src="../assets/logo-circle.png" width="25" alt="signup-logo">
                </div>
                <h2>Covfee</h2>

            </div>
            <div class="signup__title__logo">
                <div class="signup__title">
                    <h1>C</h1>
                    <img src="../assets/logo-circle-2.png" width="120">
                    <h1>V</h1>
                    <h1>F</h1>
                    <h1>E</h1>
                    <h1>E</h1>
                </div>
            </div>
            <div class="signup__description">
                <h2>A Celebration of Flavours</h2>
                <!-- <h2>Are you ready to turn your dreams into reality?</h2> -->
            </div>
        </div>
        <div class="container__child signup__form">
            <input type="checkbox" id="chk" aria-hidden="true">
            <div class="register">
                <form>
                    <label class="form-title" for="chk" aria-hidden="true">Sign Up</label>
                    <div class="register-box">
                        <div class="user-box">
                            <input type="text" name="username" id="username" required>
                            <label>Username</label>
                        </div>
                        <div class="user-box">
                            <input type="text" name="email" id="email" required>
                            <label>Email</label>
                        </div>
                        <div class="user-box">
                            <input type="password" name="password" id="password" required>
                            <label>Password</label>
                        </div>
                        <input type="submit" value="Register">
                    </div>
                </form>
            </div>
            <div class="login">
                <form action="authenticate.php" method="post">
                    <label class="form-title" for="chk" aria-hidden="true">Log In</label>
                    <div class="login-box">
                        <div class="user-box">
                            <input type="text" name="username" id="username" required>
                            <label>Username</label>
                        </div>
                        <div class="user-box">
                            <input type="password" name="password" id="password" required>
                            <label>Password</label>
                        </div>
                        <input type="submit" value="Login">
                    </div>
                </form>
            </div>
        
        </div>
    </div>

    <script src="" async defer></script>
</body>

</html>