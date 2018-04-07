<?php 

    if(isset($_POST['loginButton'])) {
        echo "Login button was pressed!";
    }
    if(isset($_POST['registerButton'])) {
        echo "Register button was pressed!";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jukebox</title>
    <style>
        body * {
            font-family: 'Roboto', sans-serif;
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
</head>
<body>
    <div id="inputContainer">
        <!-- Login -->
        <form id="loginForm" action="register.php" method="POST">
            <h2>Login to your account</h2>
            <p>
                <label for="loginUserName">Login User Name:</label>
                <input type="text" id="loginUserName" name="loginUserName">
            </p>
            <p>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
            </p>
            <button type="submit" name="loginButton">Log In</button>
        </form>
        <!-- Register -->
        <form id="registerForm" action="register.php" method="POST">
            <h2>Create your free account</h2>
            <p>
                <label for="registerUserName">Register User Name:</label>
                <input type="text" id="registerUserName" name="registerUserName">
            </p>
            <p>
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="firstName">
            </p>
            <p>
                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name="lastName">
            </p>
            <p>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </p>
            <p>
                <label for="emailConfirm">Email Confirmation:</label>
                <input type="email" id="emailConfirm" name="emailConfirm">
            </p>
            <p>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
            </p>
            <p>
                <label for="passwordConfirm">Password Confirmation:</label>
                <input type="password" id="passwordConfirm" name="passwordConfirm">
            </p>
            <button type="submit" name="registerButton">Register</button>
        </form>
    </div>
</body>
</html>