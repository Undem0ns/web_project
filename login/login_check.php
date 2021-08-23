<?php include '../connect.php' ?>
<?php session_start(); ?>
<?php
$stmt = $pdo->prepare("SELECT * FROM ... WHERE ... = ? AND ... = ?");
$stmt->bindParam(1, $_POST["email"]);
$stmt->bindParam(2, $_POST["em_pass"]);
$stmt->execute();
$row = $stmt->fetch();

if(!empty($row)){
    
    $_SESSION["email"] = $row["em_pass"];
    header("Location: list1.php");
}else{
    echo "เข้าสู่ระบบล้มเหลว" . "<br>";
    echo "กลับไปยังหน้าเข้าสู่ระบบใน 3 วินาที" . "<br>";
    echo "<a href='login/index.php'>คลิกเพื่อเข้าสู่ระบบอีกครั้ง</a>";
    echo "<meta http-equiv='refresh' content='3,URL=login/index.php' />";
}
?>
