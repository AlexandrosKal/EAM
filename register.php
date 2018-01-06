<?php
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
                $errors[] = 'Προέκυψε σοβαρό σφάλμα, παρακαλούμε προσπαθήστε αργότερα.';
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
?>
