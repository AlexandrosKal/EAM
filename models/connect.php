<?php
global $db;
$db = mysqli_connect(
    '127.0.0.1',
    'secret',
    'xa0x0a',
    'EAM'
);
if ( mysqli_connect_errno() ) {
    echo "Failed to connect with the database:" . mysqli_connect_error();
}
session_start();
?>
