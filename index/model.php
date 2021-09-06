<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบร่างโครงการ</title>

    <?php include "../connect.php" ?>
</head>
<body>
<?php
  session_start();
  if (!isset($_SESSION["user_email"])) {
    header("location:../login/index.php");
  }


  $stmt = $pdo->prepare("SELECT *
  FROM project_draft
  LEFT JOIN development_subject
  ON project_draft.development_subject = development_subject.development_id
  LEFT JOIN project_roadmap
  ON project_draft.project_roadmap = project_roadmap.project_roadmap_id
  LEFT JOIN project_main
  ON project_draft.project_main = project_main.project_main_id
  LEFT JOIN project_sub
  ON project_draft.project_sub = project_sub.project_sub_id
  WHERE user_id =?
  ;");
  $stmt->bindParam(1, $_COOKIE["user_id"]);
  $stmt->execute();
  ?>
</head>

<body id="body-pd">
<header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <a class="nav-link" active aria-current="page" style="color:#212121"><span><i class='bx bx-user nav_icon'></i> <?php
                    echo $_COOKIE["user_name"]; ?></span></a>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="dashboard.php" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">PCP-MS</span> </a>
                <div class="nav_list"> 
                <a href="dashboard.php" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">รายชื่อโครงการ</span> </a> 
                 <a href="add_project.php" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">เพิ่มโครงการ</span> </a> 
                 <a href="model.php" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">แบบร่างโครงการ</span> </a> 

                </div>
            </div> 
            <a href="../login/index.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">ออกจากระบบ</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 py-5">
        <div class="bd-intro ps-lg-4"><br><br>
      <div class="d-md-flex flex-md-row-reverse align-items-center justify-content-between">
        <!-- <button type="button" class="btn btn-secondary">Secondary</button> -->

        <a class="btn btn-secondary" href="add_project.php" title="add_project" rel="noopener" style="margin-right: 20px;"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
            <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
          </svg> เพิ่มโครงการ/ดำเนินการ </a>
        <h2 class="bd-title" id="content" style="font-weight: bold;">แบบร่างโครงการ</h2>
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
                <td><a class="text-primary decoration-none" href="model_detail.php?project_id=<?=$row["project_id"] ?>"> <?= $row["project_name"] ?></a> </td>
                <td><?= $row["development_name"] ?></td>
                <td><?= $row["province"] ?></td>
                <td><?= $row["budget_year"] ?></td>
                <td><a class="btn btn-danger" name="edit_model" href="edit_model.php?project_id=<?= $row["project_id"] ?>">แก้ไข</a></td>
            </tr>
        </tbody>
        <?php } ?>
        </table>
        </div>
    </div>
</div>


</body>
</html>