<?php include "../connect.php" ?>
<?php
$stmt = $pdo->prepare("UPDATE project SET project_name=?,project_roadmap=?, province=?, budget_year=?
WHERE project_id=?"); 
$stmt->bindParam(1, $_POST["project_name"]); 
$stmt->bindParam(2, $_POST["project_roadmap"]);
$stmt->bindParam(3, $_POST["province"]);
$stmt->bindParam(4, $_POST["budget_year"]);
$stmt->bindParam(5, $_POST["project_id"]);
if ($stmt->execute()) 
echo "แก้ไข" . $_POST["project_name"] . " สำเร็จ";
header("refresh: 1;url=index.php");
?>