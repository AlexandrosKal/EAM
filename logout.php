<?php
    require 'models/connect.php';
    require 'models/users.php';
    if ( isset( $_SESSION[ 'uid' ] ) ) {
        session_destroy();
        if (isset($_COOKIE['persistent'])) {
            unset($_COOKIE['persistent']);
            setcookie('persistent', '', time() - 3600, '/'); // empty value and old timestamp
        }
    }
    header('Location: index.php' );
?>
