<?php

require 'inc/connection.php';

$first_name     = trim ($_POST['first_name']);
$last_name      = trim ($_POST['last_name']);
$date_of_birth  = trim ($_POST['date_of_birth']);
$email          = trim ($_POST['email']);
$zodiac_sign    = intval ($_POST['zodiac_sign']);
$song           = trim ($_POST['song']);
$user_name      = trim ($_POST['user_name']);
$password       = trim ($_POST['password']);
$notifications  = trim ($_POST['notifications']);
$comments       = trim ($_POST['comments']);


if (! empty ($date_of_birth) ) {
    $time_of_birth = strtotime($date_of_birth);
    $date = date('Y-m-d', $time_of_birth);
}

if (empty ($date) || $date !== $date_of_birth ) {
    $date_of_birth = false;
}

if (! empty($email) && is_string ($email)){
    $email = filter_var($email, FILTER_VALIDATE_EMAIL );
}

if (
    ! empty ($first_name) && is_string ($first_name) &&
    ! empty ($last_name) && is_string ($last_name) &&
    $date_of_birth !== false &&
    ! empty ($email) &&
    ! empty ($zodiac_sign) && is_int ($zodiac_sign) &&
    ! empty ($song) && is_string ($song) &&
    ! empty ($user_name) && is_string ($user_name) &&
    ! empty ($password) && is_string ($password) &&
    ! empty ($notifications) && is_string ($notifications) &&
    ! empty ($comments) && is_string ($comments)
)
{ 
    $connection->query(
        "INSERT INTO `usuaries` (`first_name`, `last_name`, `date_of_birth`, `email`, `zodiac_sign`, 
        `song`, `user_name`, `password`, `notifications`, `comments`) 
        VALUES ( 
        '" . $connection -> real_escape_string ( $first_name ) . "',
        '" . $connection -> real_escape_string ( $last_name ) . "',
        '" . $connection -> real_escape_string ( $date_of_birth ) . "',
        '" . $connection -> real_escape_string ( $email ) . "',
        '" . $connection -> real_escape_string ( $zodiac_sign ) . "',
        '" . $connection -> real_escape_string ( $song ) . "',
        '" . $connection -> real_escape_string ( $user_name ) . "',
        '" . $connection -> real_escape_string ( $password ) . "',
        '" . $connection -> real_escape_string ( $notifications ) . "',
        '" . $connection -> real_escape_string ( $comments ) . "'
        );"
    );

    if ($result === false){
        $error = true;
    }
} else {
    echo 'Registro incorrecto';
}

if ($error) {
    header ('Location: error.html');
} else {
    header ('Location: login.html');
}   