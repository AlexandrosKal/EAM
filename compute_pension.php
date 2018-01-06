<?php
require 'models/connect.php';
require 'models/validators.php';
if (!empty($_POST)) {
    $errors = get_pension_errors($_POST);
    if(!empty($errors)) {
        $pension = array_sum($_POST) / count($_POST)**5;
    }
}
require 'views/pension_calculator.php';
?>
