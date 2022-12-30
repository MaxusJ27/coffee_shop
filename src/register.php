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
    <link rel="stylesheet" href="register.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $('.button').click(function () {
            $('.container__child').toggleClass('register login'); //Adds 'a', removes 'b' and vice versa
        });
    </script>
</head>

<body>
    <div class="registration" id="register">
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
                <h1>C</h1>
                <img src="../assets/logo-circle-2.png" width="120">
                <h1>V</h1>
                <h1>F</h1>
                <h1>E</h1>
                <h1>E</h1>
            </div>
            <div class="signup__description">
                <h2>A Celebration of Flavours</h2>
                <!-- <h2>Are you ready to turn your dreams into reality?</h2> -->
            </div>
        </div>

        <!-- <div class="container__child signup__form"> -->
        <!-- <div class="register">
                <label class="form-title" for="chk" aria-hidden="true">Sign Up</label>
                <button type="button">Toggle</button>
                <h2>Register</h2>
                <form class="form--unhidden" id="Login">
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
                    <p class="form__text" id="ToLogin">
                        <a class="form__link" href="#ChangeLogin" id="linkLogin">Already have an account? Sign in</a>
                    </p>
                </form>
            </div>
            <div class="login">
                <label class="form-title" for="chk" aria-hidden="true">Register</label>
                <button type="button">Toggle</button>
                <h2>Log In</h2>
                <form class="form--hidden" id="CreateAccount" action="authenticate.php" method="post">
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
                    <p class="form__text" id="ToLogin">
                        <a class="form__link" href="#ChangeLogin" id="linkLogin">Already have an account? Sign in</a>
                    </p>
                </form>
            </div> -->
        <div class="container">
            <div class="slider"></div>
            <div class="btn">
                <button class="login">Login</button>
                <button class="signup">Signup</button>
            </div>

            <!-- Form section that contains the
             login and the signup form -->
            <div class="form-section">
                <!-- login form -->
                <div class="login-box">
                    <form id="Login" action="authenticate.php" method="post">
                        <div class="input-field">
                            <input type="text" name="username" id="username" placeholder="Username" required>
                            <!-- <label>Username</label> -->
                        </div>
                        <div class="input-field">
                            <div class="password">
                                <input type="password" name="password" id="password" placeholder="Password" required>
                                <!-- <label>Password</label> -->
                            </div>
                        </div>
                        <!-- <button class="clkbtn">Login</button> -->
                        <input type="submit" value="Login">
                    </form>
                </div>

                <!-- signup form -->
                <div class="signup-box">
                    <div class="input-field">
                        <input type="text" name="username" id="username" required>
                        <!-- <label>Username</label> -->
                    </div>
                    <div class="input-field">
                        <input type="text" name="email" id="email" required>
                        <!-- <label>Email</label> -->
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" id="password" required>
                        <!-- <label>Password</label> -->
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" id="password" required>
                        <!-- <label>Confirm Password</label> -->
                    </div>
                    <input type="submit" value="Login">
                    <!-- <input type="text" class="name ele" placeholder="Enter your name">
                    <input type="email" class="email ele" placeholder="youremail@email.com">
                    <input type="password" class="password ele" placeholder="password">
                    <input type="password" class="password ele" placeholder="Confirm password">
                    <button class="clkbtn">Signup</button> -->
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>

    <script src="register.js" async defer></script>
</body>

</html>