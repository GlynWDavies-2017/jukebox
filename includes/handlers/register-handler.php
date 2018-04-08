<?php 

    function sanitizeFormPassword($inputText) {
        $inputText = strip_tags($inputText);
        return $inputText;
    }

    function sanitizeFormUserName($inputText) {
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ", "", $inputText);
        return $inputText;
    }

    function sanitizeFormString($inputText) {
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ", "", $inputText);
        $inputText = ucfirst(strtolower($inputText));
        return $inputText;
    }

    if(isset($_POST['registerButton'])) {

        $registerUserName = sanitizeFormUserName($_POST['registerUserName']);  
        $registerFirstName = sanitizeFormString($_POST['registerFirstName']); 
        $registerLastName = sanitizeFormString($_POST['registerLastName']);  
        $registerEmail = sanitizeFormString($_POST['registerEmail']);
        $registerEmailConfirm = sanitizeFormString($_POST['registerEmailConfirm']);
        $registerPassword = sanitizeFormPassword($_POST['registerPassword']);
        $registerPasswordConfirm = sanitizeFormPassword($_POST['registerPasswordConfirm']);

        $account->register($registerUserName, $registerFirstName, $registerLastName, $registerEmail, $registerEmailConfirm, $registerPassword, $registerPasswordConfirm);

    }

?>