<?php
require 'models/connect.php';
require 'models/validators.php';
require 'models/users.php';
require 'models/requests.php';
require 'models/documents.php';

if (isset($_SESSION['uid'])) {

    $success = false;
    if (!empty($_POST)) {
        if (validate_type($_POST['type']) {
            $success = create_request($_POST);
            if ($success) {
                if (!empty($_FILES)) {
                    $doc_added = add_document($_POST, $_FILES);
                } else {
                    $errors[] = "Δέν υποβάλατε αρχεία";
                }
            }
        } else {
            $errors[] = "Λάθος τύπος";
        }
    }
}
require 'views/request_form.php';
require 'views/footer.php';
?>
