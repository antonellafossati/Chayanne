<?php

require 'inc/connection.php';

$username = trim($_POST['user_name']);
$password = trim($_POST['password']);

if (
    ! empty ($username) && is_string ($username) &&
    ! empty ($username) && is_string ($password)
) {
    $result = $connection->query( '
    SELECT id 
    FROM usuaries
    WHERE
    user_name = "' . $connection-> real_escape_string ($username) . '" AND
    password = "' . $connection-> real_escape_string ($password) . '"
    ');

    if ($result->num_rows) {
        session_start ();
        $_SESSION['validate_user'] = true;
        $_SESSION['user_name']     = $username;

        header ('Location: homepage.html');
        die();
    } else {
        session_unset();
        header ('Location: unauthorized.html');
        die();
    }
} else {
    header ('Location: unauthorized.html');
    die();
}