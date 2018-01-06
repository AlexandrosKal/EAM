<?php
    if (isset($_GET['register'])) {
        require 'models/connect.php';
        require 'models/users.php';
        require 'models/validators.php';
        require 'models/prestored_data.php';
        //If user has logged in, redirect to index.php
        if (isset($_SESSION['uid'])) {
            header('Location: index.php' );
        }
        $title = 'Εγγραφή Χρήστη';
        //User has not logged in, dhow register form
        if (!empty($_POST)) {
            $errors = get_register_errors($_POST);
            if (empty ($errors)) {
                //insert user info to database
                $pre = get_prestored_data($_POST['amka']);
                $_POST = array_merge($_POST, $pre);
                $result = register_user($_POST);
                if ($result !== false) {
                    $user = get_user_data($result);
                    foreach ($user as $key => $value) {
                        $_SESSION[$key] = $value;
                    }
                    header('Location: index.php');
                }
                else {
                    //500
                }
            }
            //require 'views/header.php';
            require 'views/signup_login.php';
            //require 'views/footer.php';
        }
        else {
            //require 'views/header.php';
            require 'views/signup_login.php';
            //require 'views/footer.php';
        }
    } else {
        require 'models/connect.php';
        require 'models/users.php';
        $title = 'Σύνδεση Χρήστη';
        $login = true;
        if ( isset( $_SESSION[ 'uid' ] ) ) {
            header('Location: index.php' );
        }

        if ( empty( $_POST ) ) {
            //require 'views/header.php';
            require 'views/signup_login.php';
            //require 'views/footer.php';
        }
        else {
            $user = authenticate_user( $_POST );
            if ( $user === false ) {
                $errors[] = 'Τα στοιχεία που δώσατε δεν είναι σωστά';
                //require 'views/header.php';
                require 'views/signup_login.php';
                //require 'views/footer.php';
            }
            else {
                $user = get_user_data($user);
                foreach ( $user as $key => $value ) {
                    $_SESSION[ $key ] = $value;
                }
                if(isset($_POST['persistent']) && !empty($_POST['persistent'])) {
                    setcookie('uid_ika',
                              $user['uid'],
                              time() + (60 * 60 * 24 * 365));
                }
                header('Location: index.php' );
            }
        }
    }
?>
