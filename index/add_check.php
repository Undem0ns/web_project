<?php include "../connect.php" ?>
<?php include "../connect_2.php" ?>
<?php

$ext = pathinfo(basename($_FILES['upload_file']['name']), PATHINFO_EXTENSION);

if ($ext == '') {
    $file_path = '';
} else {
  $new_file_name = uniqid('file_').".".$ext;
  $file_path = "upload_file/";
  $upload_path = $file_path.$new_file_name;
  
  $success = move_uploaded_file($_FILES['upload_file']['tmp_name'], $upload_path);
  $file_path = $new_file_name;
}

$TABLE_NAME = '';

if (isset($_POST['save'])) {
  $TABLE_NAME = 'project';
  echo "<script>";
  echo  " Swal.fire({
    position: 'center',
    icon: 'success',
    title: 'เพิ่มโครงการสำเร็จ',
    showConfirmButton: false,
    timer: 1500,
  })";
echo "</script>";
header("refresh: 2;url=dashboard.php");
  
} else {
  $TABLE_NAME = 'project_draft';
  echo "<script>";
  echo  " Swal.fire({
    position: 'center',
    icon: 'success',
    title: 'ร่างโครงการสำเร็จ',
    showConfirmButton: false,
    timer: 1500,
  })";
echo "</script>";
header("refresh: 2;url=dashboard.php");
}

// $stmt = $mysqli->prepare("INSERT INTO $TABLE_NAME (project_id, project_name, development_subject, project_roadmap, project_main, project_sub, operation_type, project_code, use_budget, budget_year, institution, province, target_user, project_objective, project_result, project_additional, budget_province_plan, budget_province_receive, budget_province_use, budget_department_plan, budget_department_receive, budget_department_use, budget_local_plan, budget_local_receive, budget_local_use, budget_private_plan, budget_private_receive, budget_private_use, user_id, file_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt = $mysqli->prepare("INSERT INTO $TABLE_NAME 
(project_name, development_subject, project_roadmap, project_main, project_sub,
operation_type, project_code, use_budget, budget_year, institution,
province, target_user, project_objective, project_result, project_additional,
budget_province_plan, budget_province_receive, budget_province_use, budget_department_plan, budget_department_receive,
budget_department_use, budget_local_plan, budget_local_receive, budget_local_use, budget_private_plan,
budget_private_receive, budget_private_use, user_id, file_path) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param('sssssssssssssssssssssssssssss', $var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8, $var9, $var10, $var11, $var12, $var13, $var14, $var15, $var16, $var17, $var18, $var19, $var20, $var21, $var22, $var23, $var24, $var25, $var26, $var27, $var28, $var29);


$var1 = $_POST["project_name"];
$var2 = $_POST["development_subject"];
$var3 = $_POST["project_roadmap"];
$var4 = $_POST["project_main"];
$var5 = $_POST["project_sub"];
$var6 = $_POST["operation_type"];
$var7 = $_POST["project_code"];
$var8 = $_POST["use_budget"];
$var9 = $_POST["budget_year"];
$var10 = $_POST["institution"];
$var11 = $_POST["province"];
$var12 = $_POST["target_user"];
$var13 = $_POST["project_objective"];
$var14 = $_POST["project_result"];
$var15 = $_POST["project_additional"];
$var16 = $_POST["budget_province_plan"];
$var17 = $_POST["budget_province_receive"];
$var18 = $_POST["budget_province_use"];
$var19 = $_POST["budget_department_plan"];
$var20 = $_POST["budget_department_receive"];
$var21 = $_POST["budget_department_use"];
$var22 = $_POST["budget_local_plan"];
$var23 = $_POST["budget_local_receive"];
$var24 = $_POST["budget_local_use"];
$var25 = $_POST["budget_private_plan"];
$var26 = $_POST["budget_private_receive"];
$var27 = $_POST["budget_private_use"];
$var28 = $_COOKIE["user_id"];
$var29 = $file_path;

$stmt->execute();


// $stmt = $pdo->prepare("INSERT INTO $TABLE_NAME VALUES ()");
// $stmt->bindParam(1 = $_POST["project_name"];
// $stmt->bindParam(2 = $_POST["development_subject"];
// $stmt->bindParam(3 = $_POST["project_roadmap"];
// $stmt->bindParam(4 = $_POST["project_main"];
// $stmt->bindParam(5 = $_POST["project_sub"];
// $stmt->bindParam(6 = $_POST["operation_type"];
// $stmt->bindParam(7 = $_POST["project_code"];
// $stmt->bindParam(8 = $_POST["use_budget"];
// $stmt->bindParam(9 = $_POST["budget_year"];
// $stmt->bindParam(10 = $_POST["institution"];
// $stmt->bindParam(11 = $_POST["province"];
// $stmt->bindParam(12 = $_POST["target_user"];
// $stmt->bindParam(13 = $_POST["project_objective"];
// $stmt->bindParam(14 = $_POST["project_result"];
// $stmt->bindParam(15 = $_POST["project_additional"];
// $stmt->bindParam(16 = $_POST["budget_province_plan"];
// $stmt->bindParam(17 = $_POST["budget_province_receive"];
// $stmt->bindParam(18 = $_POST["budget_province_use"];
// $stmt->bindParam(19 = $_POST["budget_department_plan"];
// $stmt->bindParam(20 = $_POST["budget_department_receive"];
// $stmt->bindParam(21 = $_POST["budget_department_use"];
// $stmt->bindParam(22 = $_POST["budget_local_plan"];
// $stmt->bindParam(23 = $_POST["budget_local_receive"];
// $stmt->bindParam(24 = $_POST["budget_local_use"];
// $stmt->bindParam(25 = $_POST["budget_private_plan"];
// $stmt->bindParam(26 = $_POST["budget_private_receive"];
// $stmt->bindParam(27 = $_POST["budget_private_use"];
// $stmt->bindParam(28, $_COOKIE["user_id"];
// $stmt->bindParam(29, $file_path);
// $stmt->execute();
// $project_id = $pdo->lastInsertId();


$stmt = $pdo->prepare("DELETE FROM project_draft WHERE project_draft.project_id =?");
$stmt->bindParam(1, $_POST["project_id"]);
$stmt->execute();
$project_id = $pdo->lastInsertId();




// header("location:detail.php?project_id=" . $_POST["project_id"];

?>
