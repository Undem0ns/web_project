<?php include "../connect.php" ?>
<?php

session_start();
if (!isset($_SESSION["user_email"]) ) {
    header("location:../login/index.php");
    }

$stmt = $pdo->prepare("SELECT * FROM project WHERE project_id = ?");
$stmt->bindParam(1, $_GET["project_id"]);
$stmt->execute();
$row = $stmt->fetch();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container" style="margin-top: 10%; ">
        <div class="row">
            <div class="col">

            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        แก้ไขข้อมูล
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <form action="edit_check.php" method="post">
                        <h5 class="card-title"><input type="hidden" name="project_id" value="<?=$row["project_id"]?>"></h5>
                            <div class="mb-3">
                                <label class="form-label">ชื่อโครงการและการดำเนินงาน</label>
                                <input type="text" name="project_name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">ประเด็นการพัฒนาที่เกี่ยวข้อง</label>
                                <input type="text" name="project_roadmap" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">จังหวัด </label>
                                <input type="text" name="province" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">งบปีประมาณ </label>
                                <input type="text" name="budget_year" class="form-control">
                            </div>
                            <div>
                                <a href="index.php" class="btn btn-danger">ย้อนกลับ</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        <div class="card-body">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
            
            </div>
        </div>
    </div>
</body>

</html>