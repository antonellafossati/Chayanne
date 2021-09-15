<?php

$connection = new mysqli( 'localhost', 'root', '', 'chayanne_lovers' );

if($connection->errno !== 0) {
    die('Error');
}
