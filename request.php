<?php
require 'models/connect.php';
require 'models/validators.php';
require 'models/users.php';
require 'models/requests.php';
require 'models/documents.php';
if (isset($_SESSION['uid'])) {
    $rid = false;
    if (!empty($_GET)) {
        if (validate_type($_GET['type']) {
            if (!empty($_FILES)) {
                $rid = create_request($_POST);
                if ($rid) {
                    foreach($_FILES as $file) {
                        $doc_added = add_document($_rid, $_file);
                    }
                    if ($doc_added) {
                        require 'request.php';
                    } else {
                        require 'views/500.php';
                    }
                } else {
                    require 'views/500.php';
                }
            } else {
                $errors[] = "Δέν υποβάλατε αρχεία";
            }
        } else {
            $errors[] = "Λάθος τύπος";
        }
    }
} else {
    header('Location: signup_login.php' );
}
?>
