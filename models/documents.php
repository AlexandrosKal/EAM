<?php

function add_document($data, $file) {
    global $db;
    $rid = $data['rid'];
    $filename = $data['filename'];
    $path = "uploads/";
    $file_extension = pathinfo($file['name'], PATHINFO_EXTENSION);
    $file_name = uniqid().".".$file_extension;
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
        move_uploaded_file( $file['tmp_name'] ,$path.$file_name);
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
