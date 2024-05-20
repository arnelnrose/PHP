<?php
/*
        Hashing - transforming sensitive data(password)
        into letters, number, and/or symbolds via a
        mathematical process. (similar to encryption)
        Hides the original date from 3rd parties.
    */

$password = "esor1234";
$hash = password_hash($password, PASSWORD_DEFAULT);

if (password_verify("esor1234", $hash)) {
    echo "You are logged in!";
} else {
    echo "Incorrect password.";
}
