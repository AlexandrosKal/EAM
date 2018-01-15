<?php
require 'models/users.php';
require 'models/connect.php';
require 'models/validators.php';
require 'models/prestored_data.php';

if (isset($_SESSION['uid'])) {
    $user = get_user_data($_SESSION['uid']);
} else {
    if (!empty($_POST)) {
        $errors = get_stamp_form_errors($_POST);
        if(empty($errors)) {
            $user = get_prestored_data($_POST['amka']);
            if ($user === false) {
                $errors[] = 'Δεν υπαρχει καταχώρηση για τον χρήστη';
            }
        }
    }
}
require 'views/stamps.php';
?>
