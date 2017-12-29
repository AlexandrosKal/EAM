<?php

function add_document($data) {
    global $db;
    $rid = $data['rid'];
    $filename = $data['filename'];
    $path = $data['path'];
    $sql_query = "INSERT INTO documents
                  SET rid = ?,
                      path = ?";
    $stmt = mysqli_prepare($db, $sql_query);
    mysqli_stmt_bind_param($stmt, "is", $rid, $path);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    if (mysqli_affected_rows($db) != 1) {
        return false;
    } else {
        move_uploaded_file( $filename , $path);
        return mysqli_insert_id($db);
    }
}

function get_document($did) {
    global $db;
    $sql_query = "SELECT rid,
                      path,
                  FROM documents
                  WHERE did = ?
                  LIMIT 1";
    $stmt = mysqli_prepare($db, $sql_query);
    mysqli_stmt_bind_param($stmt, "i", $did);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    mysqli_stmt_bind_result($stmt, $rid, $path);
    if (mysqli_stmt_fetch($stmt) == NULL) {
        return false;
    }
    $retData = ['did' => $did,
                'rid' => $rid,
                'path' => $path, ];
    return $retData;
}

?>
