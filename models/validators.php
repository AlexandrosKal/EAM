<?php

//Returns true if string contains valid characthers, otheerwise false
function validate_name($string) {
    if (preg_match("/^[a-zA-ΖΑ-Ωα-ωάόώήύίέΆΌΏΉΎΊΈ]+$/", $string)) {
        return true;
    }
    return false;
}

function validate_afm($afm) {
    $afm_length = strlen((string)$afm);

    return (is_numeric($afm) && $afm_length == 9 && afm_exists($afm));
}

function validate_amka($amka) {
    $amka_length = strlen((string)$amka);
    return (is_numeric($amka) && $amka_length == 11 && amka_exists($amka));
}

function validate_id_num($id_num) {
    return (strlen($id_num) == 8 && id_num_exists($id_num));
}

function validate_postal($postal) {
    $postal_length = strlen((string)$postal);
    return (is_numeric($postal) && $postal_length == 5);
}

//Returns true if email is valid, otherwise false
function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

//Return true if password meets the specified security details
function validate_password($password) {
    return (strlen($password) >= 8 && strlen($password <= 32));
}

function validate_date($date) {
    if (false === strtotime($date)) {
        return false;
    }
    list($day, $month, $year) = explode('/', $date);
    return checkdate($month, $day, $year);
}

function validate_type($type) {
    return ($type == "disabled" || $type == "pension");
}

//Returns an empty map if data are valid, otherwise a map with error messages
function get_register_errors($data) {
    $messages = [];
    foreach ($data as $key => $value) {
        if (empty($value)) {
            $messages[] = 'Παρακαλούμε συμπληρώστε όλα τα πεδία';
            break;
        }
    }
    if (!validate_name($data['first_name'])) {
        $messages[] = 'Το όνομα σας περιέχει μη επιτρεπτούς χαρακτήρες. Παρακαλούμε εισάγετε μόνο γράμματα της αλφαβήτας';
    }
    if (!validate_name($data['last_name'])) {
        $messages[] = 'Το επώνυμό σας περιέχει μη επιτρεπτούς χαρακτήρες. Παρακαλούμε εισάγετε μόνο γράμματα της αλφαβήτας';
    }
    if (!validate_email($data['email'])) {
        $messages[] = 'Το e-mail σας δεν είναι έγκυρο. Παρακούμε εισάγετε ένα έγκυρο e-mail.';
    }
    if (!validate_password($data['password'])) {
        $messages[] = 'Μη επιτρεπτός κωδικός. Ο κωδικός σας πρέπει να περιλαμβάνει τουλάχιστον 8-32 ψηφία.';
    }
    if (is_duplicate_email($data['email'])) {
        $messages[] = 'Το e-mail σας υπάρχει ήδη';
    }
    if (!validate_amka($data['amka'])) {
        $messages[] = 'Το αμκα δεν υπάρχει ή ειναι λαθος';
    }
    if (is_duplicate_amka($data['amka'])) {
        $messages[] = 'Υπάρχει ήδη λογαριασμός με αυτο το άμκα';
    }
    if (!validate_afm($data['afm'])) {
        $messages[] = 'Το αφμ δεν υπάρχει ή ειναι λαθος';
    }
    if (is_duplicate_afm($data['afm'])) {
        $messages[] = 'Υπάρχει ήδη λογαριασμός με αυτο το αφμ';
    }
    if (!validate_id_num($data['id_num'])) {
        $messages[] = 'Ο αριθμος δελτιου ταυτότητας δεν υπάρχει ή ειναι λαθος';
    }
    if (is_duplicate_afm($data['id_num'])) {
        $messages[] = 'Υπάρχει ήδη λογαριασμός με αυτο το αριθμό ταυτότητας';
    }
    if (!validate_name($data['street'])) {
        $messages[] = 'Το όνομα οδού σας περιέχει μη επιτρεπτούς χαρακτήρες. Παρακαλούμε εισάγετε μόνο γράμματα της αλφαβήτας';
    }
    if (!is_numeric($data['street_num'])) {
        $messages[] = 'O αριθμός οδού σας πρέπει να περιεχει μόνο αριθμούς';
    }
    if (!validate_name($data['street'])) {
        $messages[] = 'Το όνομα οδού σας περιέχει μη επιτρεπτούς χαρακτήρες. Παρακαλούμε εισάγετε μόνο γράμματα της αλφαβήτας';
    }
    if (!validate_postal($data['postal'])) {
        $messages[] = 'O αριθμός οδού σας πρέπει να περιεχει μόνο αριθμούς';
    }
    if (!validate_date($data['date_of_birth'])) {
        $messages[] = 'Λαθος ημερομηνία γέννησης';
    }

    return $messages;
}

