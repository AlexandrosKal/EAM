<?php

function create_request($data) {
    global $db;
    $uid = data['uid'];
    $type = data['type'];
    $resolved = intval(false);
    $sql_query = "INSERT INTO requests
                  SET uid = ?,
                      type = ?,
                      resolved = ?";
    $stmt = mysqli_prepare($db, $sql_query);
    mysqli_stmt_bind_param($stmt, "is", $uid, $type, $resolved);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    if (mysqli_affected_rows($db) != 1) {
        return false;
    } else {
        return mysqli_insert_id($db);
    }
}

function get_request($did) {
    global $db;
    $sql_query = "SELECT uid,
                      resloved,
                  FROM documents
                  WHERE did = ?
                  LIMIT 1";
    $stmt = mysqli_prepare($db, $sql_query);
    mysqli_stmt_bind_param($stmt, "i", $rid);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    mysqli_stmt_bind_result($stmt, $uid, $resolved);
    if (mysqli_stmt_fetch($stmt) == NULL) {
        return false;
    }
    $retData = ['rid' => $rid,
                'uid' => $uid,
                'resolved' => $resolved, ];
    return $retData;
}

function resolve_request($data) {
    $rid = $data['rid'];
    $sql_query = "UPDATE requests
                  SET resolved = ?
                  WHERE rid = ? ";
    $stmt = mysqli_prepare($db , $sql_query);
    mysqli_stmt_bind_param($stmt, "ii", intval(true), $rid);
    mysqli_stmt_execute ($stmt);
    if (mysqli_affected_rows($db)) {
        return true ;
    }
    return false ;
}

?>
