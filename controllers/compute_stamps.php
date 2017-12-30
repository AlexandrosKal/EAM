<?php
require 'models/connect.php';
require 'models/validators.php';
require 'models/users.php';

if (isset($_SESSION['uid'])) {

    if (!empty($_POST)) {
        $valid = is_int($_POST['hours']);
        if ($valid) {
            $stamps = $hours / 8 ;
        } else {
            $errors[] = "Οι ώρες πρέπει να είναι αριθμός.";
        }
        $user = get_user_data($_SESSION['uid']);
    }

} else {
        $errors = get_register_errors($_POST);
        $valid = is_int($_POST['hours']);
        if ($valid) {
            $stamps = $hours / 8 ;
        } else {
            $errors[] = "Οι ώρες πρέπει να είναι αριθμός.";
        }
        $user = $_POST;
    }
}


require 'views/stamp_form.php';
require 'views/footer.php';
?>
