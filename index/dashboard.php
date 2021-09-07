<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>รายชื่อโครงการ</title>


  <?php include "../connect.php" ?>
</head>

<body id="body-pd" class="body-pd">
  <?php
  session_start();
  if (!isset($_SESSION["user_email"])) {
    header("location:../login/index.php");
  }
  //select * from where คือส่ง id  แต่ ไม่มี where คือทั้งหมด
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
  <header class="header" id="header">
    <div class="header_toggle "> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <div class="header_img"> <img src="/web_project/img/khonkaenLogo.jpg" alt=""> </div>
    <div class="header_img"> <img src="/web_project/img/sarakam.png" alt=""> </div>
    <div class="header_img"> <img src="/web_project/img/img_805f7e4fbb60dbb41db58a711ef4946f.png" alt=""> </div>
    <div class="header_img"> <img src="/web_project/img/unnamed.png" alt=""> </div>
    <div><span class="nav_name"></span></div>
    <a class="nav-link" style="color: #F7F6FB;"><span><i class='bx bx-user nav_icon' ></i> <?php
                                                                                                                  echo $_COOKIE["user_name"]; ?></span></a>
  </header>
  <div class="l-navbar show" id="nav-bar">
    <nav class="nav">
      <div> <a href="dashboard.php" class="nav_logo"> <img src="../assets/logo.png" height="100px" width="100px "> <span class="nav_logo-name">FPG-MIS</span> </a>
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
  <div class="height-100  py-5">
    <br>
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
          <td><a class="text-primary decoration-none" href="detail.php?project_id=<?= $row["project_id"] ?>"> <?= $row["project_name"] ?></a> </td>
          <td><?= $row["development_name"] ?></td>
          <td><?= $row["province"] ?></td>
          <td><?= $row["budget_year"] ?></td>
          <td>
          <?php if ($_COOKIE['user_id'] == $row['user_id']) { ?>
            
              <a class="btn btn-danger" href="edit_project.php?project_id= <?= $row["project_id"] ?>">แก้ไข</a>
            
          <?php } ?>
          </td>

        </tr>
      </tbody>
    <?php } ?>
    </table>
  </div>



</body>

</html>