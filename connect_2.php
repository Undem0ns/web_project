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


// ---------------------------------------------------------------------
// Use to insert into MySQL
$mysqli = new mysqli($HOST, $USERNAME, $PASSWORD, $DBNAME);
$mysqli->set_charset($CHARSET);


// $stmt = $mysqli->prepare("INSERT INTO project (project_id, project_name, user_id) VALUES (?, ?, ?)");

// $stmt->bind_param('sss', $val1, $val2, $val3);

// $val1 = '31911';
// $val2 = 'DEU';
// $val3 = '1';

// $stmt->execute();
