<?php
require 'models/users.php';
require 'models/connect.php';
require 'models/validators.php';
require 'models/requests.php';
require 'models/documents.php';
if (isset($_SESSION['uid'])) {
    $rid = false;
    if (!empty($_GET)) {
        if (validate_type($_GET['type'])) {
            if (!empty($_FILES)) {
                if (!empty($_FILES)) {
                    $success = false;
                    $rid = create_request(array_merge($_SESSION, $_GET));
                    if ($rid) {
                        foreach($_FILES as $file) {
                            $doc_added = add_document($rid, $file);
                        }
                        if ($doc_added) {
                            $success = true;
                            if($_GET['type'] == "pension") {
                                require 'views/application_pension.php';
                            } else {
                                require 'views/application_evaluation_disabled.php';
                            }
                        } else {
                            require 'views/500.php';
                        }
                    } else {
                        require 'views/500.php';
                    }
                } else {
                    require 'views/404.php';
                }
            } else {
                if($_GET['type'] == "pension") {
                    require 'views/application_pension.php';
                } else {
                    require 'views/application_evaluation_disabled.php';
                }
            }
        } else {
        }
    } else {
        require 'views/404.php';
    }
} else {
    header('Location: signup_login.php' );
}
?>
