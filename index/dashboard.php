<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <?php include "../connect.php" ?>
</head>
<body>
<?php
  session_start();
  if (!isset($_SESSION["user_email"])) {
    header("location:../login/index.php");
  }

  // $stmt = $pdo->prepare("SELECT * FROM project");
  $stmt = $pdo->prepare("SELECT *
  FROM project
  LEFT JOIN development_subject
  ON project.development_subject = development_subject.development_id
  LEFT JOIN project_roadmap
  ON project.project_roadmap = project_roadmap.project_roadmap_id
  LEFT JOIN project_main
  ON project.project_main = project_main.project_main_id
  LEFT JOIN project_sub
  ON project.project_sub = project_sub.project_sub_id
  ;");

  $stmt->execute();
  ?>
<nav class="navbar navbar-expand-lg navbar-light bg-secondary sticky-top">
      <div class="container-fluid">
      <ul class="nav nav-tabs">
          <li class="nav-item">
            <!-- <span clss="marginle" style="font-size:30px;">PCP-MS</span> -->
            <a class="nav-link"  href="dashboard.php" style="font-size:25px; color:black">PCP-MS</a>
          </li>
        </ul>
        <ul class="nav justify-content-end">
          <li class="nav-item">
              <a class=nav-link active aria-current="page"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg> <?php
                        echo $_COOKIE["user_name"]; ?></a>
            </li>
             <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../login/index.php">ออกจากระบบ</a>
            </li>
            </ul>
      </div></nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-info">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="add_project.php" class="nav-link align-middle px-0 text-white">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">เพิ่มโครงการ</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard.php" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">รายชื่อโครงการ</span></a>
                    </li>
 
                    <li>
                        <a href="model.php" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline ">ร่างโครงการ</span> </a>
                    </li>
                </ul>
                <hr>
            </div>
        </div>
        <div class="col py-3 ">
        <div class="bd-intro ps-lg-4">
      <div class="d-md-flex flex-md-row-reverse align-items-center justify-content-between">
        <!-- <button type="button" class="btn btn-secondary">Secondary</button> -->

        <a class="btn btn-secondary" href="add_project.php" title="add_project" rel="noopener" style="margin-right: 20px;"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
            <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
          </svg> เพิ่มโครงการ/ดำเนินการ </a>
        <h2 class="bd-title" id="content" style="font-weight: bold;">รายชื่อโครงการ</h2>
      </div>
    </div>
    <br>
            <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">ชื่อโครงการและการดำเนินงาน</th>
                <th scope="col">ประเด็นการพัฒนาที่เกี่ยวข้อง</th>
                <th scope="col">จังหวัด</th>
                <th scope="col">ปีงบประมาณ</th>
                <th scope="col">การจัดการโครงการ</th>
            </tr>
            <?php while ($row = $stmt->fetch()) { ?>
            </thead>
            <tbody>
            <tr>
                <td><a class="text-primary decoration-none" href="detail.php?project_id=<?=$row["project_id"] ?>"> <?= $row["project_name"] ?></a> </td>
                <td><?= $row["development_name"] ?></td>
                <td><?= $row["province"] ?></td>
                <td><?= $row["budget_year"] ?></td>
                <td><a class="btn btn-danger" href="edit_project.php?project_id=<?= $row["project_id"] ?>">แก้ไข</a></td>
            </tr>
        </tbody>
        <?php } ?>
        </table>
        </div>
    </div>
</div>
</body>
</html>