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
  // ---------------------------------------------------
  $act = isset($_GET['search']) ? $_GET['search'] : '';
 
  if (isset($_GET['search'])) {
    $keyword = explode(' ',$_GET['search']);
      if($keyword[0]=='จังหวัด'){  
        $stmt = $pdo->prepare(" SELECT * FROM project WHERE province LIKE '%$keyword[1]%'  ");
      
      }else{
        $stmt = $pdo->prepare(" SELECT * FROM project WHERE project_name LIKE '%$act%'  ");
      }
    
    $stmt->execute();
  } 
  
  //select * from where คือส่ง id  แต่ ไม่มี where คือทั้งหมด
  // $stmt = $pdo->prepare("SELECT * FROM project");

  // $stmt = $pdo->prepare("SELECT *
  // FROM project
  // LEFT JOIN development_subject
  // ON project.development_subject = development_subject.development_id
  // LEFT JOIN project_roadmap
  // ON project.project_roadmap = project_roadmap.project_roadmap_id
  // LEFT JOIN project_main
  // ON project.project_main = project_main.project_main_id
  // LEFT JOIN project_sub
  // ON project.project_sub = project_sub.project_sub_id
  // ;");


  ?>
  <header class="header body-pd" id="header">
    <div class="header_toggle"> <i class='bx bx-menu bx-x' id="header-toggle"></i> </div>
    <div><img src="/img/111-removebg-preview.png" width="600"></div>
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
  <div class="height-100  py-5">
    <div class="container-fluid">

      <br>

      <div class="bd-intro ps-lg-4">

        <div class="d-md-flex align-items-center justify-content-between">
          <!-- <button type="button" class="btn btn-secondary">Secondary</button> -->
          <h2 class="bd-title" id="content" style="font-weight: bold;">รายชื่อโครงการ</h2>
        </div>

        <form class="d-flex col-md-11" method="get" action="search_db.php">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
          <button class="btn btn-outline-success" type="submit"  >Search</button>
        </form>

      </div>
      <br>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">ชื่อโครงการและการดำเนินงาน</th>
        
            <th scope="col">จังหวัด</th>
            <th scope="col">ปีงบประมาณ</th>
       
          </tr>
          <?php 
          if (isset($_GET['search'])) { 
          while ($row = $stmt->fetch()) { 
            ?>
        </thead>
        <tbody>
          <tr>
            <td><a class="text-primary decoration-none" href="detail.php?project_id=<?= $row["project_id"] ?>"> <?= $row["project_name"] ?></a> </td>
            
            <td><?= $row["province"] ?></td>
            <td><?= $row["budget_year"] ?></td>

          </tr>
        </tbody>
      <?php } } ?>
      
      </table>
    </div>



</body>

</html>