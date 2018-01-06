<?php

//function for user creation
function register_user($data) {
    global $db;
    $afm = $data['afm'];
    $amka = $data['amka'];
    $email = $data['email'];
    $id_num = $data['id_num'];
    $street = $data['street'];
    $street_num = $data['street_num'];
    $area = $data['area'];
    $postal = $data['postal'];
    list($day, $month, $year) = explode('/', $data['date_of_birth']);
    $dob = implode('-', array($year, $month, $day));
    $stamps = $data['stamps'];
    $stamps_this_month = $data['stamps_this_month'];
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
                      is_employee = ?,
                      street = ?,
                      street_num = ?,
                      area = ?,
                      postal = ?,
                      date_of_birth = ?,
                      stamps = ?,
                      stamps_this_month = ?";
    $stmt = mysqli_prepare($db, $sql_query);
    mysqli_stmt_bind_param($stmt, "iisssssiiiisisisii", $afm, $amka,
                           $id_num, $hash, $first_name, $last_name,
                           $email, $is_disabled, $is_pensioner,
                           $is_employer, $is_employee, $street,
                           $street_num, $area, $postal, $dob,
                           $stamps, $stamps_this_month);
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
                      id_num,
                      first_name,
                      last_name,
                      email,
                      is_disabled,
                      is_pensioner,
                      is_employer,
                      is_employee,
                      street,
                      street_num,
                      area,
                      postal,
                      date_of_birth,
                      stamps,
                      stamps_this_month
                  FROM users
                  WHERE uid = ?
                  LIMIT 1";
    $stmt = mysqli_prepare($db, $sql_query);
    mysqli_stmt_bind_param($stmt, "i", $uid);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    mysqli_stmt_bind_result($stmt, $afm, $amka, $id_num,
                            $first_name, $last_name, $email, $is_disabled,
                            $is_pensioner, $is_employer, $is_employee, $street,
                            $street_num, $area, $postal, $dob, $stamps,
                            $stamps_this_month);
    if (mysqli_stmt_fetch($stmt) == NULL) {
        return false;
    }
    $retData = ['uid' => $uid,
                'afm' => $afm,
                'amka' => $amka,
                'id_num' => $id_num,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'is_disabled' => $is_disabled,
                'is_pensioner' => $is_pensioner,
                'is_employer' => $is_employer,
                'is_employee' => $is_employee,
                'street' => $street,
                'street_num' => $street_num,
                'area' => $area,
                'postal' => $postal,
                'dob' => $dob,
                'stamps' => $stamps,
                'stamps_this_month' => $stamps_this_month,];
    return $retData;
}

// function to update user
function update_email($data, $uid) {
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

function update_password($data, $uid) {
    global $db;
    $hash = password_hash($data['new_password'], PASSWORD_DEFAULT);
    $sql_query = "UPDATE users
                  SET password = ?
                  WHERE uid = ? ";
    $stmt = mysqli_prepare($db , $sql_query);
    mysqli_stmt_bind_param($stmt, "si", $hash, $uid);
    mysqli_stmt_execute ($stmt);
    if (mysqli_affected_rows($db)) {
        return true ;
    }
    return false ;
}

function is_duplicate_amka($amka) {
    global $db;
    $sql_query = "SELECT amka
                  FROM users
                  WHERE amka = ?
                  LIMIT 1";
    $stmt = mysqli_prepare($db, $sql_query);
    mysqli_stmt_bind_param($stmt, "i", $amka);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    mysqli_stmt_bind_result($stmt, $amka);
    if (mysqli_stmt_fetch($stmt) == NULL) {
        return false;
    }
    return true;
}

function is_duplicate_email($email) {
    global $db;
    $sql_query = "SELECT email
                  FROM users
                  WHERE email = ?
                  LIMIT 1";
    $stmt = mysqli_prepare($db, $sql_query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    mysqli_stmt_bind_result($stmt, $email);
    if (mysqli_stmt_fetch($stmt) == NULL) {
        return false;
    }
    return true;
}

function is_duplicate_afm($afm) {
    global $db;
    $sql_query = "SELECT afm
                  FROM users
                  WHERE afm = ?
                  LIMIT 1";
    $stmt = mysqli_prepare($db, $sql_query);
    mysqli_stmt_bind_param($stmt, "i", $afm);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    mysqli_stmt_bind_result($stmt, $afm);
    if (mysqli_stmt_fetch($stmt) == NULL) {
        return false;
    }
    return true;
}

function is_duplicate_id_num($id_num) {
    global $db;
    $sql_query = "SELECT id_num
                  FROM users
                  WHERE id_num = ?
                  LIMIT 1";
    $stmt = mysqli_prepare($db, $sql_query);
    mysqli_stmt_bind_param($stmt, "s", $id_num);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    mysqli_stmt_bind_result($stmt, $id_num);
    if (mysqli_stmt_fetch($stmt) == NULL) {
        return false;
    }
    return true;
}

?>
