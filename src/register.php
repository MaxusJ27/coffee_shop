<?php
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Covfee</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/register.css">
</head>

<body>
    <div class="registration" id="register">
        <div class="shape first"></div>
        <div class="shape second"></div>
        <div class="shape third"></div>
        <div class="container__child signup__content">
            <div class="signup__title">
                <div class="signup__logo">
                    <img src="./assets/logo/logo-circle.png" width="25" alt="signup-logo">
                </div>
                <h2>Covfee</h2>

            </div>
            <div class="signup__title__logo">
                <h1>C</h1>
                <img src="./assets/logo/logo-circle.png" width="80">
                <h1>V</h1>
                <h1>F</h1>
                <h1>E</h1>
                <h1>E</h1>
            </div>
            <div class="signup__description">
                <h2>A Celebration of Flavours</h2>
            </div>
        </div>

        <div class="container">
            <div class="slider"></div>
            <div class="btn">
                <button class="login">Login</button>
                <button class="signup">Signup</button>
            </div>
            <div class="form-section">
                <div class="login-box">
                    <form id="Login" action="authenticate.php" method="post">
                        <div class="input-field">
                            <input type="text" name="username" id="username" placeholder="Username" required>
                        </div>
                        <div class="input-field">
                            <input type="password" name="password" id="password" placeholder="Password" required>
                        </div>
                        <input type="submit" id="register-button" value="Login">
                    </form>
                </div>
                <div class="signup-box">
                    <form id="Register" action="insert_account.php" method="post">
                        <input type="hidden" name="new" value="1" />
                        <div class="input-field">
                            <input type="text" name="username" id="username" placeholder="Username" required>
                        </div>
                        <div class="input-field">
                            <input type="text" name="email" id="email" placeholder="E-Mail" required>
                        </div>
                        <div class="input-field">
                            <input type="password" name="password" id="password" placeholder="Password" required>
                        </div>
                        <input type="submit" id="register-button" value="Register">
                </div>
            </div>
        </div>
    </div>
    <script src="./js/register.js" async defer></script>
</body>

</html>