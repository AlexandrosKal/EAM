<?php

//function for user creation
function register_user($data) {
    global $db;
    $afm = $data['afm'];
    $amka = $data['amka'];
    $email = $data['email'];
    $id_num = $data['id_num'];
    $is_employee = intval($data['is_employee']);
    $is_employer = intval($data['is_employer']);
    $is_disabled = intval($data['is_disabled']);
    $is_pensioner = intval($data['is_pensioner']);
    $last_name = $data['last_name'];
    $first_name = $data['first_name'];
    $hash = password_hash($data['password'], PASSWORD_DEFAULT);
    $sql_query = "INSERT INTO users
                  SET afm = ?,
                      amka = ?,
                      id_num = ?,
                      password = ?,
                      first_name = ?,
                      last_name = ?,
                      email = ?,
                      is_disabled = ?,
                      is_pensioner = ?,
                      is_employer = ?,
                      is_employee = ?";
    $stmt = mysqli_prepare($db, $sql_query);
    mysqli_stmt_bind_param($stmt, "iisssssiiii", $afm, $amka,
                           $id_num, $hash, $first_name, $last_name,
                           $email, $is_disabled, $is_pensioner,
                           $is_employer, $is_employee);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    if (mysqli_affected_rows($db) != 1) {
        return false;
    } else {
        return mysqli_insert_id($db);
    }
};

//function for user authentication
function authenticate_user($data) {
    global $db;
    $email = $data['email'];
    $password = $data['password'];
    $stmt = mysqli_prepare($db,
                           "SELECT uid,
                                password
                            FROM users
                            WHERE email = ?
                            LIMIT 1");
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    mysqli_stmt_bind_result($stmt, $uid, $hash);
    if (mysqli_stmt_num_rows($stmt)) {
        mysqli_stmt_fetch($stmt);
        $verified = password_verify($password, $hash);
        if ($verified) {
            return $uid;
        } else {
            return false;
        }
    } else {
        return false ;
    }
}

// collects user data and returns them in array form
function get_user_data($uid) {
    global $db;
    $sql_query = "SELECT afm,
                      amka,
                      idnum,
                      firstname,
                      lastname,
                      email,
                      is_disabled,
                      is_pensioner,
                      is_employer,
                      is_employee
                  FROM users
                  WHERE uid = ?
                  LIMIT 1";
    $stmt = mysqli_prepare($db, $sql_query);
    mysqli_stmt_bind_param($stmt, "i", $uid);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    mysqli_stmt_bind_result($stmt, $afm, $amka, $id_num, $username,
                            $first_name, $last_name, $email, $is_disabled,
                            $is_pensioner, $is_employer, $is_employee);
    if (mysqli_stmt_fetch($stmt) == NULL) {
        return false;
    }
    $retData = ['userid' => $uid,
                'afm' => $afm,
                'amka' => $amka,
                'id_num' => $id_num,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'is_disabled' => $is_disabled,
                'is_pensioner' => $is_pensioner,
                'is_employer' => $is_employer,
                'is_employee' => $is_employee, ];
    return $retData;
}

// function to update user
function update_user($data, $uid) {
    global $db;
    $sql_query = "UPDATE users
                  SET email = ?
                  WHERE uid = ? ";
    $stmt = mysqli_prepare($db , $sql_query);
    mysqli_stmt_bind_param($stmt, "si", $data['email'], $uid);
    mysqli_stmt_execute ($stmt);
    if (mysqli_affected_rows($db)) {
        return true ;
    }
    return false ;
}

?>

