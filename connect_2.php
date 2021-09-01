<?php
include 'config.php';
$info = array(
    'host' => $HOST,
    'user' => $USERNAME,
    'password' => $PASSWORD,
    'dbname' => $DBNAME
);
$conn = mysqli_connect($info['host'], $info['user'], $info['password'], $info['dbname']) or die('Error connection database!');
mysqli_set_charset($conn, $CHARSET);