<?php 
    include('includes/classes/Account.php');
    $account = new Account();
    include('includes/handlers/register-handler.php');
    include('includes/handlers/login-handler.php');
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
                <label for="loginUserName">User Name:</label>
                <input type="text" id="loginUserName" name="loginUserName">
            </p>
            <p>
                <label for="loginPassword">Password:</label>
                <input type="password" id="loginPassword" name="loginPassword">
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
                <label for="registerFirstName">First Name:</label>
                <input type="text" id="registerFirstName" name="registerFirstName">
            </p>
            <p>
                <label for="registerLastName">Last Name:</label>
                <input type="text" id="registerLastName" name="registerLastName">
            </p>
            <p>
                <label for="registerEmail">Email:</label>
                <input type="email" id="registerEmail" name="registerEmail">
            </p>
            <p>
                <label for="registerEmailConfirm">Email Confirmation:</label>
                <input type="email" id="registerEmailConfirm" name="registerEmailConfirm">
            </p>
            <p>
                <label for="registerPassword">Password:</label>
                <input type="password" id="registerPassword" name="registerPassword">
            </p>
            <p>
                <label for="registerPasswordConfirm">Password Confirmation:</label>
                <input type="password" id="registerPasswordConfirm" name="registerPasswordConfirm">
            </p>
            <button type="submit" name="registerButton">Register</button>
        </form>
    </div>
</body>
</html>