<?php

session_start();

if (! $_SESSION['validate_user'] ) {
    header ('Location: login.html');
    die();
}