function get_pension_errors($data) {
    $messages = [];
    foreach ($data as $key => $value) {
        if (empty($value)) {
            $messages[] = 'Παρακαλούμε συμπληρώστε όλα τα πεδία';
            break;
        }
    }

    foreach ($data as $key => $value) {
        if (is_numeric($value)) {
            $messages[] = "$key δεν ειναι έγκυρος αριθμός";
        }
    }

    return $messages;
}


function get_message_errors($data) {
    $messages = [];
    foreach ($data as $key => $value) {
        if (empty($value)) {
            $messages[] = 'Παρακαλούμε συμπληρώστε όλα τα πεδία';
            break;
        }
    }

    if (!validate_name($data['first_name'])) {
        $messages[] = 'Το όνομα σας περιέχει μη επιτρεπτούς χαρακτήρες. Παρακαλούμε εισάγετε μόνο γράμματα της αλφαβήτας';
    }
    if (!validate_name($data['last_name'])) {
        $messages[] = 'Το επώνυμό σας περιέχει μη επιτρεπτούς χαρακτήρες. Παρακαλούμε εισάγετε μόνο γράμματα της αλφαβήτας';
    }
    if (!validate_email($data['email'])) {
        $messages[] = 'Το e-mail σας δεν είναι έγκυρο. Παρακούμε εισάγετε ένα έγκυρο e-mail.';
    }
    if (!is_numeric($data['phone']) || (strlen($data['phone']) != 10)) {
        $messages[] = "Το τηλέφωνο σας δεν ειναι έγκυρος αριθμός";
    }
    return $messages;

}

function get_stamp_form_errors($data) {
    $messages = [];
    foreach ($data as $key => $value) {
        if (empty($value)) {
            $messages[] = 'Παρακαλούμε συμπληρώστε όλα τα πεδία';
            break;
        }
    }
    if (!validate_name($data['first_name'])) {
        $messages[] = 'Το όνομα σας περιέχει μη επιτρεπτούς χαρακτήρες. Παρακαλούμε εισάγετε μόνο γράμματα της αλφαβήτας';
    }
    if (!validate_name($data['last_name'])) {
        $messages[] = 'Το επώνυμό σας περιέχει μη επιτρεπτούς χαρακτήρες. Παρακαλούμε εισάγετε μόνο γράμματα της αλφαβήτας';
    }
    if (!validate_amka($data['amka'])) {
        $messages[] = 'Το αμκα δεν υπάρχει ή ειναι λαθος';
    }
    if (is_duplicate_amka($data['amka'])) {
        $messages[] = 'Υπάρχει ήδη λογαριασμός με αυτο το άμκα';
    }
    if (!validate_afm($data['afm'])) {
        $messages[] = 'Το αφμ δεν υπάρχει ή ειναι λαθος';
    }
    if (is_duplicate_afm($data['afm'])) {
        $messages[] = 'Υπάρχει ήδη λογαριασμός με αυτο το αφμ';
    }
    if (!validate_id_num($data['id_num'])) {
        $messages[] = 'Ο αριθμος δελτιου ταυτότητας δεν υπάρχει ή ειναι λαθος';
    }
    if (is_duplicate_afm($data['id_num'])) {
        $messages[] = 'Υπάρχει ήδη λογαριασμός με αυτο το αριθμό ταυτότητας';
    }
}

?>
