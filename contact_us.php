<?php
    require 'models/users.php';
    require 'models/connect.php';
    require 'models/contact_messages.php';
    require 'models/validators.php';

    if (!empty($_POST)) {
        $errors = get_message_errors($_POST);
        if(empty($errors)) {
            $message = add_message($_POST);
            if ($message === false) {
                $errors[] = 'Τα στοιχεία που δώσατε δεν είναι σωστά';
                $success = false;
                require 'views/contact_us.php';
            }
            else {
                $success = true;
                require 'views/contact_us.php';
            }
        } else {
            $success = false;
            require 'views/contact_us.php';
        }
    } else {
        require 'views/contact_us.php';
    }
?>
