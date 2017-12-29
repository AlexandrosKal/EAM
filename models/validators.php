
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
    return (is_int($afm) && $afm_length == 9);
}

function validate_amka($amka) {
    $amka_length = strlen((string)$amka);
    return (is_int($amka) && $amka_length == 11);
}

function validate_id_num($id_num) {
    return (strlen($id_num == 8));
}

//Returns true if email is valid, otherwise false
function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

//Return true if password meets the specified security details
function validate_password($password) {
    return (strlen(password) >= 8 && strlen($password <= 32));
}

//Returns an empty map if data are valid, otherwise a map with error messages
function get_register_errors($data) {
    $messages = [];
    if (empty($data['first_name']) ||
        empty($data['last_name']) ||
        empty($data['amka']) ||
        empty($data['id_num']) ||
        empty($data['afm']) ||
        empty($data['email']) ||
        empty($data['password'])
       ) {
        $messages[] = 'Παρακαλούμε συμπληρώστε όλα τα πεδία';
        return $messages;
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
        $messages[] = 'Μη επιτρεπτός κωδικός. Ο κωδικός σας πρέπει να περιλαμβάνει τουλάχιστον 8 ψηφία.';
    }
    return $messages;
}

?>
