<?php
require 'models/connect.php';
require 'models/validators.php';
require 'models/users.php';

if (isset($_SESSION['uid'])) {

    if (!empty($_POST)) {
        if (is_int($_POST['age']) && is_int($_POST['stamps'])) {
            $pension = 100 ;
        } else {
            $errors[] = "Η ηλικία και τα ένσημα πρέπει να ειναι έγκυροι αριθμοί";
        }
        $user = get_user_data($_SESSION['uid']);

    }

} else {
        $errors = get_register_errors($_POST);
        if (is_int($_POST['age']) && is_int($_POST['stamps'])) {
            $pension = 100 ;
        } else {
            $errors[] = "Η ηλικία και τα ένσημα πρέπει να ειναι έγκυροι αριθμοί";
        }
        $user = $_POST;
    }
}


require 'views/pension_form.php';
require 'views/footer.php';
?>
