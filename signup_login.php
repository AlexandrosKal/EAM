<?php
    if (isset($_GET['register'])) {
        require 'models/users.php';
        require 'models/connect.php';
        require 'models/validators.php';
        require 'models/prestored_data.php';
        //If user has logged in, redirect to index.php
        if (isset($_SESSION['uid'])) {
            header('Location: index.php' );
        }
        $title = 'Εγγραφή Χρήστη';
        //User has not logged in, dhow register form
        if (!empty($_POST)) {
            $register_errors = get_register_errors($_POST);
            if (empty ($register_errors)) {
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
                    require 'views/500.php';
                }
            } else {
                require 'views/signup_login.php';
            }
        }
        else {
            require 'views/signup_login.php';
        }
    } else {
        require 'models/users.php';
        require 'models/connect.php';
        $title = 'Σύνδεση Χρήστη';
        $login = true;
        if ( isset( $_SESSION[ 'uid' ] ) ) {
            header('Location: index.php' );
        }
        if ( empty( $_POST ) ) {
            require 'views/signup_login.php';
        }
        else {
            $user = authenticate_user( $_POST );
            if ( $user === false ) {
                $login_errors[] = 'Τα στοιχεία που δώσατε δεν είναι σωστά';
                require 'views/signup_login.php';
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
