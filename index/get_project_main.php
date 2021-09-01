<?php
include('../connect_2.php');
$sql = "SELECT * FROM project_main WHERE project_roadmap_id={$_GET['project_roadmap_id']}";
$query = mysqli_query($conn, $sql);

$json = array();
while($result = mysqli_fetch_assoc($query)) {    
    array_push($json, $result);
}
echo json_encode($json);