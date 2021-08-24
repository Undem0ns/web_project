<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include "../connect.php" ?>
</head>

<body>
  <?php
  session_start();
  if (!isset($_SESSION["user_email"])) {
    header("location:../login/index.php");
  }

  $stmt = $pdo->prepare("SELECT * FROM project");
  $stmt->execute();
  ?>

    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <h5 class="nav" id="offcanvasExampleLabel">PTP-MS</h5>
      <a class="nav-link active" aria-current="page" href="add_project.php"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
          <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
        </svg> เพิ่มโครงการ</a>
      <a class="nav-link" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-diamond" viewBox="0 0 16 16">
          <path d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435zm1.4.7a.495.495 0 0 0-.7 0L1.134 7.65a.495.495 0 0 0 0 .7l6.516 6.516a.495.495 0 0 0 .7 0l6.516-6.516a.495.495 0 0 0 0-.7L8.35 1.134z" />
        </svg> รายชื่อโครงการ</a>
    </div>
  


    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <span clss="marginle" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
            </li>
          </ul>
          <ul class="nav justify-content-end">
            <!-- <li class="nav-item">
          <a class=nav-link active" aria-current="page" href="#"><?php echo $row['username']; ?></a>
        </li> -->
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../login/index.php">ออกจากระบบ</a>
            </li>
          </ul>
    </header>

    <div id="main" class="bd-main order-1">
      <div class="bd-intro ps-lg-4">
        <div class="d-md-flex flex-md-row-reverse align-items-center justify-content-between">
          <!-- <button type="button" class="btn btn-secondary">Secondary</button> -->

          <a class="btn btn-secondary" href="" title="add_project" target="_blank" rel="noopener" style="margin-right: 20px;"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
              <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
            </svg> เพิ่มโครงการ/ดำเนินการ </a>
          <h2 class="bd-title" id="content">รายชื่อโครงการทั้งหมด</h2>
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
            <td><?= $row["project_name"] ?></td>
            <td><?= $row["project_roadmap"] ?></td>
            <td><?= $row["province"] ?></td>
            <td><?= $row["budget_year"] ?></td>
            <td><a class="bn btn-primary" href="edit.php?project_id=<?= $row["project_id"] ?>">แก้ไข</a></td>
          </tr>
        </tbody>
      <?php } ?>
      </table>


    </div>



    <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
      }
    </script>
</body>

</html>