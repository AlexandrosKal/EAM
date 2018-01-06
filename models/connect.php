<?php
global $db;
$db = mysqli_connect(
    '127.0.0.1',
    'root',
    'test',
    'EAM'
);
if ( mysqli_connect_errno() ) {
    echo "Failed to connect with the database:" . mysqli_connect_error();
}
mysqli_query( $db, "SET NAMES 'utf8'");
mysqli_query( $db, "SET CHARACTER SET 'utf8'");
session_start();
if(!isset($_SESSION['uid'])) {
    if(isset($_COOKIE['uid'])) {
        $user = get_user_data($_COOKIE['uid']);
        foreach ( $user as $key => $value ) {
            $_SESSION[ $key ] = $value;
        }
    }
}
?>
