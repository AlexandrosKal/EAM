<?php
    require 'models/connect.php';
    require 'models/users.php';
    $title = 'Σύνδεση Χρήστη';
    if ( isset( $_SESSION[ 'userid' ] ) ) {
        header('Location: index.php' );
    }

    if ( empty( $_POST ) ) {
        require 'views/header.php';
        require 'views/user/form_errors.php';
        require 'views/user/login_form.php';
        require 'views/footer.php';
    }
    else {
        //Authenticate user
        $user = authenticate_user( $_POST );
        if ( $user === false ) {
            $errors[] = 'Τα στοιχεία που δώσατε δεν είναι σωστά';
            require 'views/header.php';
            require 'views/user/form_errors.php';
            require 'views/user/login_form.php';
            require 'views/footer.php';
        }
        else {
            foreach ( $user as $key => $value ) {
                $_SESSION[ $key ] = $value;
            }
            if($_POST['persistent'] == true) {
                setcookie('uid',
                          $user['uid'],
                          time() + (60 * 60 * 24 * 365));
                }
            }
            header('Location: index.php' );
        }
    }
?>

