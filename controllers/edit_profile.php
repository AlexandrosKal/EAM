<?php
require 'models/connect.php';
require 'models/validators.php';
require 'models/users.php';

if (isset($_SESSION['uid'])) {
    if (!empty($_POST)) {
        $valid = validate_email($_POST['email']);
        if ($valid) {
            $success = update_mail($_POST, $_SESSION['uid']);
            if(!$success) {
                $emailError = 'email error';
            }
        }
        else {
            $emailError = 'email error';
        }
    }
?>

