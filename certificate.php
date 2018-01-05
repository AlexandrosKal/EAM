<?php
require 'models/connect.php';
require 'models/users.php';

if (isset($_SESSION['uid']) && isset($_GET['type'])) {
    $user = get_user_data($_SESSION['uid']);
    if ($user === false) {
            $errors[] = "σφαλμα στη βαση";
            //500
    }
} else {
    // mb redriect to inex
    require 'views/certificates.php';
}
?>
