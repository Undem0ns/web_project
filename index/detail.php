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
  WHERE project_id = ?");
  $stmt->bindParam(1, $_GET["project_id"]);
  $stmt->execute();
  ?>

<nav class="navbar navbar-expand-lg navbar-light bg-secondary sticky-top">
    <div class="container-fluid">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <!-- <span clss="marginle" style="font-size:30px;">PCP-MS</span> -->
          <a class="nav-link" href="dashboard.php" style="font-size:25px; color:black">PCP-MS</a>
        </li>
      </ul>
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class=nav-link active aria-current="page"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg> <?php
                    echo $_COOKIE["user_name"]; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../login/index.php">ออกจากระบบ</a>
        </li>
      </ul>
    </div>
  </nav>

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
  <?php $row = $stmt->fetch()  ?>
  <div id="main" class="bd-main order-1">
    <div class="bd-intro ps-lg-4">
      <div class="d-md-flex flex-md-row-reverse align-items-center justify-content-between">
        <!-- <button type="button" class="btn btn-secondary">Secondary</button> -->
        <a class="btn btn-danger" href="edit_project.php?project_id=<?= $row["project_id"] ?>?from=detail" title="edit" rel="noopener" style="margin-right: 20px;"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
            <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
          </svg> แก้ไข </a>
        <h2 class="bd-title" id="content" style="font-weight: bold;">รายละเอียดโครงการ</h2>
      </div>
    </div>
    <br>
    <div class="w-100 bd-highlight">
      <div class="row mb-3">
        <label for="project_code" class="col-sm-2 col-form-label" style="font-weight: bold;">ชื่อโครงการ/ชื่อกิจกรรม/ชื่อการดำเนินงาน:</label>
        <div class="col-sm-10">
          <?= $row["project_name"] ?>
        </div>
        <div class="row mb-3">
          <div class="-flex p-2 bd-highlight" style="background-color: gray;">
            <label>ความเชื่อมโยงของโครงการกับแผนกลุ่มจังหวัด
            </label>
          </div>
        </div>
        <div class="row mb-3">
          <label for="project_code" class="col-sm-2 col-form-label" style="font-weight: bold;">ประเด็นการพัฒนา: </label>
          <div class="col-sm-10">
            <?= $row["development_name"] ?>
          </div>
        </div>
        <div class="row mb-3">
          <label for="project_code" class="col-sm-2 col-form-label" style="font-weight: bold;">แผนงาน</label>
          <div class="col-sm-10">
            <?= $row["project_roadmap_name"] ?>
          </div>
        </div>
        <div class="row mb-3">
          <label for="project_code" class="col-sm-2 col-form-label" style="font-weight: bold;">โครงการหลัก (ตามแผน)</label>
          <div class="col-sm-10">
            <?= $row["project_main_name"] ?>
          </div>
        </div>
      </div>
      <div class="row mb-3">
        <label for="project_code" class="col-sm-2 col-form-label" style="font-weight: bold;">โครงการ/กิจกรรมย่อย (ตามแผน)</label>
        <div class="col-sm-10">
          <?= $row["project_sub_name"] ?>
        </div>
      </div>
      <div class="row mb-3">
        <div class="-flex p-2 bd-highlight" style="background-color: gray;">
          <label>ภาพรวมการดำเนินงาน</label>
        </div>
      </div>
      <div class="row mb-3">
        <label for="project_code" class="col-sm-2 col-form-label" style="font-weight: bold;">ลักษณะการดำเนินงาน</label>
        <div class="col-sm-10">
          <?= $row["operation_type"] ?>
        </div>
      </div>
      <div class="row mb-3">
        <label for="project_code" class="col-sm-2 col-form-label" style="font-weight: bold;">รหัสโครงงาน (ถ้ามี)</label>
        <div class="col-sm-10">
          <?= $row["project_code"] ?>
        </div>
      </div>
      <div class="row mb-3">
        <label for="project_code" class="col-sm-2 col-form-label" style="font-weight: bold;">การใช้งบประมาณ</label>
        <div class="col-sm-10">
          <?= $row["use_budget"] ?>
        </div>
      </div>
      <div class="row mb-3">
        <label for="project_code" class="col-sm-2 col-form-label" style="font-weight: bold;">ปีงบประมาณที่ดำเนินโครงการ</label>
        <div class="col-sm-10">
          <?= $row["budget_year"] ?>
        </div>
      </div>
      <div class="row mb-3">
        <label for="project_code" class="col-sm-2 col-form-label" style="font-weight: bold;">หน่วยงานที่รับผิดชอบ</label>
        <div class="col-sm-10">
          <?= $row["institution"] ?>
        </div>
      </div>
      <div class="row mb-3">
        <label for="project_code" class="col-sm-2 col-form-label" style="font-weight: bold;">จังหวัดที่ดำเนินโครงการ</label>
        <div class="col-sm-10">
          <?= $row["province"] ?>
        </div>
      </div>
      <div class="row mb-3">
        <label for="project_code" class="col-sm-2 col-form-label" style="font-weight: bold;">กลุ่มเป้าหมายในการดำเนินงาน</label>
        <div class="col-sm-10">
          <?= $row["target_user"] ?>
        </div>
      </div>
      <div class="row mb-3">
        <div class="-flex p-2 bd-highlight" style="background-color: gray;">
          <label>รายละเอียดการดำเนินงาน</label>
        </div>
      </div>
      <div class="row mb-3">
        <label for="project_code" class="col-sm-2 col-form-label" style="font-weight: bold;">วัตถุประสงค์และรายละเอียดของโครงการ</label>
        <div class="col-sm-10">
          <?= $row["project_objective"] ?>
        </div>
      </div>
      <div class="row mb-3">
        <label for="project_code" class="col-sm-2 col-form-label" style="font-weight: bold;">ผลผลิต/ผลลัพธ์ ตามตัวชี้วัด</label>
        <div class="col-sm-10">
          <?= $row["project_result"] ?>
        </div>
      </div>
      <div>
        <div class="-flex p-2 bd-highlight" style="background-color: gray;">
          <label>แหล่งงบประมาณตามแผน</label>
        </div>
        <div class="row mb-3">
          <label for="project_code" class="col-sm-2 col-form-label" style="font-weight: bold;">งบประมาณของจังหวัด/กลุ่มจังหวัด</label>
          <div class="col-sm-10">
            จำนวน <?= $row["budget_province_plan"] ?> บาท
          </div>
        </div>
        <div class="row mb-3">
          <label for="project_code" class="col-sm-2 col-form-label" style="font-weight: bold;">งบประมาณของกระทรวง/กรม</label>
          <div class="col-sm-10">
            จำนวน <?= $row["budget_department_plan"] ?> บาท
          </div>
        </div>
        <div class="row mb-3">
          <label for="project_code" class="col-sm-2 col-form-label" style="font-weight: bold;">งบประมาณขององค์กรปกครองส่วนท้องถิ่น</label>
          <div class="col-sm-10">
            จำนวน <?= $row["budget_local_plan"] ?> บาท
          </div>
        </div>
        <div class="row mb-3">
          <label for="project_code" class="col-sm-2 col-form-label" style="font-weight: bold;">งบประมาณของภาคเอกชน/ชุมชน</label>
          <div class="col-sm-10">
            จำนวน <?= $row["budget_private_plan"] ?> บาท
          </div>
        </div>
        <div class="-flex p-2 bd-highlight" style="background-color: gray;">
          <label>งบประมาณที่ได้รับจัดสรร</label>
        </div>
        <div class="row mb-3">
          <label for="project_code" class="col-sm-2 col-form-label" style="font-weight: bold;">งบประมาณของจังหวัด/กลุ่มจังหวัด</label>
          <div class="col-sm-10">
            จำนวน <?= $row["budget_province_receive"] ?> บาท
          </div>
        </div>
        <div class="row mb-3">
          <label for="project_code" class="col-sm-2 col-form-label" style="font-weight: bold;">งบประมาณของกระทรวง/กรม</label>
          <div class="col-sm-10">
            จำนวน <?= $row["budget_department_receive"] ?> บาท
          </div>
        </div>
        <div class="row mb-3">
          <label for="project_code" class="col-sm-2 col-form-label" style="font-weight: bold;">งบประมาณขององค์กรปกครองส่วนท้องถิ่น</label>
          <div class="col-sm-10">
            จำนวน <?= $row["budget_local_receive"] ?> บาท
          </div>
        </div>
        <div class="row mb-3">
          <label for="project_code" class="col-sm-2 col-form-label" style="font-weight: bold;">งบประมาณของภาคเอกชน/ชุมชน</label>
          <div class="col-sm-10">
            จำนวน <?= $row["budget_private_receive"] ?> บาท
          </div>
        </div>
        <div class="-flex p-2 bd-highlight" style="background-color: gray;">
          <label>งบประมาณตามที่ใช้จ่ายจริง</label>
        </div>
        <div class="row mb-3">
          <label for="project_code" class="col-sm-2 col-form-label" style="font-weight: bold;">งบประมาณของจังหวัด/กลุ่มจังหวัด</label>
          <div class="col-sm-10">
            จำนวน <?= $row["budget_province_use"] ?> บาท
          </div>
        </div>
        <div class="row mb-3">
          <label for="project_code" class="col-sm-2 col-form-label" style="font-weight: bold;">งบประมาณของกระทรวง/กรม</label>
          <div class="col-sm-10">
            จำนวน <?= $row["budget_department_use"] ?> บาท
          </div>
        </div>
        <div class="row mb-3">
          <label for="project_code" class="col-sm-2 col-form-label" style="font-weight: bold;">งบประมาณขององค์กรปกครองส่วนท้องถิ่น</label>
          <div class="col-sm-10">
            จำนวน <?= $row["budget_local_use"] ?> บาท
          </div>
        </div>
        <div class="row mb-3">
          <label for="project_code" class="col-sm-2 col-form-label" style="font-weight: bold;">งบประมาณของภาคเอกชน/ชุมชน</label>
          <div class="col-sm-10">
            จำนวน <?= $row["budget_private_use"] ?> บาท
          </div>
        </div>
        <div class="-flex p-2 bd-highlight" style="background-color: gray;">
          <label>รายละเอียดอื่น ๆ เพิ่มเติม</label>
        </div><br>

        <div class="row mb-3">
          <label for="project_code" class="col-sm-2 col-form-label" style="font-weight: bold;">ลิงค์หรือรายละเอียดอื่น ๆ <br>เพิ่มเติมที่น่าจะเป็นประโยชน์</label>
          <div class="col-sm-10">
            <?= $row["project_additional"] ?>
          </div>
        </div>
        <div class="row mb-3">
          <label for="project_code" class="col-sm-2 col-form-label" style="font-weight: bold;">ไฟล์แนบ (ถ้ามี)</label>
          <div class="col-sm-10">
            <a class="text-primary decoration-none" href= "upload_file/<?= $row["file_path"] ?>" download><?= $row["file_path"] ?></a>
          </div>
        </div>

      </div>
    </div>
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