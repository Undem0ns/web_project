

<?php
    include '../connect.php';
    session_start();
$stmt = $pdo->prepare("SELECT * FROM user WHERE user_email = ? AND user_password = ?");
$stmt->bindParam(1, $_POST["user_email"]);
$stmt->bindParam(2, $_POST["user_password"]);
$stmt->execute();
$row = $stmt->fetch();
if(!empty($row)){

    setcookie("user_email",$row["user_email"], time() + (86400 * 30), "/");
    setcookie("user_id",$row["user_id"], time() + (86400 * 30), "/");
    setcookie("user_name",$row["user_name"], time() + (86400 * 30), "/");
    
    
    $_SESSION["user_email"] = $row["user_password"];  
    header("Location:../index/index.php");
}else{
    echo "เข้าสู่ระบบล้มเหลว" . "<br>";
    echo "กลับไปยังหน้าเข้าสู่ระบบใน 3 วินาที" . "<br>";
    echo "<a href='index.php'>คลิกเพื่อเข้าสู่ระบบอีกครั้ง</a>";
    echo "<meta http-equiv='refresh' content='3,URL=index.php' />";
}

?>


<?php 
//  if(isset($_POST['submit'])){
//     session_start();
//     $_SESSION['e_mail'] = htmlentities($_POST['e_mail']);
//     header('location: test.php  ');
//  }

?>

