<?php
require 'models/connect.php';
require 'models/validators.php';
require 'models/users.php';

if (isset($_SESSION['uid'])) {

    $user = get_user_data($_SESSION['uid']);
    if (!empty($_POST)) {
        $valid_email = false;
        $valid_new_password = false;
        if (!empty($_POST['email'])) {
            $valid_email = validate_email($_POST['email']);
            if ($valid_email) {
                $success = update_mail($_POST['email'], $_SESSION['uid']);
                if(!$success) {
                    //500
                }
            } else {
                $email_error = 'Δωστε ενα legit email';
            }
        }
        if (!empty($_POST['new_password'])) {
            $valid_new_password = validate_password($_POST['new_password']);
            $authenticated = authenticate_user(array_merge($_SESSION['email']), $_POST['password']);
            if ($valid_new_password && $authenticated) {
                $success = update_password($_POST['new_password'], $_SESSION['uid']);
                if(!$success) {
                    $pass_error = 'pass error';
                }
            }
            if (!$authenticated) {
                $pass_error = 'Λαθος παλιος κωδικος';
            }
            if(!$valid_new_password) {
                $pass_error = 'Λαθος νεος κωδικος';
            }
        }
        require 'views/profile.php';
    }
    require 'views/profile.php';
} else {
    header('Location: signup_login.php' );
}
?>

