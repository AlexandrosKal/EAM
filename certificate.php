<?php
require 'models/connect.php';
require 'models/users.php';
if (isset($_SESSION['uid']) && isset($_GET['type'])) {
    $user = get_user_data($_SESSION['uid']);
    if ($user === false) {
        require 'views/500.php';
    } else {
        if($_GET['type'] == "amka") {
            require 'views/AMKA_certificate.php';
        } else if ($_GET['type' == "disabled") {
            require 'views/disabled_certificate.php';
        }
    }
} else {
    require 'views/signup_login.php';
}
?>
