<?php
    require 'models/connect.php';
    require 'models/users.php';
    if ( isset( $_SESSION[ 'uid' ] ) ) {
        session_destroy();
        if (isset($_COOKIE['uid_ika'])) {
            unset($_COOKIE['uid_ika']);
            setcookie('uid_ika', '', time() - 3600, '/'); // empty value and old timestamp
        }
    }
    header('Location: index.php' );
?>
