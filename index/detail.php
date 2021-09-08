<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>รายละเอียด</title>
  <?php include "../connect.php" ?>
</head>

<body id="body-pd" class="body-pd">
  <?php
  session_start();
  if (!isset($_SESSION["user_email"])) {
    header("location:../login/index.php");
  }

  //select * from where คือส่ง id  แต่ ไม่มี where คือทั้งหมด
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
  <?php
    function addComma(string $var){
      # code...
    }
  ?>

  <header class="header body-pd" id="header">
    <div class="header_toggle"> <i class='bx bx-menu bx-x' id="header-toggle"></i> </div>
    <div><img src="/img/111-removebg-preview.png" width="600"></div>
    <a class="nav-link" active aria-current="page" style="color:#212121"><span><i class='bx bx-user nav_icon'></i> <?php
                                                                                                                    echo $_COOKIE["user_name"]; ?></span></a>
  </header>
  <div class="l-navbar show" id="nav-bar">
    <nav class="nav">
      <div> <a href="dashboard.php" class="nav_logo"> <img src="../assets/logo.png" height="100px" width="100px "><span class="nav_logo-name">FPG-MS</span> </a>
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

    <?php $row = $stmt->fetch()  ?>
    <div id="main" class="bd-main order-1">
      <div class="bd-intro ps-lg-4">
        <div class="d-md-flex flex-md-row-reverse align-items-center justify-content-between">
          <!-- <button type="button" class="btn btn-secondary">Secondary</button> -->
          <?php if ($_COOKIE['user_id'] == $row['user_id']) { ?>
            <a class="btn btn-danger" href="edit_project.php?project_id=<?= $row["project_id"] ?>?from=detail" title="edit" rel="noopener" style="margin-right: 20px;"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
              </svg> แก้ไข </a>
          <?php } else { ?>
            <div></div>
          <?php } ?>
          <h2 class="bd-title" id="content" style="font-weight: bold;">รายละเอียดโครงการ</h2>
        </div>
      </div>
      <br>
      <div class="w-100 bd-highlight">
        <div class="row mb-3">
          <label for="project_code" class="col-sm-3 col-form-label" style="font-weight: bold;">ชื่อโครงการ/ชื่อกิจกรรม/ชื่อการดำเนินงาน:</label>
          <div class="col-sm-9 col-form-label">
            <?= $row["project_name"] ?>
          </div>
          <div class="row mb-3">
            <div class="-flex p-2 bd-highlight" style="background-color: #bbc7cd;">
              <label>ความเชื่อมโยงของโครงการกับแผนกลุ่มจังหวัด
              </label>
            </div>
          </div>
          <div class="row mb-3">
            <label for="project_code" class="col-sm-3 col-form-label" style="font-weight: bold;">ประเด็นการพัฒนา: </label>
            <div class="col-sm-9 col-form-label">
              <?= $row["development_name"] ?>
            </div>
          </div>
          <div class="row mb-3">
            <label for="project_code" class="col-sm-3 col-form-label" style="font-weight: bold;">แผนงาน</label>
            <div class="col-sm-9 col-form-label">
              <?= $row["project_roadmap_name"] ?>
            </div>
          </div>
          <div class="row mb-3">
            <label for="project_code" class="col-sm-3 col-form-label" style="font-weight: bold;">โครงการหลัก (ตามแผน)</label>
            <div class="col-sm-9 col-form-label">
              <?= $row["project_main_name"] ?>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label for="project_code" class="col-sm-3 col-form-label" style="font-weight: bold;">โครงการ/กิจกรรมย่อย (ตามแผน)</label>
          <div class="col-sm-9 col-form-label">
            <?= $row["project_sub_name"] ?>
          </div>
        </div>
        <div class="row mb-3">
          <div class="-flex p-2 bd-highlight" style="background-color: #bbc7cd;">
            <label>ภาพรวมการดำเนินงาน</label>
          </div>
        </div>
        <div class="row mb-3">
          <label for="project_code" class="col-sm-3 col-form-label" style="font-weight: bold;">ลักษณะการดำเนินงาน</label>
          <div class="col-sm-9 col-form-label">
            <?= $row["operation_type"] ?>
          </div>
        </div>
        <div class="row mb-3">
          <label for="project_code" class="col-sm-3 col-form-label" style="font-weight: bold;">รหัสโครงงาน (ถ้ามี)</label>
          <div class="col-sm-9 col-form-label">
            <?= $row["project_code"] ?>
          </div>
        </div>
        <div class="row mb-3">
          <label for="project_code" class="col-sm-3 col-form-label" style="font-weight: bold;">การใช้งบประมาณ</label>
          <div class="col-sm-9 col-form-label">
            <?= $row["use_budget"] ?>
          </div>
        </div>
        <div class="row mb-3">
          <label for="project_code" class="col-sm-3 col-form-label" style="font-weight: bold;">ปีงบประมาณที่ดำเนินโครงการ</label>
          <div class="col-sm-9 col-form-label">
            <?= $row["budget_year"] ?>
          </div>
        </div>
        <div class="row mb-3">
          <label for="project_code" class="col-sm-3 col-form-label" style="font-weight: bold;">หน่วยงานที่รับผิดชอบ</label>
          <div class="col-sm-9 col-form-label">
            <?= $row["institution"] ?>
          </div>
        </div>
        <div class="row mb-3">
          <label for="project_code" class="col-sm-3 col-form-label" style="font-weight: bold;">จังหวัดที่ดำเนินโครงการ</label>
          <div class="col-sm-9 col-form-label">
            <?= $row["province"] ?>
          </div>
        </div>
        <div class="row mb-3">
          <label for="project_code" class="col-sm-3 col-form-label" style="font-weight: bold;">กลุ่มเป้าหมายในการดำเนินงาน</label>
          <div class="col-sm-9 col-form-label">
            <?= $row["target_user"] ?>
          </div>
        </div>
        <div class="row mb-3">
          <div class="-flex p-2 bd-highlight" style="background-color: #bbc7cd;">
            <label>รายละเอียดการดำเนินงาน</label>
          </div>
        </div>
        <div class="row mb-3">
          <label for="project_code" class="col-sm-3 col-form-label" style="font-weight: bold;">วัตถุประสงค์และรายละเอียดของโครงการ</label>
          <div class="col-sm-9 col-form-label">
            <?= $row["project_objective"] ?>
          </div>
        </div>
        <div class="row mb-3">
          <label for="project_code" class="col-sm-3 col-form-label" style="font-weight: bold;">ผลผลิต/ผลลัพธ์ ตามตัวชี้วัด</label>
          <div class="col-sm-9 col-form-label">
            <?= $row["project_result"] ?>
          </div>
        </div>
        <div>
          <div class="-flex p-2 bd-highlight" style="background-color: #bbc7cd;">
            <label>แหล่งงบประมาณตามแผน</label>
          </div>
          <div class="row mb-3">
            <label for="project_code" class="col-sm-3 col-form-label" style="font-weight: bold;">งบประมาณของจังหวัด/กลุ่มจังหวัด</label>
            <div class="col-sm-9 col-form-label">
              จำนวน <?= ($row["budget_province_plan"] == '') ? "0" : number_format($row["budget_province_plan"]) ?> บาท
            </div>
          </div>
          <div class="row mb-3">
            <label for="project_code" class="col-sm-3 col-form-label" style="font-weight: bold;">งบประมาณของกระทรวง/กรม</label>
            <div class="col-sm-9 col-form-label">
              จำนวน <?= ($row["budget_department_plan"] == '') ? "0" : number_format($row["budget_department_plan"]) ?> บาท
            </div>
          </div>
          <div class="row mb-3">
            <label for="project_code" class="col-sm-3 col-form-label" style="font-weight: bold;">งบประมาณขององค์กรปกครองส่วนท้องถิ่น</label>
            <div class="col-sm-9 col-form-label">
              จำนวน <?= ($row["budget_local_plan"] == '') ? "0" : number_format($row["budget_local_plan"]) ?> บาท
            </div>
          </div>
          <div class="row mb-3">
            <label for="project_code" class="col-sm-3 col-form-label" style="font-weight: bold;">งบประมาณของภาคเอกชน/ชุมชน</label>
            <div class="col-sm-9 col-form-label">
              จำนวน <?= ($row["budget_private_plan"] == '') ? "0" : number_format($row["budget_private_plan"]) ?> บาท
            </div>
          </div>
          <div class="-flex p-2 bd-highlight" style="background-color: #bbc7cd;">
            <label>งบประมาณที่ได้รับจัดสรร</label>
          </div>
          <div class="row mb-3">
            <label for="project_code" class="col-sm-3 col-form-label" style="font-weight: bold;">งบประมาณของจังหวัด/กลุ่มจังหวัด</label>
            <div class="col-sm-9 col-form-label">
              จำนวน <?= ($row["budget_province_receive"] == '') ? "0" : number_format($row["budget_province_receive"]) ?> บาท
            </div>
          </div>
          <div class="row mb-3">
            <label for="project_code" class="col-sm-3 col-form-label" style="font-weight: bold;">งบประมาณของกระทรวง/กรม</label>
            <div class="col-sm-9 col-form-label">
              จำนวน <?= ($row["budget_department_receive"] == '') ? "0" : number_format($row["budget_department_receive"]) ?> บาท
            </div>
          </div>
          <div class="row mb-3">
            <label for="project_code" class="col-sm-3 col-form-label" style="font-weight: bold;">งบประมาณขององค์กรปกครองส่วนท้องถิ่น</label>
            <div class="col-sm-9 col-form-label">
              จำนวน <?= ($row["budget_local_receive"] == '') ? "0" : number_format($row["budget_local_receive"]) ?> บาท
            </div>
          </div>
          <div class="row mb-3">
            <label for="project_code" class="col-sm-3 col-form-label" style="font-weight: bold;">งบประมาณของภาคเอกชน/ชุมชน</label>
            <div class="col-sm-9 col-form-label">
              จำนวน <?= ($row["budget_private_receive"] == '') ? "0" : number_format($row["budget_private_receive"]) ?> บาท
            </div>
          </div>
          <div class="-flex p-2 bd-highlight" style="background-color: #bbc7cd;">
            <label>งบประมาณตามที่ใช้จ่ายจริง</label>
          </div>
          <div class="row mb-3">
            <label for="project_code" class="col-sm-3 col-form-label" style="font-weight: bold;">งบประมาณของจังหวัด/กลุ่มจังหวัด</label>
            <div class="col-sm-9 col-form-label">
              จำนวน <?= ($row["budget_province_use"] == '') ? "0" : number_format($row["budget_province_use"]) ?> บาท
            </div>
          </div>
          <div class="row mb-3">
            <label for="project_code" class="col-sm-3 col-form-label" style="font-weight: bold;">งบประมาณของกระทรวง/กรม</label>
            <div class="col-sm-9 col-form-label">
              จำนวน <?= ($row["budget_department_use"] == '') ? "0" : number_format($row["budget_department_use"]) ?> บาท
            </div>
          </div>
          <div class="row mb-3">
            <label for="project_code" class="col-sm-3 col-form-label" style="font-weight: bold;">งบประมาณขององค์กรปกครองส่วนท้องถิ่น</label>
            <div class="col-sm-9 col-form-label">
              จำนวน <?= ($row["budget_local_use"] == '') ? "0" : number_format($row["budget_local_use"]) ?> บาท
            </div>
          </div>
          <div class="row mb-3">
            <label for="project_code" class="col-sm-3 col-form-label" style="font-weight: bold;">งบประมาณของภาคเอกชน/ชุมชน</label>
            <div class="col-sm-9 col-form-label">
              จำนวน <?= ($row["budget_private_use"] == '') ? "0" : number_format($row["budget_private_use"]) ?> บาท
            </div>
          </div>
          <div class="-flex p-2 bd-highlight" style="background-color: #bbc7cd;">
            <label>รายละเอียดอื่น ๆ เพิ่มเติม</label>
          </div><br>

          <div class="row mb-3">
            <label for="project_code" class="col-sm-3 col-form-label" style="font-weight: bold;">ลิงค์หรือรายละเอียดอื่น ๆ <br>เพิ่มเติมที่น่าจะเป็นประโยชน์</label>
            <div class="col-sm-9 col-form-label">
              <?= $row["project_additional"] ?>
            </div>
          </div>
          <div class="row mb-3">
            <label for="project_code" class="col-sm-3 col-form-label" style="font-weight: bold;">ไฟล์แนบ (ถ้ามี)</label>
            <div class="col-sm-9 col-form-label">
              <a class="text-primary decoration-none" href="/index/upload_file/<?= $row["file_path"] ?>" download><?= $row["file_path"] ?></a>
            </div>
          </div>

        </div>
      </div>
    </div>





</body>

</html>