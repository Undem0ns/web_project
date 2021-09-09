<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>สืบค้นโครงการ</title>
  <?php include "../connect.php" ?>
</head>

<body id="body-pd" class="body-pd">
  <?php
  session_start();
  if (!isset($_SESSION["user_email"])) {
    header("location:../login/index.php");
  }
  // ---------------------------------------------------

  // // determine page number from $_GET
  $page = 1;
  if (!empty($_GET['page'])) {
    $page = filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT);
    if (false === $page) {
      $page = 1;
    }
  }

  // // set the number of items to display per page
  // $items_per_page = 4;

  // // build query
  // $offset = ($page - 1) * $items_per_page;
  // // $sql = "SELECT * FROM menuitem LIMIT " . $offset . "," . $items_per_page;

  $stmt = $pdo->prepare("SELECT *,
  budget_province_plan + budget_department_plan + budget_local_plan + budget_private_plan AS budget_plan
  FROM project
  LEFT JOIN development_subject
  ON project.development_subject = development_subject.development_id
  LEFT JOIN project_roadmap
  ON project.project_roadmap = project_roadmap.project_roadmap_id
  LEFT JOIN project_main
  ON project.project_main = project_main.project_main_id
  LEFT JOIN project_sub
  ON project.project_sub = project_sub.project_sub_id
  ORDER BY project.project_id DESC
  ;");

  $stmt->execute();
  ?>

  <?php
  function ifExist($str, $search_str, $number = false)
  {
    $index = array_search($str, $search_str);
    if ($number) {
      if ($index === false) {
        return 0;
      } else {
        if (count($search_str) > ($index + 2)) {
          $arr = array((int)$search_str[$index + 1], (int)$search_str[$index + 2]);
          return $arr;
        } else {
          $arr = array((int)$search_str[$index + 1], null);
          return $arr;
        }
      }
    } else {
      if ($index === false) {
        return '';
      } else {
        return $search_str[$index + 1];
      }
    }
  }
  ?>

  <?php
  if (isset($_POST['search'])) {

    $replace_str = preg_replace("/[^a-zA-Z0-9ก-๛ ]/", '', $_POST['search']);

    $search_str = explode(' ', $replace_str);
    if (count(($search_str)) > 1) {
      $search_name = ifExist('ชื่อ', $search_str);
      $search_provincial = ifExist('จังหวัด', $search_str);
      $search_year = ifExist('ปี', $search_str);
      $search_budget = ifExist('งบประมาณ', $search_str, true);
      if (is_null($search_budget[1])) {
        $search_budget[1] = '';
      } else {
        $tmp = $search_budget[1];
        $search_budget[1] = 'AND budget_province_plan + budget_department_plan + budget_local_plan + budget_private_plan <= ' . $search_budget[1];
      }

      $stmt = $pdo->prepare("SELECT * ,
      budget_province_plan + budget_department_plan + budget_local_plan + budget_private_plan AS budget_plan
      FROM project
      LEFT JOIN development_subject
      ON project.development_subject = development_subject.development_id
      LEFT JOIN project_roadmap
      ON project.project_roadmap = project_roadmap.project_roadmap_id
      LEFT JOIN project_main
      ON project.project_main = project_main.project_main_id
      LEFT JOIN project_sub
      ON project.project_sub = project_sub.project_sub_id
      WHERE project_name LIKE '%$search_name%'
      AND province LIKE '%$search_provincial%'
      AND budget_year LIKE '%$search_year%'
      AND budget_province_plan + budget_department_plan + budget_local_plan + budget_private_plan >= $search_budget[0]
      $search_budget[1]
      ORDER BY project.project_id DESC
      ;");

      $stmt->execute();
    }
  }

  ?>

  <header class="header body-pd" id="header">
    <div class="header_toggle"> <i class='bx bx-menu bx-x' id="header-toggle"></i> </div>
    <div><img src="../img/111-removebg-preview.png" width="600"></div>
    <a class="nav-link" style="color: #F7F6FB;"><span><i class='bx bx-user nav_icon'></i> <?php
                                                                                          echo $_COOKIE["user_name"]; ?></span></a>
  </header>
  <div class="l-navbar show" id="nav-bar">
    <nav class="nav">
      <div> <a href="dashboard.php" class="nav_logo"> <img src="../assets/logo.png" height="100px" width="100px "> <span class="nav_logo-name">FPG-MIS</span> </a>
        <div class="nav_list">
          <a href="dashboard.php" class="nav_link"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">รายชื่อโครงการ</span> </a>
          <a href="add_project.php" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">เพิ่มโครงการ</span> </a>
          <a href="model.php" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">แบบร่างโครงการ</span> </a>
          <a href="search_db.php" class="nav_link  active"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg> <span class="nav_name">สืบค้น (DBA)</span> </a>
        </div>
      </div>
      <a href="../login/index.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">ออกจากระบบ</span> </a>
    </nav>
  </div>

  <!--Container Main start-->
  <div class="height-50  pt-5">
    <form action="search_db.php" method="post">
      <div class="form-group">
        <label for="search" style="font-weight: bold;">สืบค้นข้อมูล</label>
        <input class="form-control" type="text" id="search" name="search" value="<?= isset($_POST['search']) ? $_POST['search'] : "ชื่อ '' จังหวัด '' ปี '' งบประมาณ ''" ?>"></input>
      </div>
      <div>
        <button type="submit" class="btn btn-primary my-3">search</button>
      </div>

    </form>
  </div>
  <div class="height-100  py-5">
    <div class="container-fluid">
      <div class="bd-intro ps-lg-4">
        <div class="d-md-flex flex-md-row align-items-center justify-content-between">
          <h2 class="bd-title" id="content" style="font-weight: bold;">รายชื่อโครงการ</h2>
        </div>
      </div>

      <table class="table table-bordered py-3">
        <colgroup>
          <col span="1" style="width: 30%;">
          <!-- <col span="1" style="width: 30%;"> -->
          <col span="1" style="width: 5%;">
          <col span="1" style="width: 5%;">
          <col span="1" style="width: 30%;">
        </colgroup>
        <thead>
          <tr>
            <th scope="col">ชื่อโครงการและการดำเนินงาน</th>
            <!-- <th scope="col">ประเด็นการพัฒนาที่เกี่ยวข้อง</th> -->
            <th scope="col">จังหวัด</th>
            <th scope="col">ปีงบประมาณ</th>
            <th scope="col">รวมงบประมาณตามแผน</th>
          </tr>
          <?php while ($row = $stmt->fetch()) { ?>
        </thead>
        <tbody>
          <tr>
            <td><a class="text-primary decoration-none" href="detail.php?project_id=<?= $row["project_id"] ?>" target="_blank"> <?= $row["project_name"] ?></a> </td>
            <!-- <td><?= $row["development_name"] ?></td> -->
            <td><?= $row["province"] ?></td>
            <td><?= $row["budget_year"] ?></td>
            <td>
              <div class="d-flex flex-row-reverse">
                <p class="text-left text-justify"><?= number_format($row["budget_plan"]) ?> บาท</p>
              </div>
            </td>
          </tr>
        </tbody>
      <?php } ?>
      </table>
    </div>
  </div>
</body>

</html>