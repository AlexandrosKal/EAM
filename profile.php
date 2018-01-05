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
                    $emailError = 'email error';
                }
            } else {
                $email_error = 'email error';
            }
        }
        if (!empty($_POST['new_password'])) {
            $valid_new_password = validate_password($_POST['new_password']);
            if ($valid_new_password) {
                $success = update_password($_POST['new_password'], $_SESSION['uid']);
                if(!$success) {
                    $pass_error = 'pass error';
                }
            } else {
                $pass_error = 'pass error';
            }
        }
        require 'views/profile.php';
    }
    require 'views/profile.php';
}
header('Location: signup_login.php' );
?>

