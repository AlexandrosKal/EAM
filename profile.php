<?php
require 'models/connect.php';
require 'models/validators.php';
require 'models/users.php';
if (isset($_SESSION['uid'])) {
    $user = get_user_data($_SESSION['uid']);
    if (!empty($_POST)) {
        $valid_email = false;
        $valid_new_password = false;
        if (!empty($_POST['new_email'])) {
            $valid_email = validate_email($_POST['new_email']);
            if ($valid_email) {
                $success_email = update_email($_POST, $_SESSION['uid']);
                if(!$success_email) {
                    require 'views/500.php';
                }
            } else {
                $email_error = 'Η ηλεκτρονική διεύθυνση email που δώσατε δεν είναι έγκυρη.';
            }
        }
        if (!empty($_POST['new_password']) && !empty($_POST['password'])) {
            $valid_new_password = validate_password($_POST['new_password']);
            $authenticated = authenticate_user(array_merge($user, $_POST));
            if ($valid_new_password && $authenticated) {
                $success_password = update_password($_POST, $_SESSION['uid']);
                if(!$success_password) {
                    require 'views/500.php';
                }
            }
            if (!$authenticated) {
                $pass_error = 'Λαθος παλιος κωδικος';
            }
            if(!$valid_new_password) {
                $pass_error = 'Λαθος νεος κωδικος';
            }
        }
        $user = get_user_data($_SESSION['uid']);
        require 'views/profile.php';
    } else {
        $user = get_user_data($_SESSION['uid']);
	    require 'views/profile.php';
    }
} else {
    header('Location: signup_login.php' );
}
?>
