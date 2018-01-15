<?php
function add_message($data) {
    global $db;
    $email = $data['email'];
    $last_name = $data['last_name'];
    $first_name = $data['first_name'];
    $message = $data['message'];
    if (empty($data['phone'])) {
        $phone = null;
    } else {
        $phone = $data['phone'];
    }
    $sql_query = "INSERT INTO contact_messages
                  SET first_name = ?,
                      last_name = ?,
                      email = ?,
                      message = ?,
                      phone = ?";
    $stmt = mysqli_prepare($db, $sql_query);
    mysqli_stmt_bind_param($stmt, "ssssi", $first_name, $last_name,
                           $email, $message, $phone);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    if (mysqli_affected_rows($db) != 1) {
        return false;
    } else {
        return mysqli_insert_id($db);
    }
}
?>
