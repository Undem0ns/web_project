<?php include "../connect.php" ?>
<?php
$stmt = $pdo->prepare("INSERT INTO test VALUES ('',?,?)");
$stmt->bindParam(1, $_POST["name"]);
$stmt->bindParam(2, $_POST["development_subject"]);

$stmt->execute(); 
$FoodID = $pdo->lastInsertId(); 

echo "เพิ่มโครงการสำเร็จ"
// header("location:detail.php?project_id=" . $_POST["project_id"]);


?>
