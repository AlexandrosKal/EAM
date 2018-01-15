<?php
function get_prestored_data($amka) {
    global $db;
    $sql_query = "SELECT is_employer,
                      is_employee,
                      is_pensioner,
                      is_disabled,
                      stamps,
                      stamps_this_month
                  FROM presaved_data
                  WHERE amka = ?
                  LIMIT 1";
    $stmt = mysqli_prepare($db, $sql_query);
    mysqli_stmt_bind_param($stmt, "i", $amka);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    mysqli_stmt_bind_result($stmt, $is_employer, $is_employee, $is_pensioner,
                            $is_disabled, $stamps, $stamps_this_month);
    if (mysqli_stmt_fetch($stmt) == NULL) {
        return false;
    }
    $retData = ['is_disabled' => $is_disabled,
                'is_pensioner' => $is_pensioner,
                'is_employer' => $is_employer,
                'is_employee' => $is_employee,
                'stamps' => $stamps,
                'stamps_this_month' => $stamps_this_month,];
    return $retData;
}
function amka_exists($amka) {
    global $db;
    $sql_query = "SELECT amka
                  FROM presaved_data
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
function afm_exists($afm) {
    global $db;
    $sql_query = "SELECT amka
                  FROM presaved_data
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
function id_num_exists($id_num) {
    global $db;
    $sql_query = "SELECT amka
                  FROM presaved_data
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
