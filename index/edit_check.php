<?php include "../connect.php" ?>
<?php

$ext = pathinfo(basename($_FILES['upload_file']['name']), PATHINFO_EXTENSION);

if ($ext == '') {
  $file_path = $_POST['old_file'];
} else {
  unlink($_POST['old_file']);
  $new_file_name = uniqid('file_').".".$ext;
  $file_path = "upload_file/";
  $upload_path = $file_path.$new_file_name;
  
  $success = move_uploaded_file($_FILES['upload_file']['tmp_name'], $upload_path);
  $file_path = $new_file_name;
}

$TABLE_NAME = '';

if (isset($_POST['edit'])) {
  $TABLE_NAME = 'project';
} else {
  $TABLE_NAME = 'project_draft';
}
?>
<?php
$stmt = $pdo->prepare("UPDATE $TABLE_NAME SET project_name=?,development_subject=?, project_roadmap=?,project_main=?, project_sub=?,operation_type=?,
project_code=?,use_budget=?,budget_year=?,institution=?,province=?,target_user=?,project_objective=?,project_result=?,project_additional=?,
budget_province_plan=?,budget_province_receive=?,budget_province_use=?,budget_department_plan=?,budget_department_receive=?,budget_department_use=?,
budget_local_plan=?,budget_local_receive=?,budget_local_use=?,budget_private_plan=?,budget_private_receive=?,budget_private_use=?, file_path=?
 WHERE project_id=?");
$stmt->bindParam(1, $_POST["project_name"]);
$stmt->bindParam(2, $_POST["development_subject"]);
$stmt->bindParam(3, $_POST["project_roadmap"]);
$stmt->bindParam(4, $_POST["project_main"]);
$stmt->bindParam(5, $_POST["project_sub"]);
$stmt->bindParam(6, $_POST["operation_type"]);
$stmt->bindParam(7, $_POST["project_code"]);
$stmt->bindParam(8, $_POST["use_budget"]);
$stmt->bindParam(9, $_POST["budget_year"]);
$stmt->bindParam(10, $_POST["institution"]);
$stmt->bindParam(11, $_POST["province"]);
$stmt->bindParam(12, $_POST["target_user"]);
$stmt->bindParam(13, $_POST["project_objective"]);
$stmt->bindParam(14, $_POST["project_result"]);
$stmt->bindParam(15, $_POST["project_additional"]);
$stmt->bindParam(16, $_POST["budget_province_plan"]);
$stmt->bindParam(17, $_POST["budget_province_receive"]);
$stmt->bindParam(18, $_POST["budget_province_use"]);
$stmt->bindParam(19, $_POST["budget_department_plan"]);
$stmt->bindParam(20, $_POST["budget_department_receive"]);
$stmt->bindParam(21, $_POST["budget_department_use"]);
$stmt->bindParam(22, $_POST["budget_local_plan"]);
$stmt->bindParam(23, $_POST["budget_local_receive"]);
$stmt->bindParam(24, $_POST["budget_local_use"]);
$stmt->bindParam(25, $_POST["budget_private_plan"]);
$stmt->bindParam(26, $_POST["budget_private_receive"]);
$stmt->bindParam(27, $_POST["budget_private_use"]);
$stmt->bindParam(28, $file_path);

$stmt->bindParam(29, $_POST["project_id"]);
if ($stmt->execute()) {



  //  echo "แก้ไข" . $_POST["project_name"] . " สำเร็จ";
  //  header("refresh: 1;url=index.php");

  echo "<script>";
  echo  " Swal.fire({
    position: 'center',
    icon: 'success',
    title: 'แก้ไขสำเร็จ',
    showConfirmButton: false,
    timer: 1500,
  })";
  echo "</script>";
  header("refresh: 2;url=dashboard.php");
}
?>

<!-- <script>
    Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'แก้ไขสำเร็จ',
  showConfirmButton: false,
  timer: 1500,
})
</script> -->