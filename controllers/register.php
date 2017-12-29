<?php
    require 'models/connect.php';
    require 'models/users.php';
    require 'models/validators.php';
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
            $result = register_user($_POST);
            if ($result !== false) {
                $user = get_user_data($result);
                foreach ($user as $key => $value) {
                    $_SESSION[$key] = $value;
                }
                standardRedirect('index.php');
            }
            else {
                $errors[] = 'Προέκυψε σοβαρό σφάλμα, παρακαλούμε προσπαθήστε αργότερα.';
            }
        }
        require 'views/header.php';
        require 'views/user/form_errors.php';
        require 'views/user/register_form.php';
        require 'views/footer.php';
    }
    else {
        require 'views/header.php';
        require 'views/user/form_errors.php';
        require 'views/user/register_form.php';
        require 'views/footer.php';
    }
?>
