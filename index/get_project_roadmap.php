<?php
include('../connect_2.php');
$sql = "SELECT * FROM project_roadmap WHERE development_id={$_GET['development_id']}";
$query = mysqli_query($conn, $sql);

$json = array();
while($result = mysqli_fetch_assoc($query)) {    
    array_push($json, $result);
}
echo json_encode($json);